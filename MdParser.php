<?php

declare(strict_types=1);

namespace semmelsamu;

function db($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}


class MdParser
{   
    public function text($text)
    {
        $lines = $this->processLines($text);
        $meta = $this->processMetadata($lines);
        $blocks = $this->processBlocks($lines);
        
        return $this->renderBlocks($blocks);
    }
    
    protected function processLines($text)
    {
        $text = str_replace(array("\r\n", "\r"), "\n", $text);
        $text = trim($text, "\n ");
        
        return explode("\n", $text);
    }
    
    protected function processMetadata(&$lines)
    {
        $meta_lines = array();
        
        if(trim($lines[0]) != "---")
            return $lines;
            
        array_shift($lines);
        
        $line = array_shift($lines);
            
        while($line != "---")
        {
            array_push($meta_lines, $line);
            $line = array_shift($lines);
        }
        
        return $meta_lines;
    }
    
    
    protected $type_buffer = false;
    
    protected function getTypeOfLine($line)
    {
        if(!$this->type_buffer)
        {
            if(preg_match("/^#{1,6} (.*)/", $line))
                return "header";
                
            if(substr($line, 0, 3) == "```")
            {
                $this->type_buffer = "code";
                return "code";
            }
                
            if(empty(trim($line)))
                return "empty";
        }
        else if($this->type_buffer == "code")
        {
            if(substr($line, 0, 3) == "```")
                $this->type_buffer = false;
                
            return "code";
        }
            
        return "paragraph";
    }
    
    protected function processBlocks($lines)
    {
        $blocks = array();
        
        $block = array(
            "type" => "empty", 
            "lines" => array()
        );
        
        foreach($lines as $line)
        {
            $line_type = $this->getTypeOfLine($line);
            
            if($block["type"] != $line_type)
            {
                if($block["type"] != "empty")
                    array_push($blocks, $block);
                    
                $block = array(
                    "type" => $line_type,
                    "lines" => array()
                );
            }
            
            array_push($block["lines"], $line);
        }
        
        array_push($blocks, $block);
        
        return $blocks;
    }
    
    protected function renderBlocks($blocks)
    {
        $result = "";
        
        foreach($blocks as $block)
        {
            $result .= $this->renderBlock($block["type"], $block["lines"]);
        }
        
        return $result;
    }
    
    protected function renderBlock($type, $lines)
    {
        $result = "";
        
        switch($type)
        {
            case "paragraph":
                $result = $this->renderParagraph($lines);
                break;
                
            case "header":
                $result = $this->renderHeader($lines);
                break;
                
            case "code":
                $result = $this->renderCode($lines);
                break;
                
            case "list":
                $result = $this->renderList($lines);
                break;
                
            default:
                $result = $this->renderText(implode("\n", $lines));
                break;
        }
        
        return $result;
    }
    
    /**
     * RENDERER
     */
    
    protected function renderText($text)
    {
        $result = "";
        
        $result .= $text;
        
        return $result;
    }
    
    protected function renderParagraph($lines)
    {
        return "<p>" . $this->renderText(implode(" <br> ", $lines)) . "</p>";
    }
    
    protected function renderHeader($lines)
    {
        $line = array_shift($lines);
        
        $matches = array();
        
        if(!preg_match("/^#{1,6} (.*)/", $line, $matches))
            return null;
            
        $header = 1;
        
        while(substr($line, $header, 1) == "#")
            $header++;
            
        return "<h$header>$matches[1]</h$header>";
    }
    
    protected function renderCode($lines)
    {
        return "<pre>". substr(implode("\n", $lines), 3, -3) ."</pre>";
    }
}
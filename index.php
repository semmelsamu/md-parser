<style>
    
    body {
        margin: 64px;
        background: #232323;
    }
    
    * {
        margin: 0 0 16px 0;
        padding: 0;
        
        font-family: 'Segoe UI', 'Arial', sans-serif;
        color: #ffffff;
    }
    
    pre {
        font-family: 'Source Code Pro', monospace;
        padding: 16px;
        background: rgba(0,0,0,0.3);
    }
    
</style>

<?php

include("MdParser.php");
use \semmelsamu\MdParser;

$markdown = file_get_contents("README.md");

$parser = new MdParser();
echo $parser->text($markdown);
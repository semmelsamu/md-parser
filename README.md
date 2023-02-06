# md-parser

Parser for Markdown (md) to HTML.
Written in PHP.


## Prerequisites

- Any Webserver capable of running PHP (Tested on PHP >= 8)


## Installation

Copy `MdParser.php` to a static location on your Server.


## Setup

Include the file. 
Use the namespace `semmelsamu` and create a new instance of `MdParser`.

```
include("MdParser.php");
use \semmelsamu\MdParser;

$parser = new MdParser();
```


## How to parse

Use the function `text`.

```
$parser->text("**Hello!** How's it going?");
```
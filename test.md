---

date: 2023-02-05

tags:
    - md
    - php
    
contributors: [semmelsamu]

---


# Headings.

# Heading 1

## Heading 2

### Heading 3

#### Heading 4

##### Heading 5

###### Heading 6

####### Not a heading


# Headings alternate Syntax.

Heading 1
=========

Heading 2
---------

# Paragraphs.

Text paragraph. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.


# Line breaks.

This is a line. If prefixed with two or more spaces like this:  
There should be a line break in between.


# Emphasis.

This is *italic* text. This is _also italic_ text.

This is **bold** text. This is __also bold__ text.

This is ***bold and italic*** text. This is ___also bold and italic___ text.


# Blockquotes.

> This is a blockquote.

> This is also a blockquote.
> > This is a nested blockquote.

> This is a blockquote with other stuff in it:
> 
> ### A heading
> 
> Some **text**.  
> A line break.
>
> - A List.
> - Another point.


# Lists.

Unordered lists:

- Unordered list item.
- Unordered list item.
- Unordered list item.

Ordered lists:

1. Ordered list item.
2. Ordered list item.
3. Ordered list item.

Indented unordered lists:

- List item.
- List item.
    - Indented list item.
    - Indented list item.
    - Indented list item.
- List item.

Indented ordered lists:

1. List item.
2. List item.
    1. Indented list item.
    2. Indented list item.
    3. Indented list item.
3. List item.

Starting unordered list items with a number:

- 2023. The point of this number is not escaped.
- 2023\. This point is escaped.

Adding elements to lists:

- List item.

    This paragraph is part of the list item.
    
    > This blockquote is also part of the list item.
    

# Code.

This is `inline code`. This is ``an escaped ` character``, made with two code ticks.

```
This is a code block.
```

Code with syntax highlighting:

```php
$parser = new MdParser();
echo $parser->text("**Hello World!**");
```

# Horizontal lines.

Text above.

---
***
___
----
****
____

Text below.


# Links.

This is [a link](https://www.example.com).

This is a [link with a title](https://www.example.com "This link directs to an example page.").

This is a url: https://www.example.com/

This is a email adress: fake@example.com

**Enclosed with sharp brackets:**

<https://www.example.com/>

<fake@example.com>

This is a *italic [link](https://www.example.com)*.

This is a **bold [link](https://www.example.com)**.

This is a ***italic and bold [link](https://www.example.com)***.

This is a code [`link`](https://www.example.com).


# Reference links.


# Images.

![Alternate Text of the image.](https://images.pexels.com/photos/3244513/pexels-photo-3244513.jpeg?auto=compress&cs=tinysrgb&w=800 "Title of the image.")

Image with link:

[![Alternate Text of the image.](https://images.pexels.com/photos/3244513/pexels-photo-3244513.jpeg?auto=compress&cs=tinysrgb&w=800 "Title of the image.")](https://www.example.com)


# Wiki links.

This is a [[wiki link]].


# Tables.

|Heading.     |Heading.       |Heading.      |
|:------------|:-------------:|-------------:|
|Left aligned.|Center aligned.|Right aligned.|


# Callouts.

> ![callout] Callout heading.
> Callout content.


# LaTex.

The *sum sign* is often used for abbreviating notation:

$$\sum_{k=m}^{n} a_k := a_m + a_{m+1} + \dots + a_n$$

In which $n < m$ the (empty) sum is defined as $0$.


# Custom anchors.

### Heading with custom anchor {#custom-anchor}


# More text formats.

Supscripts: x^2^
Subscripts: H~2~O

This is ~~strikethrough~~ text.

    
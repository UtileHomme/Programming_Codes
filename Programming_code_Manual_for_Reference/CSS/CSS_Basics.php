<!-- What is CSS -->

- it is a style sheet language used for describing the look and formatting of a document
written in a markup language
- adds style to your html
- can completely control how the web pages look without changing your HTML

An Analogy
  - Imagine a fence has been built using HTML
  - The painting etc. is done using CSS

- If the fonts mentioned in the font-family selector are not found, then the browser will upload its default font-family

<!-- What are block level and inline level elements -->

1. Block level elements
  - form a visible block on the page
  - have a definable width and height
  - they will appear in a new line from whatever content went before it and any content
   that goes after it will also begin on a new line

  Eg - paragraphs, list, navigation menus, footers etc.

2. Inline level elements
  - are contained within block-level elements and surround only small parts of the document's content
  , not entire paragraphs and groupings of content
  - will not cause a new line to appear in the document
  - they would normally appear inside a "paragraph"

  Eg - anchor, "em", "strong" etc.

  ** apply the property "float:left" whenever we want to stack to paragraphs("block" by default) side by side

<!-- What does the line-height property define -->

- defines the amount of space above and below inline elements
- can accept px, em, rem

** a percentage value is the font size of the element multiplied by the percentage

-- Sometimes "unitless" values are given so that "child" elements can inherit from the parent thus computing their own sizes

--------------------------------------------DONE------------------------------------------------------

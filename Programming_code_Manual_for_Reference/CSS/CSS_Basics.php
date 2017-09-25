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

  Eg - paragraphs, list, navigation menus, footers,headers etc.

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

<!-- What is the use of -webkit or -moz before an css element -->

- it is used for browser support

<!-- What is the "static" positioning   -->

- If we have three statically positioned elements in the code, they will stack one over the other
- We can't change the "top", "left", "right","bottom" properties in this positioning

<!-- What is relative positioning -->

- The element will be positioned relative to the element it is inside or to the element just before it
- The element that follows after the "relative" positioned element won't be affected

<!-- What is absolute positioning -->

- The element is taken out of the normal flow of the page
- All the elements are made to shift from the window margin
- might overlap other elements too

<!-- How to add link to access font-awesome icons -->

<link rel="stylesheet" href=""https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"">
</head>

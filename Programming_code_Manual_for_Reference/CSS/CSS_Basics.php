** There are three ways in which files can be separated on a website

 - structure (HTML)
 - presentation (CSS)
 - behaviour (Javascript)

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

  <!-- What characteristic does "block" element have -->

  - always begins on a new line
  - its height, line-height, top-margin and bottom-margin can be specified
  - its width defaults to 100% of its containing element unless otherwise stated

2. Inline level elements
  - are contained within block-level elements and surround only small parts of the document's content
  , not entire paragraphs and groupings of content
  - will not cause a new line to appear in the document
  - they would normally appear inside a "paragraph"

  Eg - anchor, "em", "strong", "span", "label", "input","img" etc.

  ** apply the property "float:left" whenever we want to stack to paragraphs("block" by default) side by side

  <!-- What characteristic does 'inline" element have' -->

  - begins on the same line as its sibling
  - its height, line-height, top-margin and bottom-margin can't be changed
  - its width is as wide as the content and can't be modified

  <!-- What characteristic does 'inline-block' element have -->

  - can fit on the same line as "inline" or "inline-block" elements
  - its height, line-height,top-margin and bottom-margin can be specified
  - its width defaults to 100% of its containing element, but can be changed

<!-- Eg of useless CSS -->
span
{
    <!-- won't have any effect -->
    height: 20px;
    top: 20px
}

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
- this is the default positioning

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

<!-- What happens if different changes are made for the same selector -->

p
{
    color: red;
    font-weight: bold;
}

p
{
    color: green;
}

- The second one overrides the first one

** specifix "selectors" might not follow this rule.

<!-- Difference between "id" and "class" -->

- an element can have "multiple" classes
- an element can have only "one" id

<!-- Understanding "percentages" in size -->

#rect
{
    width: 20%;
    height: 100px;
}

- percentages depend on the size of the container
- the width here depends on the container size too
    - if container or parent size is 500px, then the width will be 20% of that which is 100px;

<!-- Understanding "em" in size -->

div
{
    font-size : 16px;
    height: 10em;
}

- 1em equals 16px
- Therefore, the "div" above is 160px in height

Eg -

.container
{
    font-size: 20px;
}
#elem
{
    width: 10em;
    height: 15em;
}

<body>
    <div class="container">
        <div id="elem">

        </div>
    </div>
</body>

- As there is no "font-size" specified for "elem" class, "em" looks for the closest ancestor with that property
- For #elem, 1em represents 20px
- Therefore, height = 300px and width = 200px

<!-- Understanding "viewport(vh / vw)" for size -->

- viewport represents the browser window size
- If the window size is 2000 x 1000 and

p
{
    font-size: 2vh;
}

then every "p's" font size will be 2 * 1000 / 10 = 20px;

** As the browser window gets resized, the font-size willl change accordingly

** All of the above, are relative properties used to make pages responsive

<!-- What is the CSS box model -->

<!-- Representation -->
https://imgur.com/a/chLSp

- According to it, every element on the page is a rectangular box that may have "width" , "height", "margin" , "padding" or "border"

- the dimensions of such a box are calculated by summing the values of the above mentioned properties.

Eg -

div
{
    width: 600px;
    height: 200px;
    border: 4px solid blue;
    margin: 20px;
    padding: 10px;
}

- the total width of the entire element is (20+4+600+10+4+20) px
- this is sum of the content width and left and right margins, borders and paddings

*** Some elements do not accept top and bottom marign and padding

<!-- How does the border attribute work -->

- it occupies the space between the margin and padding, providing an outline of the element

Eg -

div
{
    border-width: 4px;
    border-style: solid;
    border-color: red;
}

div
{
    border: 4px solid red;
}

<!-- How does margin and padding work -->

- help with positioning and visibility

<!-- Margin -->

- sets the amount of space that surrounds and element, outside its border
- used for positioning the element inside a page and distancing it from other elements

Eg -

div
{
    margin-top: 20px;
    margin-left: 10px;
    margin-bottom: 20px;
}

div
{
    <!-- top, right, bottom and left -->
    margin: 20px 5px 15px 10px
}

<!-- Padding -->

- sets the space between the "content" and the "border"

Eg -
div
{
    padding: 10px;
}

Eg -

div
{
    padding-top: 30px;
    padding-right: 15px;
}

<!-- How to use the "box-sizing" property and why is it required -->

- sets the outer limit of the element to a specific enclosing property
- can have the following values: "content, padding, border"

1. By default, it is set to "content-box"

- this means that the "width" and "height" specified for the element are not its final sizes and additional
"padding" , "border" and "margin" will push its border

2. The next value is "padding-box"

- the limit is set to enclose the padding as well
- the "content" will be shrunk to make room for the padding

Eg -

div
{
    box-sizing: padding-box;
    width: 500px;
    height: 300px;
    padding: 30px;
}

- here, the final width will be 500px leaving only 440 (500-60) px for the content

3. The next value is "border-box"

- any "border" and / or "padding" property is included within the "width" and "height" of the element
- only margin will increase its size

div
{
    box-sizing: border-box;
    width: 500px;
    height: 300px;
    padding: 30px;
    border: 5px solid green
}

- here, the final width is 500 leaving only (500 - 60 - 10 = 430)px for the content

*** best model is the last one only

<!-- How does the "display" property work -->

- sets how much space an element should occupy
- can have the following values : "block", "inline", "inline-block", "none"

a. "block"
    - occupies the whole width of the page ad no other element is allowed to be place to the left and right of it

b. "inline"
    - can be part of the "block" element and more "inline" elements can exist on the same line
    - do not accept "top and bottom" margin and padding

c. "inline-block"
    - elements are somewhere in the middle
    - creates a block element, that can be surrounded by other elements , as if "inline"

d. "none"
    - the browser behaves as if the element does not exist in the document tree
    - the descendants of the element also have their display property turned off

<!-- How does the "float" property help -->

- it positions elements to the left or right side of parent element
- all other elements will float around the floated element 

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
- this is the default positioning according to normal flow of the page

<style media="screen">

div.static {
    position: static;
    border: 3px solid #73AD21;
}

</style>

<!-- What is relative positioning -->

- The element will be positioned relative to the element it is inside or to the element just before it
- The element that follows after the "relative" positioned element won't be affected
- Other content will not be adjusted to fit into any gap left by the element

<style media="screen">

div.relative {
    position: relative;
    left: 30px;
    border: 3px solid #73AD21;
}

</style>

<!-- What is absolute positioning -->

- The element is taken out of the normal flow of the page
- All the elements are made to shift from the window margin
- might overlap other elements too

<!-- Difference between relative and absolute positioning pictorially -->

https://imgur.com/a/VinNy

<!-- What is fixed positioning -->

- the element is positioned relative to the viewport
- it always stays in the same place even if the page is scrolled
- the top, right, bottom and left are used to position the element
- it doesn't leave a gap in the page where it would normally have been located

<style media="screen">

div.fixed {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 300px;
    border: 3px solid #73AD21;
}

</style>

<!-- What is sticky positioning -->

- here, the element is positioned based on the user's scroll position
- it toggles between "relative" and "fixed" depending on the scroll position
- it is positioned relative until a given offset position is met in the viewport - then it sticks in the place like "position:fixed"

<style media="screen">

div.sticky {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
    background-color: green;
    border: 2px solid #4CAF50;
}

</style>

<!-- How to overlapp elements in a particular order -->

- the "z-index" specifies the stack order of an element (Which element should be placed in front of , or behind, the others)
- an element can have positive or negative stack order
- the element with greater stack order is always in front of an element with a lower stack order

*** if two positioned elements overlap without a "z-index" specified, the element positioned last in the HTML code will be shown on top




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


<!-- What is the shorthand for the "border" property -->

border: 5px solid red;
- border-width, border-style , border-color

<!-- What is the shorthand for the "margin" property -->

<!-- When 4 values are mentioned -->
margin: 25px 50px 75px 100px;
top margin is 25px
right margin is 50px
bottom margin is 75px
left margin is 100px

<!-- When 3 values are mentioned -->

margin: 25px 50px 75px;
top margin is 25px
right and left margins are 50px
bottom margin is 75px

<!-- When 2 values are mentioned -->

margin: 25px 50px;
top and bottom margins are 25px
right and left margins are 50px

<!-- What is the use of "auto" as an property for "margin" -->

- it is used to center an element along with its container.

https://jsfiddle.net/oktukqbh/

<!-- What is "margin-collapse" -->

- Top and bottom margins of an element are sometimes collapsed into a single margin that is equal to the largest of the two margins
- doesn't apply to left and right margins

https://jsfiddle.net/6d9d49sk/

<!-- Understanding padding and width -->

- the "width" property specifies the width of an element's content area
- the content area is the portion inside the padding , border and margin of the element

- if the element has a specified width, the padding added to that element will be added to the total width of the element

- To keep the width intact, and decrease the other attributes use "box-sizing"

https://jsfiddle.net/x894gzeu/

<!-- Understanding height and width -->

** The height and width properties do not include padding, borders, or margins; they set the height/width of the area inside the padding, border, and margin of the element!

<!-- Understanding "outline" attribute -->
- an outline is a line that is drawn around elements, OUTSIDE the borders, to make the element "stand out"

** Outline differs from borders!! Unlike border, the outline is drawn outside the element's border and may overlap other elements
- the outline is NOT a part of the element's dimensions; the element's total width and height is not affected by the width of the outline

<!-- Different outline styles -->
https://jsfiddle.net/brremgyy/

*** None of the other outline properties will have any effect, unless the "outline-style" property is set

<!-- Understanding "outline-offset" property -->

- it adds space between an outline and the "edge/border" of an element
- the space between an element and its outline is transparent

https://jsfiddle.net/m66dz75u/

<!-- Understanding the "text-align: justify" property -->

- each line is stretched so that every line has equal width, and the left and right margins are straight

https://jsfiddle.net/eh9wuudg/

<!-- Understanding the text-decoration property -->

- is used to decorate the text

https://jsfiddle.net/hpkbt5qL/

<!-- Understanding the "text-transform" property -->

- is used to specify the uppercase and lowercase letters in a text
- can also be used to capitalize every first letter of every word

https://jsfiddle.net/ggeLkdux/

<!-- Understanding the "text-indent" property -->

- is used to specify the indentation of the first line of a text

https://jsfiddle.net/8yzcs1v8/

<!-- Understanding the "text-shadow" property -->

- is used to add shadow to the text

https://jsfiddle.net/pvo6z5pd/

<!-- Difference between "serif" and "sans-serif" fonts -->

- There are 2 types of font family names

a. Generic family
- a group of font families with a similar look (like "Serif" or "Monospace")

b. Font family
- a specific font family (like "Times New Roman" or "Arial")

Serif
- have small lines at the ends on some characters

Sans-serif
- "sans" means "without"
- doesn't have lines at the ends of characters

Monospace
- have the same width

** On computer screens, "sans-serif" fonts are easier to read than "serif" fonts

<!-- Understanding font-family property -->

- should have several font names as a fallback system
- if the browser doesn't support the first font, it tries the next font and so on

Eg -

<style media="screen">
p
{
    font-family: "Times New Roman", Times, serif;
}

</style>

<!-- Understanding font-style property -->

<style media="screen">

p.normal {
    font-style: normal;
}

p.italic {
    font-style: italic;
}

p.oblique {
    font-style: oblique;
}

</style>

?>

<!-- Understanding font-size property -->

<style media="screen">
h1 {
    font-size: 40px;
}

h2 {
    font-size: 30px;
}

p {
    font-size: 14px;
}

</style>


<!-- Understanding "em" in font size -->

- allows user to resize the text (in the browser menu)

1 em = 16px

Eg -

<style media="screen">
h1 {
    font-size: 2.5em; /* 40px/16=2.5em */
}

h2 {
    font-size: 1.875em; /* 30px/16=1.875em */
}

p {
    font-size: 0.875em; /* 14px/16=0.875em */
}


</style>

<!-- How to make the font-size work in all browsers -->

<style media="screen">
body {
    font-size: 100%;
}

h1 {
    font-size: 2.5em;
}

h2 {
    font-size: 1.875em;
}

p {
    font-size: 0.875em;
}

</style>

<!-- Understanding font-weight property -->

- specifies the weight of the font

<style media="screen">
p.normal {
    font-weight: normal;
}

p.thick {
    font-weight: bold;
}
</style>

<!-- Understanding the font-variant property -->

- specifies whether or not a text should be displayed in a "small-caps" font
- all lowercase letters are converted to uppercase letters
- the converted "uppercase" letters appears in a smaller font size than the original uppercase letters in the text

Eg -

<style media="screen">

p.normal {
    font-variant: normal;
}

p.small {
    font-variant: small-caps;
}

</style>

<!-- Different ways of adding icons on the website -->

- Add the name of the specified icon class to any inline HTML element like <i></i> or <span></span>

<!-- Font-Awesome icons  -->

Eg -

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <i class="fa fa-cloud"></i>
    <i class="fa fa-heart"></i>
    <i class="fa fa-car"></i>
    <i class="fa fa-file"></i>
    <i class="fa fa-bars"></i>
</body>

<!-- Bootstrap icons -->

Eg -

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <i class="glyphicon glyphicon-cloud"></i>
    <i class="glyphicon glyphicon-remove"></i>
    <i class="glyphicon glyphicon-user"></i>
    <i class="glyphicon glyphicon-envelope"></i>
    <i class="glyphicon glyphicon-thumbs-up"></i>
</body>

<!-- Google icons -->

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <i class="material-icons">cloud</i>
    <i class="material-icons">favorite</i>
    <i class="material-icons">attachment</i>
    <i class="material-icons">computer</i>
    <i class="material-icons">traffic</i>
</body>

<!-- CSS links -->

- Different link states

a:link - a normal, unvisited link
a:visited - a link the user has visited
a:hover - a link when the user mouses over it
a:active - a link the moment it is clicked

<style media="screen">

/* unvisited link */
a:link {
    color: red;
}

/* visited link */
a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}

</style>


** a:hover MUST come after a:link and a:visited
** a:active MUST come after a:hover

Understanding text-decoration property

<style media="screen">

a:link
{
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}

</style>

<!-- How to specify background color for links -->

<style media="screen">

a:link {
    background-color: yellow;
}

a:visited {
    background-color: cyan;
}

a:hover {
    background-color: lightgreen;
}

a:active {
    background-color: hotpink;
}

</style>

<!-- How to set different list item markers in list  -->

<style media="screen">

ul.a {
    list-style-type: circle;
}

ul.b {
    list-style-type: square;
}

ol.c {
    list-style-type: upper-roman;
}

ol.d {
    list-style-type: lower-alpha;
}

</style>

<!-- How to set an image as a list item marker -->

<style media="screen">
ul
{
    list-style-image: url('sqpurple.gif');
}
</style>

<!-- How to position list item markers -->

<style media="screen">

ul
{
    list-style-position: inside;
}

</style>

<!-- How to remove default list settings  -->

<style media="screen">

ul
{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

</style>

** shorthand for above

<style media="screen">

ul
{
    list-style: square inside url("sqpurple.gif");
}

</style>

<!-- How to specify table borders -->

<style media="screen">

table, th, td
{
    border: 1px solid black;
}

</style>

<!-- How to collapse borders into a single border  -->

<style media="screen">

table
{
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

</style>

<!-- How to get a single border around the table without any for the rows and columns -->

<style media="screen">

table
{
    border: 1px solid black;
}

</style>

<!-- How to set height and width of the table -->

<style media="screen">

table {
    width: 100%;
}

th {
    height: 50px;
}

</style>

<!-- How to horizontally and vertically align text in a table -->

<style media="screen">

th
{
    text-align: left;
}

td
{
    height: 50px;
    vertical-align: bottom;
}

</style>

<!-- How to control the padding inside a table -->

<style media="screen">

th, td
{
    padding: 15px;
    text-align: left;
}

</style>

<!-- How to set horizontal dividers between rows -->

<style media="screen">

th, td
{
    border-bottom: 1px solid #ddd;
}

</style>

<!-- How to create a hoverable table( highlight table rows on mouse over) -->

- use the ":hover" selector on "<tr>"

<style media="screen">

tr:hover
{
    background-color: #f5f5f5;
}

</style>

<!-- How to create a striped table  -->

- use the "nth-child()" selector

<style media="screen">

tr:nth-child(even)
{
    background-color: #f2f2f2;
}

</style>

<!-- How to create a responsive table -->

- a horizontal bar will be displayed in such a case

<?php

<div style="overflow-x:auto;">

<table>
... table content ...
</table>

</div>

?>

<!-- Understanding the display property -->

- specifies if/how an element is displayed

"display:none" is commonly used with JS to hide and show elements without deleting and recreating them

<style media="screen">

li
{
    display: inline;
}

</style>

- this will display the links side by side

<style media="screen">

a
{
    display: inline;
}

</style>

- this will display the links one after the other

<!-- Difference between "display:none" and "visibility:hidden" -->

a. display:none
- hides an element
- it is as if the element was never there

b. visibility:hidden
- hides the element but takes up the element space

<!-- Understanding CSS width and max-width -->

** a block level element always takes up the full width available
- setting the width of a block level element will prevent it from stretching out to the edge of its container
- we can set the margins to auto, to horizontally center the element within its container

** the problem with "div" occurs when the browser window is smaller than the width of the element
- the browser then adds a horizontal scrollbar to the page

- Using "max-width" will improve the browser's handling of small windows

Eg (with and without max-width)

<style media="screen">

div.ex1 {
    width: 500px;
    margin: auto;
    border: 3px solid #73AD21;
}

div.ex2 {
    max-width: 500px;
    margin: auto;
    border: 3px solid #73AD21;
}

</style>

<!-- Understanding the "overflow" property -->

- it controls what happens to the content that is too big to fit into an area
- specifies whether to clip content or to add scrollbards when the content of an element is too big to fit in a specified area

** the overflow element only works for block elements with a specified height

a. overflow:visible
- the content is not clipped and it renders outside the element box

<style media="screen">

div {
    width: 200px;
    height: 50px;
    background-color: #eee;
    overflow: visible;
}

</style>

b. overflow:hidden
- here, the overflow is clipped and the rest of the content is hidden

<style media="screen">

div {
    overflow: hidden;
}

</style>

c. overflow:scroll
- here, the overflow is clipped and the scrollbar is added to scroll inside the box
** it adds the scrollbar both horizontally and vertically

<style media="screen">

div {
overflow: scroll;
}

</style>

d. overflow: auto
- it is similar to scroll, only it adds scrollbards when necessary

<style media="screen">

div {
    overflow: auto;
}

</style>

e. overflow-x / overflow-y

- specifies whether to change the overflow of content just horizontally or vertically

<style media="screen">

div {
overflow-x: hidden; /* Hide horizontal scrollbar */
overflow-y: scroll; /* Add vertical scrollbar */
}

</style>

<!-- Understanding the "float" and "clear" property -->

- "float" specifies how an element should float
- "clear" specifies what elements can float beside the cleared element and on which side

a. float
- is used for positioning and layout on web pages

1. float:right
 - floats some element to the right

 https://jsfiddle.net/5eeexgvh/

2. float:left
- floats some element to the left

https://jsfiddle.net/x9ubzj6x/

3. float:none
- no floating takes place

https://jsfiddle.net/m01zuf9z/

b. clear
- specifies which elements can float beside the cleared element and on which side

** the most common way is to use the "clear" property after we have used the "float" property

** when clearing floats, we should match the clear to the float
- if an element is floated to the left, then we should clear to the left
- our floated element will continue to float, but the cleared element will appear below it on the web page

- Without using "clear"
https://jsfiddle.net/gf5uwt0L/

- using "clear"
https://jsfiddle.net/97y6hu3r/

<!-- How to insert an image inside a border along with text -->

https://jsfiddle.net/nv0hxv6e/

<!-- An example web layout using float and clear -->

https://jsfiddle.net/zsn4krf3/

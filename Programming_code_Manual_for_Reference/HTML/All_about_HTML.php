<!-- What is HTML -->

- stands for Hypertext Markup Language
- is used to structure and display a web page and its content

<!-- What is <meta charset="utf-8" />   -->

- each character on the screen has a numerical value
- For char/words for other languages(Mandarin, Arabic, Japanese) we need another system of encoding
- UTF-8 lets us write text in most of the languages

Full form - UTF-8 (U from Universal Character Set + Transformation Format—8-bit)

<!-- How to make a word "italic","underline" and "bold" in HTML -->

-- use "<em></em>" tag
-- use "<strong></strong>" tag
-- use "<u></u>" tag

** Heading elements (h1....h6) should be used for headings only. They should not be used just to make text bold or big.

<!-- Difference between absolute and relative URLs -->

1. Absolute URLs
 - points to the location defined by its absolute location on the web

 Eg - If "index.html" is uploaded to a directory called "projects" that sits inside the root of a web server, and the web site's domain is http://www.example.com, the page will
 be available at www.example.com/projects/index.html

 2. Relative URLs
 - points to a location "relative" to the file you are linking from

 Eg - If we wanted to link from the file in www.example.com/projects/index.html to a PDF file in the same directory, the URL will be just the filename

<!-- What are the different file paths -->

1. <img src="picture.jpg">
    - picture.jpg is located in the same folder as the current page

2. <img src="images/picture.jpg">
    - picture.jpg is located in the images folder in the current folder

3. <img src="/images/picture.jpg">
    - picture.jpg is located in the images folder at the root of the current web

4. <img src="../picture.jpg">
    - picture.jpg is located in the folder one level up from the current folder

<!-- What is viewport in HTML5 -->

- the viewport is the user's visible area of a web page

Eg-
<meta name="viewport" content="width=device-width, initial-scale=1.0">

- it varies from device to device and will be smaller on a phone than on a computer

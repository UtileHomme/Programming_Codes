<!-- This is how elements are arranged in a default HTML doc -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
  </head>
  <body>
    <img src="images/firefox-icon.png" alt="My test image">
  </body>
</html>

<!-- This is how we add a hyperlink -->

<a href="http://www.google.com" title="Google" target="_blank"><p>A link to my favourite website.</p></a>

- "target" attribute is for opening the link in a new tab

<!-- This is how we add an image  -->

<img src="images/firefox-icon.png" alt="My test image">

- "alt" is used for specifying the alternate test in case the image is not displayed properly

<!-- This is how we give size to an input field -->

<p>Email: <br><input type="email" name="" value="" size="30"></p>

<!-- This is how we make an unordered list -->

<ul>
  <li>milk</li>
  <li>eggs</li>
  <li>bread</li>
  <li>hummus</li>
</ul>

-- No numbering required

<!-- This is how we make an ordered list -->

<ol>
  <li>Drive to the end of the road</li>
  <li>Turn right</li>
  <li>Go straight across the first two roundabouts</li>
  <li>Turn left at the third roundabout</li>
  <li>The school is on your right, 300 meters up the road</li>
</ol>

<!-- This is how we add a selection menu with values -->

<select id="list" class="" name="">
  <option value="one">One</option>
  <option value="two">Two</option>
  <option value="three">Three</option>
</select>

<!-- This is how we create a basic form in html -->

<hr />
<form action="52. Word_censoring_Part_1.php" method="POST">
  <textarea name="user_input" rows="6" cols="30"></textarea><? php echo $user_input ?><br /><br />
  <input type="submit" value="submit" />
</form>

<!-- This is how we make a word "italic","underline" and "bold"-->

<p>
    Hello <em>Jatin</em>. How are <strong>YOU</strong>
    <u>This needs to be underlined</u>
</p>

<!-- When to use which -->

<i></i>
    - For Foreign words, taxonomic designations, technical terms, a thought

<b></b>
    - Key words, product names, lead sentence

<u></u>
    - Proper names, misspelling

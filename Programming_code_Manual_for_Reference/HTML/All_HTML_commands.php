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

<!-- How to move up a directory -->

<!-- move back from the current directory and from there move to "pdfs/project.pdf" -->
<p>A link to my <a href="../pdfs/project-brief.pdf">project brief</a>.</p>

<!-- This is how we add a hyperlink -->

<a href="http://www.google.com" title="Google" target="_blank"><p>A link to my favourite website.</p></a>

- "target" attribute is for opening the link in a new tab
- "title" will come as a tooltip
- An unvisited link is displayed underlined and blue.
- A visited link displayed underlined and purple.
- An active link is underlined and red.

<!-- How to link to a particular part of the webpage rather than the top -->

<h2 id="Mailing_address">Mailing address</h2>

Hello <a href="contacts.html#Mailing_address">Mailing address</a>

<!-- How to add link for downloading -->

<a href="https://download.mozilla.org/?product=firefox-39.0-SSL&os=win&lang=en-US"
   download="firefox-39-installer.exe">
  Download Firefox 39 for Windows
</a>

<!-- How to send a mail through a link -->

<a href="mailto:nowhere@mozilla.org">Send email to nowhere</a>

<!-- Along with parameters -->
<a href="mailto:nowhere@mozilla.org?cc=name2@rapidtables.com&bcc=name3@rapidtables.com&amp;subject=The%20subject%20of%20the%20email &amp;body=The%20body%20of%20the%20email">
  Send mail with cc, bcc, subject and body
</a>

<!-- This is how we add an image  -->

<img src="images/firefox-icon.png" alt="My test image">

- "alt" is used for specifying the alternate test in case the image is not displayed properly
- "width" and "height" can be specified as extra attributes

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

"Different types in unordered list"

- ul type="circle"
- ul type="square"
- ul type="none"

<!-- This is how we make an ordered list -->

<ol>
    <li>Drive to the end of the road</li>
    <li>Turn right</li>
    <li>Go straight across the first two roundabouts</li>
    <li>Turn left at the third roundabout</li>
    <li>The school is on your right, 300 meters up the road</li>
</ol>

<!-- Different "types" in "ordered" list -->

- ol type="I"
- ol type="i"
- ol type="A"
- ol type="a"

** we can also use the "start=5" attribute which will start from the position depending on the "type" selected

<!-- This is how we make a definition list -->

<dl>
    <dt>Aries</dt>
    <dd>-One of the 12 horoscope sign.</dd>
    <dt>Bingo</dt>
    <dd>-One of my evening snacks</dd>
    <dt>Leo</dt>
    <dd>-It is also an one of the 12 horoscope sign.</dd>
    <dt>Oracle</dt>
    <dd>-It is a multinational technology corporation.</dd>
</dl>

-- the "dl" tags defines a term
-- the "dt" tag defines a term
-- the "dd" tag defines the term "definition"

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

-- is a section of the document which controls such as text fields, password fields, checkboxes, radio buttons, submit button etc.

- facilitates the user to enter data that is to be sent to the server for processing

<!-- Different form tags -->

<label for=""></label>
- defines a name that is displayed to the user

<fieldset></fieldset>
- groups the related elements in a form

<optgroup label=""></optgroup>
- groups related options in a drop-down list

<!-- This is how a textfield is defined -->

<form>
    First Name: <input type="text" name="firstname"/> <br/>
    Last Name:  <input type="text" name="lastname"/> <br/>
</form>

<!-- This is how a label is defined in a form -->

<form>
    <label for="firstname">First Name: </label>
    <input type="text" id="firstname" name="firstname"/> <br/>
    <label for="lastname">Last Name: </label>
    <input type="text" id="lastname" name="lastname"/> <br/>
</form>

<!-- This is how a password field is defined in a form -->

<form>
    <label for="password">Password: </label>
    <input type="password" id="password" name="password"/> <br/>
</form>

<!-- This is how an email field is defined in a form -->

<form>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email"/> <br/>
</form>

<!-- This is how a radio button is defined for a form -->

<form>
    <label for="gender">Gender: </label>
              <input type="radio" id="gender" name="gender" value="male"/>Male
              <input type="radio" id="gender" name="gender" value="female"/>Female <br/>
</form>

<!-- This is how a checkbox control is defined for a form -->

<form>
Hobby:<br>
              <input type="checkbox" id="cricket" name="cricket" value="cricket"/>
                 <label for="cricket">Cricket</label>
              <input type="checkbox" id="football" name="football" value="football"/>
                 <label for="football">Football</label>
              <input type="checkbox" id="hockey" name="hockey" value="hockey"/>
                 <label for="hockey">Hockey</label>
</form>

<!-- Complete form with all the above -->

<form action="#">
<table>
<tr>
    <td class="tdLabel"><label for="register_name" class="label">Enter name:</label></td>
    <td><input type="text" name="name" value="" id="register_name" style="width:160px"/></td>
</tr>
<tr>
    <td class="tdLabel"><label for="register_password" class="label">Enter password:</label></td>
    <td><input type="password" name="password" id="register_password" style="width:160px"/></td>
</tr>
<tr>
    <td class="tdLabel"><label for="register_email" class="label">Enter Email:</label></td>
    <td
><input type="email" name="email" value="" id="register_email" style="width:160px"/></td>
</tr>
<tr>
    <td class="tdLabel"><label for="register_gender" class="label">Enter Gender:</label></td>
    <td>
<input type="radio" name="gender" id="register_gendermale" value="male"/>
<label for="register_gendermale">male</label>
<input type="radio" name="gender" id="register_genderfemale" value="female"/>
<label for="register_genderfemale">female</label>
    </td>
</tr>
<tr>
    <td class="tdLabel"><label for="register_country" class="label">Select Country:</label></td>
    <td><select name="country" id="register_country" style="width:160px">
    <option value="india">india</option>
    <option value="pakistan">pakistan</option>
    <option value="africa">africa</option>
    <option value="china">china</option>
    <option value="other">other</option>
</select>
</td>
</tr>
<tr>
    <td colspan="2"><div align="right"><input type="submit" id="register_0" value="register"/>
</div></td>
</tr>
</table>
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

<!-- Another way of making text "bold" , "italic"-->

<p> <b>Write Your First Paragraph in bold text.</b></p>
<p> <i>Write Your First Paragraph in italic text.</i></p>

<!-- How to highlight a text -->

<h2>  I want to put a <mark> Mark</mark> on your face</h2>

<!-- How to strikethrough a text -->
<p> <strike>Write Your First Paragraph with strikethrough</strike>.</p>

<!-- How to make a text "superscript" -->
<p>Hello <sup>Write Your First Paragraph in superscript.</sup></p>

<!-- How to make a text "subscript" -->
<p>Hello <sub>Write Your First Paragraph in subscript.</sub></p>

<!-- How to make a text appear "large" -->
<p>Hello <big>Write the paragraph in larger font.</big></p>

<!-- What are the different types of headings availabe -->
<h1>Heading no. 1</h1>
<h2>Heading no. 2</h2>
<h3>Heading no. 3</h3>
<h4>Heading no. 4</h4>
<h5>Heading no. 5</h5>
<h6>Heading no. 6</h6>

** Heading elements (h1....h6) should be used for headings only. They should not be used just to make text bold or big.

<!-- How to define a "basic" table -->

<table>
    <tr><th>First_Name</th><th>Last_Name</th><th>Marks</th></tr>
    <tr><td>Sonoo</td><td>Jaiswal</td><td>60</td></tr>
    <tr><td>James</td><td>William</td><td>80</td></tr>
    <tr><td>Swati</td><td>Sironi</td><td>82</td></tr>
    <tr><td>Chetna</td><td>Singh</td><td>72</td></tr>
</table>

<!-- Different attributes in a table -->

1. <tr></tr>
- defines a row in the table

2. <th></th>
- defines a header cell in the table

3. <td></td>
- defines a cell in the table

4. <caption></caption>
- defines the table caption

5. <colgroup></colgroup>
- specifies a group of one or more columns in the table for formatting

6. <col>
- is used with the "colgroup" element to specifiy column properties for each column

7. <tbody> </tbody>
- is used to group the body content in a table

8. <thead> </thead>
- is used to group the header content in a table

9. <tfooter></tfooter>
- used to group the footer content in a table

<!-- This is how we apply border to a table -->

<table border="1">
    <tr><th>First_Name</th><th>Last_Name</th><th>Marks</th></tr>
    <tr><td>Sonoo</td><td>Jaiswal</td><td>60</td></tr>
    <tr><td>James</td><td>William</td><td>80</td></tr>
    <tr><td>Swati</td><td>Sironi</td><td>82</td></tr>
    <tr><td>Chetna</td><td>Singh</td><td>72</td></tr>
</table>

<!-- CSS styling -->

<style>
table, th, td {
    border: 1px solid black;
}
</style>

<!-- For collapsing the border into a single line -->
<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
</style>

<!-- How to incorporate cell padding in a table using CSS -->

<style>
table, th, td {
    border: 1px solid pink;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
</style>

<!-- How to use "colspan" -->

<table style="width:100%">
    <tr>
        <th>Name</th>
        <th colspan="2">Mobile No.</th>
    </tr>
    <tr>
        <td>Ajeet Maurya</td>
        <td>7503520801</td>
        <td>9555879135</td>
    </tr>
</table>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>

-- "colspan" is used when we wish to combine two columns together under a single heading
-- more scenarios are possible

<!-- Implementing Row span -->

<table>
    <tr><th>Name</th><td>Ajeet Maurya</td></tr>
    <tr><th rowspan="2">Mobile No.</th><td>7503520801</td></tr>
    <tr><td>9555879135</td></tr>
</table>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
</style>

<!-- How to accommodate "caption" in a table -->

<table>
    <caption>Student Records</caption>
    <tr><th>First_Name</th><th>Last_Name</th><th>Marks</th></tr>
    <tr><td>Vimal</td><td>Jaiswal</td><td>70</td></tr>
    <tr><td>Mike</td><td>Warn</td><td>60</td></tr>
    <tr><td>Shane</td><td>Warn</td><td>42</td></tr>
    <tr><td>Jai</td><td>Malhotra</td><td>62</td></tr>
</table>

<!-- How to style "even" and "odd" cells in a table -->

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
table#alter tr:nth-child(even) {
    background-color: #eee;
}
table#alter tr:nth-child(odd) {
    background-color: #fff;
}
table#alter th {
    color: white;
    background-color: gray;
}
</style>

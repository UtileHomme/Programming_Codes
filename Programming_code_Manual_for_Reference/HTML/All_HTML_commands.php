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

<!-- This is how we make a definition/description list -->

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

<!-- How to add quotes to a webpage -->

<blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">
    <p>The <strong>HTML  <code>&lt;blockquote&gt;</code> Element </strong> indicates that the enclosed text is an extended quotation</p>

</blockquote>

<!-- How to add abbreviations in a webpage -->

<p><abbr title="Hyper Text Markup Language">HTML</abbr></p>

<!-- How to represent computer code -->

-- for marking up generic pieces of code
<code>
    var para = document.querySelector('p');

    para.onclick = function() {
        alert('Owww, stop poking me!');
    }
</code>

-- for including whitespaces and indentation

<pre>
    <code>var para = document.querySelector('p');

        para.onclick = function() {
            alert('Owww, stop poking me!');
        }</code>
    </pre>

    --for marking up variable names

    <var>
        $a
    </var>

    --for marking up keyboard keys

    <kbd>
        Ctrl + A
    </kbd>

    --for marking up sample output

    <samp>
        PING mozilla.org (63.245.215.20): 56 data bytes
        64 bytes from 63.245.215.20: icmp_seq=0 ttl=40 time=158.233 ms
    </samp>

    <!-- How to make an image float to the "right" or "left" of some text -->

    <p><img src="smiley.gif" alt="Smiley face" style="float:right;width:42px;height:42px;">
        The image will float to the right of the text.</p>

        <p><img src="smiley.gif" alt="Smiley face" style="float:left;width:42px;height:42px;">
            The image will float to the left of the text.</p>

            <!-- How to set the width of an image depending on "browser change" -->

            <img src="img_girl.jpg" style="width:100%;">

            <!-- How to set a maximum width for an image -->

            <img src="img_girl.jpg" style="max-width:100%;height:auto;">

            <!-- How to display different images at different browser widths -->

            <picture>
                <source srcset="img_smallflower.jpg" media="(max-width: 600px)">
                    <source srcset="img_flowers.jpg" media="(max-width: 1500px)">
                        <source srcset="flowers.jpg">
                            <img src="img_flowers.jpg" alt="Flowers" style="width:auto;">
                        </picture>

                        <!-- How to set the width of the text on the basis of browser resize -->

                        <h1 style="font-size:10vw;">Hello World</h1>

                        - "10vw" means set the size to 10% of the viewport width

                        <!-- How to use "media queries" to resize depending on max-width of browser window -->

                        <style>
                        .left, .right {
                            float:left;
                            width:20%; /*The width is 20%, by default*/
                        }

                        .main {
                            float:left;
                            width:60%; /*The width is 60%, by default*/
                        }

                        /*Use a media query to add a breakpoint at 800px:*/
                        @media (max-width:800px) {
                            .left, .main, .right {
                                width:100%; /*The width is 100%, when the viewport is 800px or smaller*/
                            }
                        }
                        </style>

                        ** Before "800px" everything will be 100%
                        ** After "800px" each will have their own width

                        <!-- How to make a responsive layout for mobile and webpage -->

                        <!DOCTYPE html>
                        <html>
                        <head>
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <style>
                            * {
                                box-sizing: border-box;
                            }
                            .menu {
                                float:left;
                                width:20%;
                                text-align:center;
                            }
                            .menuitem {
                                background-color:#e5e5e5;
                                padding:8px;
                                margin-top:7px;
                            }
                            .main {
                                float:left;
                                width:60%;
                                padding:0 20px;
                            }
                            .right {
                                background-color:#e5e5e5;
                                float:left;
                                width:20%;
                                padding:15px;
                                margin-top:7px;
                                text-align:center;
                            }

                            @media only screen and (max-width:620px) {
                                /* For mobile phones: */
                                .menu, .main, .right {
                                    width:100%;
                                }
                            }
                            </style>
                        </head>
                        <body style="font-family:Verdana;color:#aaaaaa;">

                            <div style="background-color:#e5e5e5;padding:15px;text-align:center;">
                                <h1>Hello World</h1>
                            </div>

                            <div style="overflow:auto">
                                <div class="menu">
                                    <div class="menuitem">Link 1</div>
                                    <div class="menuitem">Link 2</div>
                                    <div class="menuitem">Link 3</div>
                                    <div class="menuitem">Link 4</div>
                                </div>

                                <div class="main">
                                    <h2>Lorum Ipsum</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>

                                <div class="right">
                                    <h2>About</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                            </div>

                            <div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright w3schools.com</div>

                        </body>
                        </html>

                        <!-- How to display a "less than sign" -->

                        use "&lt" or "&#60"

                        <!-- How to use a "non-break space" -->

                        - it is a space that will not break into a new line

                        - use "&nbsp;"

                        - use "&#8209;" for (-)

                        Result 	Description       Entity Name       Entity Number
                        non-breaking space       &nbsp;       &#160;
                        <       less than              &lt;       &#60;
                        >       greater than         &gt;       &#62;
                        &       ampersand          &amp;       &#38;
                        "       double quotation mark       &quot;       &#34;
                        '       single quotation mark (apostrophe)       &apos;       &#39;
                        ¢       cent       &cent;       &#162;
                        £       pound       &pound;       &#163;
                        ¥       yen       &yen;       &#165;
                        €       euro       &euro;       &#8364;
                        ©       copyright       &copy;       &#169;
                        ®       registered trademark       &reg;       &#174;

                        <!-- How to make an input field -->

                        <form>
                            First name:<br>
                            <input type="text" name="firstname"><br>
                            Last name:<br>
                            <input type="text" name="lastname">
                        </form>

                        <!-- How to make a radio button input field -->

                        <form>
                            <input type="radio" name="gender" value="male" checked> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="other"> Other
                        </form>

                        <!-- How to make a submit button with a form -->

                        <form action="/action_page.php">
                            First name:<br>
                            <input type="text" name="firstname" value="Mickey"><br>
                            Last name:<br>
                            <input type="text" name="lastname" value="Mouse"><br><br>
                            <input type="submit" value="Submit">
                        </form>

                        <!-- What is the action attribute in form -->

                        - it defines the action to be performed when the form is submitted

                        <!-- What is the method attribute in form -->

                        - it defines the kind of HTTP method being used to submit the form

                        <form action="/action_page.php" method="get">

                            <!-- What is the use of fieldset -->

                            - it is used to group related data in a form

                            <!-- What is the use of legend -->

                            - it is used to give a caption for the "fieldset" element

                            <form action="/action_page.php">
                                <fieldset>
                                    <legend>Personal information:</legend>
                                    First name:<br>
                                    <input type="text" name="firstname" value="Mickey"><br>
                                    Last name:<br>
                                    <input type="text" name="lastname" value="Mouse"><br><br>
                                    <input type="submit" value="Submit">
                                </fieldset>
                            </form>

                            <!-- How to define a dropdown list -->

                            <select name="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>

                            <!-- To add a pre-selected option, do this -->
                            <option value="fiat" selected>Fiat</option>

                            <!-- How to add a "textarea" for multi-line input -->

                            <textarea name="message" rows="10" cols="30">
                                The cat was playing in the garden.
                            </textarea>

                            <!-- How to define a clickable button -->

                            <button type="button" onclick="alert('Hello World!')">Click Me!</button>

                            <!-- What is the "datalist" element -->

                            - Say we want to type inside an input field and see a dropdown menu and want to select from the list shown, use datalist

                            <form action="/action_page.php">
                                <input list="browsers">
                                <datalist id="browsers">
                                    <option value="Internet Explorer">
                                        <option value="Firefox">
                                            <option value="Chrome">
                                                <option value="Opera">
                                                    <option value="Safari">
                                                    </datalist>
                                                </form>

                                                <!-- What are different type of "input attributes" -->

                                                1. readonly
                                                - the input field cannot be changed

                                                <form action="">
                                                    First name:<br>
                                                    <input type="text" name="firstname" value="John" readonly>
                                                </form>

                                                2. disabled
                                                - the input field is unusable and unclickable

                                                <form action="">
                                                    First name:<br>
                                                    <input type="text" name="firstname" value="John" disabled>
                                                </form>

                                                3. size
                                                - specifies the size inside the input field

                                                <form action="">
                                                    First name:<br>
                                                    <input type="text" name="firstname" value="John" size="40">
                                                </form>

                                                4.  maxlength
                                                - specifies the maxlength that can be entered in the input field

                                                <form action="">
                                                    First name:<br>
                                                    <input type="text" name="firstname" maxlength="10">
                                                </form>

                                                5. autocomplete
                                                - will autocomplete the input field based on previous values

                                                <form action="/action_page.php" autocomplete="on">
                                                    First name:<input type="text" name="fname"><br>
                                                    Last name: <input type="text" name="lname"><br>
                                                    E-mail: <input type="email" name="email" autocomplete="off"><br>
                                                    <input type="submit">
                                                </form>


                                                6. novalidate
                                                - mentions that the particular field should not be validated on submit

                                                <form action="/action_page.php" novalidate>
                                                    E-mail: <input type="email" name="user_email">
                                                    <input type="submit">
                                                </form>

                                                7. autofocus
                                                - will focus this field on page load

                                                First name:<input type="text" name="fname" autofocus>

                                                8. multiple
                                                - will help add more than one file or email in the input field

                                                Select images: <input type="file" name="img" multiple>

                                                9. placeholder
                                                - gives a hint to the user so that they know what to enter

                                                <input type="text" name="fname" placeholder="First name">

                                                10. required
                                                - mentions that the field is needed before submitting

                                                Username: <input type="text" name="usrname" required>

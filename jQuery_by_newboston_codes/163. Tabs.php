
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>jQuery Example</title>
  <link rel="stylesheet" href="/css/style.css" type="text/css">
  <link rel="stylesheet" href="/css/blitzer/jquery-ui3.css" type="text/css">
</head>
<body>

    <div class="" id="tabs">
        <ul>
            <li><a href="#about-me">About me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- loads the php file -->
            <li><a href="php/loop.php">Loop</a></li>
        </ul>

        <!-- This will be triggered when the links above are clicked -->
        <div class="" id="about-me">
            <p>A short paragraph about me</p>
        </div>
        <div class="" id="portfolio">
            <p>This is my portfolio</p>
        </div>
        <div class="" id="contact">
            <p>My contact details</p>
        </div>

    </div>
    <div class="" id="slider_value">

    </div>

  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery-ui.js"> </script>
  <script type="text/javascript" src="js/ui23.js"> </script>
</body>
</html>

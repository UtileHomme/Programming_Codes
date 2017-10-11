<?php
//AJAX - Asynchronous Javascript and XHTML
//sends a value without having to reload a page
?>

<!-- will help to include the other page and click on submit and get the result without reloading the page -->

<html>
<head>
  <script type="text/javascript">
  function load(thediv, thefile)
  {
    if(window.XMLHttpRequest)
    {
      xmlhttp = new XMLHttpRequest();
    }
    else
    {
      xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function()
    {
      if(xmlhttp.readyState ==4 && xmlhttp.status==200)
      {
        document.getElementById(thediv).innerHTML = xmlhttp.responseText;
      }
    }

    xmlhttp.open('GET', thefile, true);
    xmlhttp.send();
  }
  </script>
</head>
<body>
  <input type="submit"  onclick="load('anotherdiv','video174(include.inc).php');"/>
  <div id="anotherdiv"></div>
</body>
</html>

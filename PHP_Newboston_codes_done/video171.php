<?php
//AJAX - Asynchronous Javascript and XHTML
//sends a value without having to reload a page

//valid for video 171-173

?>

<!-- will help to include the other page and click on submit and get the result without reloading the page -->

<html>
<head>
  <script type="text/javascript">
  function load()
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
        document.getElementById('adiv').innerHTML = xmlhttp.responseText;
      }
    }

    xmlhttp.open('GET', 'video171(include.inc).php', true);
    xmlhttp.send();
  }
  </script>
</head>
<body>
  <input type="submit"  onclick="load();"/>
  <div id="adiv"></div>
</body>
</html>

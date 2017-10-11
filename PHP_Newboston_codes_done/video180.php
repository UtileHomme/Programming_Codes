<?php
    //valid for video 180-184
 ?>

<html>
<head>

  <script type="text/javascript">
  function insert()
  {
    //var text_value = document.getElementById('text').value;     //helps display the text entered by the user as an alert
    //alert(text_value);

    if(window.XMLHttpRequest)
    {
    xmlhttp = new XMLHttpRequest();
    }
    else
    {
      xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }``

    xmlhttp.onreadystatechange = function()
    {
      if(xmlhttp.readyState && xmlhttp.status == 200)
      {
          document.getElementById('message').innerHTML = xmlhttp.responseText;
      }
    }
    parameters = 'text='+document.getElementById('text').value;

    xmlhttp.open('POST','video180(update.inc).php', true);
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');   //for sending form data as a POST

    xmlhttp.send(parameters);
    }
  </script>

</head>
<body>

  Insert: <input type="text" id="text" />
  <input type="button" value="Submit" onclick="insert();" />

  <div id="message"></div>

</body>
</html>

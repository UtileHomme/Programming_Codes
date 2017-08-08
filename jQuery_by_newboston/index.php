<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>jQuery Example</title>

  <script type="text/javascript">
  $('#toggle_message').click(function()
  {
    // set the value variable equal to the present attribute value
    var value = $('#toggle_message').attr('value');
    $('#message').toggle('fast');

    //if the retrieved value is 'Hide', set it to 'Show'
    if(value=='Hide')
    {
      $('#toggle_message').attr('value','Show');
    }
    else if(value=='Show')
    {
      $('#toggle_message').attr('value','Hide');
    }
  }
  );

  </script>
</head>
<body>
  <input type="button" name="" value="Hide" id="toggle_message">
  <p id="message">You can see this paragraph</p>

  <script src="js/jquery.js" type="text/javascript"></script>
</body>
</html>

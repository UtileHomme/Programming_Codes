<?php
/*
a cookie is a piece of data/file that is stores some info which is unique to the website / user is viewing.
depending on the expiration time of the cookie , the info will be relayed from user's computer to website
can be stored on the user's computer for later purposes
session is closed as soon as browser is closed
we can use cookies for years
not good for sensitive data
*/

//valid for video 75-76
$time = time();

//variable, value, time of expiration(in seconds)
setcookie('username' , 'alex', $time+15);

//this will unset the cookie
setcookie('username' , 'alex', $time-1000);

/*
we need to unset to log the user out -> done while clicking LOG OUT button
*/

 ?>

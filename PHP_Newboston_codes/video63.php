
<!--won't work because output is being sent here-->
<h1>Page</h1>

<?php
//header is used to redirect the user to another page
//it cannot be used after output has been sent to another page

//header();   -- wont Worker
$redirect_page = 'http://google.com';
$redirect = true;

if($redirect==true)
{
header('Location: '.$redirect_page);
}
 ?>

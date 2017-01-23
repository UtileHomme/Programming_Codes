<?php
ob_start();                           //the page output will be stored in an output buffer
 ?>
<h1>Page</h1>
This is my Page.
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

ob_end_flush();     //This flushes the content and gives the output stored in the output buffer

//ob_end_clean   //cleans the output buffer but doesn't give any output -- used during redirection
 ?>

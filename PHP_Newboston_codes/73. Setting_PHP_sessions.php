<?php

//sessions store info about the user that is currently visiting the website
//sessions are stored on the server
//useful for user login - to keep them logged in

session_start();    //this is to be declared before doing anything using sessions

$_SESSION['username'] = 'Alex';     //this will be available in all pages of the website

 ?>

<?php

session_start();

unset($_SESSION['username']);
// only username will be unset but age will still exist

//session_destroy();  --- this destroys all session data
 ?>

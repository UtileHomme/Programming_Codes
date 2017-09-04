<?php

    //all this will be available in the "data" field in ajax1.js
    if(isset($_GET['input']))
    {
        $string = $_GET['input'];
        echo strrev($string);
    }
 ?>

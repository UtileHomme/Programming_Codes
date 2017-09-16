<?php

    if(isset($_POST['email']))
    {
        $email = htmlentities($_POST['email']);

        //validating an email address
        if(!empty($email))
        {
            //will either return "TRUE" or "FALSE"
            if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
            {
                echo "That doesn't appear to be a valid email";
            }
            else {
                echo 'Valid email address';
            }
        }

    }
 ?>

<?php
include_once '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php';

//to ensure that the user is logged in first
protect_page();
admin_protect($conn);

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

?>

<?php

if(isset($_GET['success'])===true && empty($_GET['success'])===true)
{
?>

<p>Email has been sent</p>

<?php
}
else
{
    if(empty($_POST)===false )
    {
        if(empty($_POST['subject'])===true)
        {
            $errors[]= 'Subject is required';
        }
        if(empty($_POST['body'])===true)
        {
            $errors[]= 'Body is required';
        }
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        if(empty($errors)===false)
        {
            echo output_errors($errors);
        }
        else
        {
            mail_users($subject, $body,$conn);
            header('Location: mail.php?success');
        }
    }


    ?>

    <h1>Email all users</h1>

    <form action="" method="POST">
        <ul>
            <li>
                Subject*:<br />
                <input type="text" name="subject" />
            </li>
            <li>
                Body*:<br />
                <textarea name="body"></textarea>

            </li>
            <li>
                <input type="submit" name="Send" />
            </li>
        </ul>
    </form>

    <?php
}
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>

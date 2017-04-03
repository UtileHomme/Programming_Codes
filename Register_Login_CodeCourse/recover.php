<?php
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php');

//ensure that the user is not logged in
logged_in_redirect();

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

?>

<h1>Recover</h1>

<?php
if(isset($_GET['success'])===true && empty($_GET['success'])===true)
{
?>

    <p>
        Thank's we've emailed you
    </p>
<?php
}
else
{
    $mode_allowed = array('username','password');
    if(isset($_GET['mode'])===true && in_array($_GET['mode'],$mode_allowed)===true)
    {
        if(isset($_POST['email']) && empty($_POST['email']===false))
        {
            if(email_exists($_POST['email'],$conn)===true)
            {
               recover($_GET['mode'],$_POST['email'],$conn);
                header('Location: recover.php?success');
            }
            else
            {
                echo '<p>
                Oops, we coudn\'t find that email address
                </p>';
            }
        }
        ?>

        <form action="" method="POST">
            <ul>
                <li>Please enter your email address<br />
                    <input type="text" name="email" />
                </li>
                <li>
                    <input type="submit" value="Recover" />
                </li>
            </ul>
        </form>

        <?php
    }
    else
    {
        header('Location: index.php');
    }
}
?>


<?php   include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>

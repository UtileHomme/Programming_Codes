<?php
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

if(isset($_GET['username'])===true && empty($_GET['username']===false))
{
    $username = $_GET['username'];

    if(user_exists($username,$conn)===true)
    {
    $user_id = user_id_from_username($username,$conn);
    $profile_data = user_data($user_id,$conn,'firstname','lastname','email');
?>
<h1><?php echo $profile_data['firstname'];?>'s Profile'</h1>
<p><?php echo $profile_data['email']; ?></p>
<?php
    }
    else
    {
        echo 'Sorry, that user doesn\'t exist';
    }
}
else
{
    header('Location: index.php');
}

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php';
?>

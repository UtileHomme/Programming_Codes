<?php
include_once '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php';

//to ensure that the user is logged in first
protect_page();
admin_protect($conn);

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

?>
<h1>Admin</h1>
<p>Admin page
</p>


<?php   include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>

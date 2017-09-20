<?php
require 'video136(connect.inc).php';
include_once('video136(core.inc).php');

if(isset($_POST['username']) && isset($_POST['password']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = sha1($password);
  $password_hash = trim($password_hash);

  if(!empty($username) && !empty($password))

  {
    $query = "SELECT `id` FROM `users` WHERE `username`=:username AND `password`=:password ";

    $result = $conn->prepare($query); //helps avoid sql injection
    $result->bindParam(':username', $username, PDO::PARAM_STR); //putting parameters in place of actual data
    $result->bindParam(':password', $password_hash, PDO::PARAM_STR);
    $result->execute();
    $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
    //which are returned after executing the sql statement

    if($num_of_rows==0)
    // password and username combination don't match
    {
      echo 'Invalid username/password';
    }
    else if($num_of_rows==1)
    {
      $user_id =  $result->fetchColumn();   //this will return the column value(id) of the logged in user
      $_SESSION['user_id']=$user_id;    //store this into a session
      header('Location: video136.php');   //redirect the page to original page
    }
  }
  else
  {
    echo 'Please enter something';
  }
}


?>

<form action = "<?php echo $current_file; ?>" method ="POST">
  Username: <input type="text" name="username" />
  Password:<input type="password" name="password" />
  <br /><br />
  Submit: <input type="submit" value="Log  in" />
</form>

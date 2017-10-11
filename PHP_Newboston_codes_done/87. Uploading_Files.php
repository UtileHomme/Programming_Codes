<?php
//valid for video 87-88, then 90-91, then 89

//shows the file name of the file the user has uploaded
$name = $_FILES['file']['name'];
//size is measured in bytes
$size = $_FILES['file']['size'];    //not required for uploading file
$type = $_FILES['file']['type'];    //not required for uploading file

//Will help in extracting the extension of the file name
$extension = strtolower(substr($name, strpos($name, '.')+1));
$max_size = 2097152;
//This file is stored in a temporary folder which an alias
echo $temp_name = $_FILES['file']['tmp_name'];


if(isset($name))
{
  if(!empty($name))
  {
    if(($extension=='jpg' || $extension=='jpeg') && ($type=='image/jpeg')  && $size<=$max_size)
    {
    //now we need to move the temporary file from temp location to its actual location
    $location = '/home/scrabbler/Jatin/Programming Codes/PHP_Newboston_codes/uploads/';
    if(move_uploaded_file($temp_name, $location.$name))
    {
      echo 'Uploaded';
    }
    else
    {
      echo 'There was an error';
    }
  }
  else {
    echo 'File must be jpeg / jpg and must be 2mb or less';
  }
  }
  else {
    echo 'Please choose a file';
  }
}
?>
<!-- enctype helps enable file upload-->
<form action="87. Uploading_Files.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file" /><br /><br />
  <input type="submit" value="Submit" />
</form>

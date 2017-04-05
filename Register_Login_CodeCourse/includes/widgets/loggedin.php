<div class="widget">
    <h2>Hello , <?php echo $user_data['firstname']; ?></h2>
    <div class="inner">
        <div class="profile">
            <?php
            if(isset($_FILES['profile'])===true)
            {
                if(empty($_FILES['profile']['name'])===true)
                {
                echo 'Please choose a file';
                }
                else
                {
                    $allowed = array('jpg','jpeg','gif','png');
                    $filename = $_FILES['profile']['name'];
                    $fileext = strtolower(end(explode('.',$filename)));

                    $filetemp = $_FILES['profile']['tmp_name'];
                    $filesize = $_FILES['profile']['size'];

                    if(in_array($fileext, $allowed)===true)
                    {
                        change_profile_image($session_user_id, $filetemp, $fileext, $conn);
                    }
                    else
                    {
                        echo 'Incorrect file type. Allowed: ';
                        echo implode(', ', $allowed);
                    }

                }
            }
            if(empty($user_data['profile'])===false)
            {
                echo '<img src="',$user_data['profile'],' "alt="',$user_data['firstname'],'\'s Profile Image">';
            }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <br />
                <input type="file" name="profile" />
                <input type="submit" />
            </form>
        </div>
        <ul>
            <li>
                <a href="logout.php">Log Out</a>
            </li>
            <li>
                <a href="/profile.php?username=<?php echo $user_data['username']; ?>">Profile</a>
            </li>
            <li>
                <a href="changepassword.php">Change Password</a>
            </li>
            <li>
                <a href="settings.php">Settings</a>
            </li>
        </ul>
    </div>
</div>

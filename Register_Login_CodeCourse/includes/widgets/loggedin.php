<div class="widget">
  <h2>Hello , <?php echo $user_data['firstname']; ?></h2>
  <div class="inner">
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

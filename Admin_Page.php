<?php
include "NavBar.php";
include "script/Site_Functions.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
    <link href="styling/Site_Styling.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <h2>Admin - Create User</h2>
    </div>
    <form method="post" action="">
      <?php echo displayErrors(); ?>
      <p>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
      </p>
      <p>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
      </p>
      <p>
        <label>Password</label>
        <input type="password" name="password_1">
      </p>
      <p>
        <label>Confirm Password</label>
        <input type="password" name="password_2">
      </p>
      <p>
        <label>User Type</label>
        <select name="user_type" id="user_type">
          <option value=""></option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </p>
      <p>
        <label>Password</label>
        <input type="password" name="password_1">
      </p>
      <p>
        <label>Confirm Password</label>
        <input type="password" name="password_2">
      </p>
      <p>
        <label>Submit Profile Photo</label>
        <input type="file" name="photo">
      </p>
      <p>
        <button type="submit" class="btn" name="register_btn">Create User</button>
      </p>
    </form>
  </body>
</html>

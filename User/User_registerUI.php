<?php include('User_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="User_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-image:url('HomePageImage/image7.jpg'); background-position: center; background-size: cover;">
<a href="User_loginUI.php"><i class="fa fa-hand-o-left" style="color: white; margin-top: 20px; margin-left: 1200px; font-size: x-large;"></i></a>
<div class="header">
      <h2>Registration</h2>
  </div>
    
  <form method="post" action="User_registerUI.php">
      <?php include('User_errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z ]+" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
      </div>
      <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
      <p>
          Already a member? <a href="User_loginUI.php">Sign in</a>
      </p>
  </form>
</body>
</html>

<?php 
 session_start();

if(isset($_SESSION['user_email'])){
        header('location: User_scholarcheck.php');
}
if(!empty($_POST['scholar_id'])){
    $_SESSION['scholar_id'] = $_POST['scholar_id'];
}
else{
    echo "";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="User_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('HomePageImage/image7.jpg'); height:90vh; background-position: center; background-size: cover;">
  <a href="index.php"><i class="fa fa-hand-o-left" style="color: white; margin-top: 20px; margin-left: 1200px; font-size: x-large;"></i></a>
  <div class="header">
      <h2>Login</h2>
  </div>
     
  <form method="post" action="User_logincheck.php">
      <div class="input-group">
          <label>Email Address</label>
          <input type="email" name="user_email" required>
      </div>
      <div class="input-group">
          <label>Password</label>
          <input type="password" name="password" required>
          
      </div>
      <div class="input-group">
          <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
          Not yet a member? <a href="User_registerUI.php">Sign up</a>
      </p>
  </form>
</body>
</html>

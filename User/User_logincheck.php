<?php
session_start();

$_SESSION['scholar_id']=  $_SESSION['scholar_id'];
//$_SESSION['user_email'] = $_POST['user_email'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$errors = array();
 
$connect = mysqli_connect($servername, $username, $password, $database);



if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($connect, $_POST['user_email']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  
  $password = md5($password);
  $query = "SELECT * FROM users WHERE user_email='$username' AND user_password='$password'";
  $results = mysqli_query($connect, $query);
  if (mysqli_num_rows($results) == 1) {
      $_SESSION['user_email'] = $username;
      header('location: User_scholarcheck.php');
  }
  else {
      echo "<script>alert('Wrong username/password combination');window.location.replace('User_loginUI.php');</script>";
  }
}
?>

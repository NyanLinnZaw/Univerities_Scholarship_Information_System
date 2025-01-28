<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
$errors = array();


$connect = mysqli_connect($servername, $username, $password, $database);

//$adminname = $_POST['adminname'];
//$password = $_POST['password'];

if (isset($_POST['admin_login'])) {
  $adminname = mysqli_real_escape_string($connect, $_POST['adminname']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  if (empty($adminname)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
      $sql = "SELECT * FROM `admin` WHERE admin_name='$adminname' AND admin_password='$password'";
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) == 1) {
          header('location: Admin_choiceUI.php');
      }else {
          array_push($errors, "Wrong username/password combination");
      }
  }
}


?>

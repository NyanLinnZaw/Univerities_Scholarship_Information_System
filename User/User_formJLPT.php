<?php
session_start();

$sec_score = $_SESSION['score'];
$_SESSION['language'] = $_POST['language'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];
$phno = $_POST['phno'];
$score = $_POST['score'];
$ifield = $_POST['ifield'];

if(isset($_POST['submit'])){
   $sql = "INSERT INTO `user_information`(`name`, `email`, `age`, `address`, `phone_number`, `score`, `interested_field`) 
            VALUES ('$fullname','$email','$age','$address','$phno','$score','$ifield')";
   $result = mysqli_query($connect, $sql);
   
   if($score <= $sec_score){
       header('location: User_responsetrue.php');
   } 
   else{
      header('location: User_responsefalse.php'); 
   } 
}
?>



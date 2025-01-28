<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);

$id = $_POST['id'];
$btn = $_POST['submit'];

if($btn == 'Delete Data'){
    $sql = "DELETE FROM `scholar_information` WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Deleted');window.location.replace('Admin_deletemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
    
}
?>


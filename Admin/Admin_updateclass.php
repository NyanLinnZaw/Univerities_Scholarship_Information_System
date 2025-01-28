<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);


$id = $_POST['id'];
$language = $_POST['language'];
$link = $_POST['link'];
$btn = $_POST['submit'];

//Update Language
if($btn == 'Update Language'){
    $sql = "UPDATE `class_information` SET `language`='$language' WHERE class_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIclass.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Class Link
if($btn == 'Update Class Link'){
    $sql = "UPDATE `class_information` SET `class_link`='$link' WHERE class_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIclass.php');</script>";
    }
    else{
        echo "Failed";
    }
}

?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $language = $_POST['language'];
    $link = $_POST['link'];
    
    function throw_ex($er){  
        throw new Exception($er);  
    }  
    try {  
        $sql = "INSERT INTO `class_information`(`class_id`, `language`, `class_link`) 
                VALUES ('$id','$language','$link')";
        $result = mysqli_query($connect, $sql) or throw_ex(mysql_error());
        echo "<script>alert('Successfully Inserted');window.location.replace('Admin_insertUIclass.php');</script>";
    }  
    catch(exception $e) {
        $error_msg = mysqli_error($connect);
        echo '<script type="text/javascript">alert("'.$error_msg.'");window.location.replace("Admin_insertUIclass.php");</script>'; 
    }
    
//    $sql = "INSERT INTO `class_information`(`class_id`, `language`, `class_link`) 
//            VALUES ('$id','$language','$link')";
////        $result = mysqli_query($connect, $sql);
//    if(!mysqli_query($connect, $sql)){
//        $error_msg = mysqli_error($connect);
//        echo '<script type="text/javascript">alert("'.$error_msg.'");window.location.replace("Admin_insertUIclass.php");</script>';
//        
//    }
//    else{
//        echo "<script>alert('Successfully Inserted');window.location.replace('Admin_insertUIclass.php');</script>";
//        
//    }
}
mysqli_close($connect);
?>

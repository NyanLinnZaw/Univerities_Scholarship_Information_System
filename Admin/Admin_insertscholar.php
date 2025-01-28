<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);

//$id = $_POST['id'];
//$btn = $_POST['submit'];

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $uniname = $_POST['uni'];
    $scholar = $_POST['scholar'];
    $region = $_POST['region'];
    $field = $_POST['field'];
    $degree = $_POST['degree'];
    $language = $_POST['language'];
    $score = $_POST['score'];
    $des = $_POST['des'];
    $deadline = $_POST['deadline'];
    $img = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"C:/xampp/htdocs/Project/".$img);
    
    function throw_ex($er){  
        throw new Exception($er);  
    }  
    try {  
        $sql = "INSERT INTO `scholar_information`(`scholar_id`,`uni_name`, `scholar_name`, `region`, `field`, `degree`, `language`, `score`, `description`, `deadline`, `uni_image`) 
                VALUES ('$id','$uniname','$scholar','$region','$field','$degree','$language','$score','$des','$deadline','$img')";
        $result = mysqli_query($connect, $sql) or throw_ex(mysql_error());
        echo "<script>alert('Successfully Inserted');window.location.replace('Admin_insertUIscholar.php');</script>";
    }  
    catch(exception $e) {
        $error_msg = mysqli_error($connect);
        echo '<script type="text/javascript">alert("'.$error_msg.'");window.location.replace("Admin_insertUIscholar.php");</script>'; 
    }
//    $sql = "INSERT INTO `scholar_information`(`scholar_id`,`uni_name`, `scholar_name`, `region`, `field`, `degree`, `language`, `score`, `description`, `deadline`, `uni_image`) 
//            VALUES ('$id','$uniname','$scholar','$region','$field','$degree','$language','$score','$des','$deadline','$img')";
////        $result = mysqli_query($connect, $sql);
//    if(mysqli_query($connect, $sql)){
//        echo "<script>alert('Successfully Inserted');window.location.replace('Admin_insertUIscholar.php');</script>";
//    }
//    else{
//        $error_msg = mysqli_error($connect);
//        echo '<script type="text/javascript">alert("'.$error_msg.'");window.location.replace("Admin_insertUIscholar.php");</script>';
//    }
}
    mysqli_close($connect);
?>

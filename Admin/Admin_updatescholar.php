<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);

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
//$img = $_POST["img"];
$img = $_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"C:/xampp/htdocs/Project/".$img);


$btn = $_POST['submit'];
//echo "img" . $img;
//Update University Name
if($btn == 'Update Uni Name'){
    $sql = "UPDATE `scholar_information` SET `uni_name`='$uniname' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Scholar Name
if($btn == 'Update Scholar Name'){
    $sql = "UPDATE `scholar_information` SET `scholar_name`='$scholar' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Region Name
if($btn == 'Update Region'){
    $sql = "UPDATE `scholar_information` SET `region`='$region' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Field Name
if($btn == 'Update Field'){
    $sql = "UPDATE `scholar_information` SET `field`='$field' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Degree Name
if($btn == 'Update Degree'){
    $sql = "UPDATE `scholar_information` SET `degree`='$degree' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Language Name
if($btn == 'Update Language'){
    $sql = "UPDATE `scholar_information` SET `language`='$language' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Score Name
if($btn == 'Update Score'){
    $sql = "UPDATE `scholar_information` SET `score`='$score' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Description Name
if($btn == 'Update Description'){
    $sql = "UPDATE `scholar_information` SET `description`='$des' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Deadline Name
if($btn == 'Update Deadline'){
    $sql = "UPDATE `scholar_information` SET `deadline`='$deadline' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}
//Update Image Name
if($btn == 'Update Image'){
    $sql = "UPDATE `scholar_information` SET `uni_image`='$img' WHERE scholar_id='$id'";
    $result = mysqli_query($connect, $sql);
    if($result){
            echo "<script>alert('Successfully Updated');window.location.replace('Admin_updatemainUIscholar.php');</script>";
    }
    else{
        echo "Failed";
    }
}


?>
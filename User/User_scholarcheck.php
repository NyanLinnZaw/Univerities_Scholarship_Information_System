<?php                                
session_start();

$_SESSION['scholar_id']=  $_SESSION['scholar_id'];
$_SESSION['user_email']=  $_SESSION['user_email'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";
  
$connect = mysqli_connect($servername, $username, $password, $database);

$sid = $_SESSION['scholar_id'];
$sql = "SELECT * FROM `scholar_information` WHERE scholar_id = '$sid'";
$result = mysqli_query($connect, $sql);
$row = mysqli_num_rows($result);
    
if($row > 0){
    while($row = mysqli_fetch_assoc($result)){
        // for session
        $_SESSION['score'] = $row['score'];
        $_SESSION['language'] = $row['language'];
        $_SESSION['field'] = $row['field']; 
        //for user form 
        if($_SESSION['language'] == 'IELTS'){
            header('location: User_formUIIELTS.php');
        }
        else if($_SESSION['language'] == 'TOEFL'){
            header('location: User_formUITOEFL.php');
        }
        else if($_SESSION['language'] == 'GPA'){
            header('location: User_formUIGPA.php');
        }
        else if($_SESSION['language'] == 'Topik'){
            header('location: User_formUITOPIK.php');
        }
        else if($_SESSION['language'] == 'JLPT - N'){
            header('location: User_formUIJLPT.php');
        }
    }
}   
?>

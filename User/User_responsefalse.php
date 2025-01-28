<?php
    session_start();
    $_SESSION['user_email']=  $_SESSION['user_email'];
    $_SESSION['language'] = $_SESSION['language'];
    
    if($_SESSION['language'] == 'GPA'){
        header('location: User_responsefalseGPA.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Reply Card</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="response.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
   </head>
<body style="background-image:url('HomePageImage/image7.jpg'); background-position: center; background-size: cover; height: 410px;">
   <?php
   
   $language = $_SESSION['language'];

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "project";
  
   $connect = mysqli_connect($servername, $username, $password, $database);
   
   $sql = "SELECT * FROM `class_information` WHERE language = '$language'";
   $result = mysqli_query($connect, $sql);
   $row = mysqli_num_rows($result);
//   if($row > 0){ 
//       while($row = mysqli_fetch_assoc($result)){
//           $class = $row['class_link'];
//       }
//   }
   
   ?>
   <div class="falsetop">
      <div class="left">
         <div class="col-sm-8">
            <div class="card text-center">
               <div class="card-header card_false">
                  Accept Response
               </div>
               <div class="card-body card_false">
                  <h5 class="card-title">Thanks for Your Trust</h5>
                  <p class="card-text">Sorry, dear! We appreciate that you've worked hard so much for this records. But for now, 
                  you're still not qualified to apply this scholarship. But through these guidelines, you can be qualified in next time.</p>
                  <p><?php if($row > 0){ 
                              while($row = mysqli_fetch_assoc($result)){
                                 $class = $row['class_link'];
                                 echo $class;
                                 echo "<br>";
                              }
                            }
                      ?>
                  </p>
                  <a href="index.php"><i data-bs-toggle="tooltip" data-bs-placement="left" title="Continue Login" class="fa fa-home" aria-hidden="true"></i></a>
                  <a href="index.php?logout='1'"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Logout" class="fas fa-sign-out-alt" aria-hidden="true" style="margin-left: 200px;"></i></a>
                  <!--<p> <a href="index.php?logout='1'" style="color: red;">LogOut</a> </p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>
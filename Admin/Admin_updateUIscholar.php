<?php
    session_start();
 
    $scholar_id = $_POST['scholar_id'];
    $uniname = $_POST['uni_name'];
    $scholar = $_POST['scholar_name'];
    $region = $_POST['region'];
    $field = $_POST['field'];
    $degree = $_POST['degree'];
    $language = $_POST['language'];
    $score = $_POST['score'];
    $des = $_POST['description'];
    $deadline = $_POST['deadline'];
    $img = $_POST['uni_image'];
     
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update UI</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Admin_update.css">
</head>
<body style="background-color: #14213d">

<div class="top">
   <div class="left">
      <a href="Admin_updatemainUIscholar.php"><i class="fa fa-hand-o-left" style="color: white; margin-left: 1200px; font-size: x-large;"></i></a>
      <form action="Admin_updatescholar.php" method="POST" enctype="multipart/form-data">
         <div class="form-group col-md-2">
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $scholar_id ?>">
         </div>
         <br>
         <!--University-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="uni" name="uni" value="<?php echo $uniname ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Uni Name">
         <br>
         <br>
         <!--Scholar-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="scholar" name="scholar" value="<?php echo $scholar ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Scholar Name">
         <br>
         <br>
         <!--Region-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="region" name="region" value="<?php echo $region ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Region">
         <br>
         <br>
         <!--Field-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="field" name="field" value="<?php echo $field ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Field">
         <br>
         <br>
         <!--Degree-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="degree" name="degree" value="<?php echo $degree ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Degree">
         <br>
         <br>
         <!--Language-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="language" name="language" value="<?php echo $language ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Language">
         <br>
         <br>
         <!--Score-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="score" name="score" value="<?php echo $score ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Score">
         <br>
         <br>
         <!--Description-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="des" name="des" value="<?php echo $des ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Description">
         <br>
         <br>
         <!--Deadline-->
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="deadline" name="deadline" value="<?php echo $deadline ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Deadline">
         <br>
         <br>
         <!--Image-->
         <div class="form-group col-md-3">
            <!--<input type="text" class="form-control" id="img" name="img" placeholder="Enter Image Name">-->
            <input type="file" class="form-control" id="file" name="file" value="<?php echo $img ?>">
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Update Image">
      </form> 
   </div>
</div>
</body>
</html>

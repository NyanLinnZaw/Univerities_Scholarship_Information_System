<?php
    session_start();
    
    if(!empty($_SESSION['user_email'])){
        $_SESSION['user_email'] = $_SESSION['user_email'];
    }
    else{
        "";
    }
    

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="show_card.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="container-fluid">
  <a href="index.php"><i class="fa fa-hand-o-left" style="color: black; margin-left: 1200px; font-size: x-large;"></i></a> 
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";
  
    $connect = mysqli_connect($servername, $username, $password, $database);
    
    $todays_date = date("Y-m-d");
    $today = strtotime($todays_date);
    $sql = "SELECT * FROM `scholar_information` WHERE region = 'Australia'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_num_rows($result);
    $btn = "";
    if($row > 0){
        while($row = mysqli_fetch_assoc($result)){
            $deadline = $row['deadline'];
            $expiration_date = strtotime($deadline);
            if($expiration_date > $today){
                $btn = $row["scholar_id"];
                $image = $row['uni_image'];
                $description = $row['description'];
                $uniname = $row['uni_name'];
                $language = $row['language'];
                $score = $row['score'];
                $degree = $row['degree'];
                $region = $row['region'];
                $field = $row['field'];
            ?>
            <form action='User_loginUI.php' method ='post'>
               <div class="card" style="max-width: 940px">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <?php echo "<img src='$image' style=border-radius:6px; width=240px height=250px>"?>
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title"><?php echo $uniname?></h5>
                           <p class="card-text"><?php echo $description?></p>
                           <p>More: <?php echo $region?> , <?php echo $field?> , <?php echo $degree?> , <?php echo $language?> <?php echo $score?></p>
                           <input type='submit' class='btn btn-primary' name='apply' value='Apply Now'>
                           <?php echo "<input type='text' name='scholar_id' value = '$btn' hidden>"?>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <?php mysqli_close($connect); ?>
  </body>
</html>

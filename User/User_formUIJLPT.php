<?php
session_start();

$_SESSION['score'] = $_SESSION['score'];
$email =  $_SESSION['user_email'];
$sec_field = $_SESSION['field'];
$sec_language = $_SESSION['language'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Infroamtion Form</title>
  </head>
  <body  style="background-image:url('HomePageImage/image7.jpg'); background-position: center; background-size: cover;">
    <div class="container">
     <a href="index.php"><i class="fa fa-hand-o-left" style="color: black; margin-left: 500px; font-size: x-large;"></i></a>
      <div class="register-screen">
        <h3 class="title-text text-center mtb">Submit Scholarship Form</h3>
        <form action="User_formJLPT.php" method="POST" id="register-form">
          <!---Fullname-->
          <div class="mtb">
            <input
              type="text"
              name="fullname"
              id="fullname"
              placeholder="Fullname"
              pattern="[a-zA-Z ]+"
              class="label-font input-field"
            />
          </div>
          <!--Email-->
          <div class="mtb">
            <input
              type="email"
              name="email"
              id="email"
              value="<?php echo $email?>";
              class="label-font input-field ml"
            />
          </div>
          <!---Age-->
          <div class="mtb">
            <input
              type="number"
              name="age"
              id="age"
              min="18"
              max="35"
              placeholder="Enter age between 18 and 35"
              class="label-font input-field"
            />
          </div>
          <!--Address-->
          <div class="mtb">
            <input
              type="text"
              name="address"
              id="address"
              class="label-font input-field ml"
              placeholder="Address"
              required
            />
          </div>
          <!--Phone Number-->
          <div class="mtb">
            <input
              type="tel"
              name="phno"
              id="phone-number"
              placeholder="09-123456789" 
              pattern="[0-9]{2}-[0-9]{9}" 
              class="label-font input-field ml"
              required
            />
          </div>
          <!--Language-->
          <div class="mtb">
            <input
              type="text"
              name="language"
              id="language"
              value="<?php echo $sec_language?>";
              class="label-font input-field ml"
              readonly="readonly"
            />
          </div>
          <!--Score-->
          <div class="mtb">
            <input
              type="number"
              name="score"
              id="score"
              class="label-font input-field ml"
              placeholder="Enter score between 0 and 5 (only one digit)"
              min="0"
              max="5"
              required
            />
          </div>
          <!--Interesting Field-->
          <div class="mtb">
            <input
              type="text"
              name="ifield"
              id="interesting-field"
              value="<?php echo $sec_field?>";
              class="label-font input-field ml"
            />
          </div>
          <div class="mtb">
            <input type="submit" class="btn-submit ml" name="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>


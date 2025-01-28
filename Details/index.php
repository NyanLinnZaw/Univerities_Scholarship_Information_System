<?php
    session_start();
    
    if(empty($_SESSION['user_email'])){
        $email = "Login First";
    }
    else{
        $_SESSION['user_email'] = $_SESSION['user_email'];
        $email = $_SESSION['user_email'];
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user_email']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
   <title>
      Home Page 
   </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="home.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<head>
<body>
   
   <ul class="nav justify-content-end" style="background-color: #9cd1f8;">
      <div class="dropdown-center">
         <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-weight: 500;">
         <i class='far fa-address-book' style="font-size:24px; margin-top: 1px; margin-right: 200px;"></i>
         </a>
         <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
            <li><a class="dropdown-item" href="#"><?php echo $email?></a></li>
         </ul>
      </div>
      
      <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="index.php" style="color: black; font-weight: 500;">Home</a>
      </li>
      
      <div class="dropdown-center">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-weight: 500;">
         Scholarships by Regions
         </a>
         <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
            <li><a class="dropdown-item" href="Showregion_USA.php">USA</a></li>
            <li><a class="dropdown-item" href="Showregion_UK.php">UK</a></li>
            <li><a class="dropdown-item" href="Showregion_Canada.php">Canada</a></li>
            <li><a class="dropdown-item" href="Showregion_Australia.php">Australia</a></li>
            <li><a class="dropdown-item" href="Showregion_Asia.php">Asia</a></li>
         </ul>
      </div>
      
      <div class="dropdown-center">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-weight: 500;">
         Scholarships by Fields
         </a>
         <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
             <li><a class="dropdown-item" href="Showfield_Business.php">Business</a></li>
             <li><a class="dropdown-item" href="Showfield_IT.php">IT</a></li>
             <li><a class="dropdown-item" href="Showfield_ArtDesign.php">Art and Design</a></li>
             <li><a class="dropdown-item" href="Showfield_Medicine.php">Medicine</a></li>
             <li><a class="dropdown-item" href="Showfield_Engineering.php">Engineering</a></li>
             <li><a class="dropdown-item" href="Showfield_Science.php">Science</a></li>
         </ul>
      </div>
      
      <div class="dropdown-center">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; font-weight: 500;">
         Scholarships by Degree
         </a>
         <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
             <li><a class="dropdown-item" href="Showdegree_Bachelors.php">Bachelor</a></li>
             <li><a class="dropdown-item" href="Showdegree_Master.php">Master</a></li>
             <li><a class="dropdown-item" href="Showdegree_PhD.php">PhD</a></li>
         </ul>
      </div>
      
      <li class="nav-item">
         <a class="nav-link" href="Home_contactus.php" style="color: black; font-weight: 500;">Contact us</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="Home_about.php" style="color: black; font-weight: 500;">About</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="Home_privacy.php" style="color: black; font-weight: 500;">Privacy</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="Admin_loginUI.php" style="color: black; font-weight: 500;">Log In</a>
      </li>
      
   </ul>
   
   <div class="container">
      <div class="row" style="margin-top: 20px;">
         <div class="col">
            <img class="img-fluid" src="HomePageImage/image1.jpg">
         </div>
         <div class="col">
            <img class="img-fluid" src="HomePageImage/image2.jpg" >
         </div>
      </div>
   </div>          
   <div class="container">
      <div class="row">
         <div class="col">
            <h3>What is a Scholarship?</h3>
            
            <p>Think of scholarships as monetary gifts that don't need to be paid back. These fantastic opportunities are offered by private companies, schools, communities, employers, non-profits, social organizations, professionals, and religious groups. In fact, there are thousands of scholarships out there. They can provide you with some much-needed respite from the costs associated with attending college, career school, or university.</p>
         </div>
         <div class="col">
            <h3>What Is the Best Way to Find Scholarships?</h3>

            <p>There are many avenues to explore when seeking scholarship opportunities. Contact your school's financial aid office to obtain information about different offers. Look online and check out your library too. However, it is essential to verify the information you receive and ensure it is current and legit. Some scholarships are offered every other year and others expire. If you are reading about an older offer, ensure it is still valid before you get your hopes up. Learn how to avoid scams, and remember, you don't have to pay for any information regarding financial aid or scholarships.</p>
         </div>
      </div>
   </div>
   <h1 style="font-family: 'Gentium Book Plus';padding-top: 10px; padding-bottom:10px;padding-left: 370px;">Lists of Available Scholarships</h1>
   <div class="container">
      <div class="row">
         <div class="col">
            <?php include('Home_showlist.php') ?>
         </div>
      </div>
   </div>
   <br>      
   <footer id="footer" class="container small" style="font-family:padding-left 35px">
   <div class="row" id="footer-bottom">
      Copyright 2022- 2023 @ All Rights Reserved.
         <div id="footer-links" class="col-sm-12 col-md-9">
            <a href="Home_about.php">About</a> |
            <a href="Home_privacy.php">Privacy Policy</a> |
            <a href="Home_contactus.php">Contact us</a>
      </div>
   </div>
   </footer>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>


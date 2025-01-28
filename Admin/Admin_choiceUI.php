<html>
<head>
   <title>
      Admin Choice UI
   </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="Admin_choice.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>-->
</head>
<!--<body style="background-image:url('HomePageImage/image6.jpg') ;height:100vh;width:100vw; background-position: center; background-size: cover; opacity:0.9;"> -->
<body>
<div class="column">
        <a href="Admin_loginUI.php"><i data-bs-toggle="tooltip" data-bs-placement="left" title="LogOut" class="fas fa-sign-out-alt" style="color: black; margin-top: 20px; margin-left: 1200px; font-size: x-large;"></i></a>
   <!--<div class="back">
      <a href="index.php">Home</a>
   </div>--> 
   <div class="margintop">
      
      <h1>Dear Admin!</h1>
      <br>
      <br>
      <h4>You can choose one to manage data.</h4>
   </div>
</div>
<br>
<br>  
<div class="container btns">
       <a href="Admin_UIforscholar.php" class="button" id="button-3">Scholar Information</a> 
       <a href="Admin_UIforclass.php" class="button" id="button-6">Class Information</a>
       <a href="Admin_viewuserinfo.php" class="button" id="button-1">User Information</a>
</div>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>
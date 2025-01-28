<?php include('Admin_login.php') ?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <head>
        <title>
           log in
        </title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="Admin_errors.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="big-image" style="background-image:url('HomePageImage/image6.jpg') ;height:100vh;width:100vw; background-position: center; background-size: cover;">
    <a href="index.php"><i data-bs-toggle="tooltip" data-bs-placement="left" title="GoHome" class="fa fa-home" style="color: black; margin-top: 20px; margin-left: 1250px; font-size: x-large;"></i></a>
    <h1 class="text-center" style="font-family: 'Gentium Book Plus';padding-top: 50px; padding-bottom:50px;">Login</h1>  
    <div class="container">  
       <div class="row">  
          <div class="col-md-5 mx-auto">  
             <form action="Admin_loginUI.php" method="POST" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">
                
                <div class="card card-body"> 
                <?php include('Admin_errors.php'); ?> 
                   <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
                   <div class="form-group required">  
                      <label for="adminname">Admin Name </label>  
                      <input type="text" class="form-control" id="adminname" required name="adminname" value="">  
                   </div>                      
                   <div class="form-group required">  
                      <label class="d-flex flex-row align-items-center" for="password">Password  </label>
                      <input type="password" class="form-control" required="" id="password" name="password" value="">  
                   </div>  
                   <div class="form-group mt-4 mb-4">  
                   </div> 
                </div>
               
                <div class="form-group pt-1">  
                   <div class="container">
                      <div class="row" style="margin-top: 25px; margin-left: 120px; align-self: center;">
                         <div class="col">
                            <button type="submit" class="btn btn-info btn-lg" name="admin_login">Admin Login</button>
                         </div>
                      </div>
                   </div> 
                </div>
             </form>
          </div> 
       </div>  
    </div>  
  </div>  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>



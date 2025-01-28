<!DOCTYPE html>
<html>
<head>
  <title>Insert UI</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Admin_update.css">
</head>
<body style="background-color: #14213d;">

<div class="top">
   <div class="left">
      <a href="Admin_UIforclass.php"><i class="fa fa-hand-o-left" style="color: white; margin-left: 1200px; font-size: x-large;"></i></a>
      <form action="Admin_insertclass.php" method="POST">
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="id" name="id" placeholder="Enter Class ID" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="language" name="language" placeholder="Enter Language" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="link" name="link" placeholder="Enter Class Link" required>
         </div>
         <br>
         <input type="submit" class="btn btn-primary" name="submit" value="Insert New Data">
      </form> 
   </div>
</div>
</body>
</html>

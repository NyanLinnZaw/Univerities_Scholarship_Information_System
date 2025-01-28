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
       <a href="Admin_UIforscholar.php"><i class="fa fa-hand-o-left" style="color: white; margin-left: 1200px; font-size: x-large;"></i></a>
       <form action="Admin_insertscholar.php" method="POST" enctype="multipart/form-data">
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID" required="required">
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="uni" name="uni" placeholder="Enter University Name" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="scholar" name="scholar" placeholder="Enter Scholar Name" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="region" name="region" placeholder="Enter Region Name" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="field" name="field" placeholder="Enter Field Name" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter Degree Name" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="language" name="language" placeholder="Enter Language Name" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="score" name="score" placeholder="Enter Score" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="des" name="des" placeholder="Enter Description" required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="text" class="form-control" id="deadline" name="deadline" placeholder="Enter Deadline(Y/m/d)" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"  required>
         </div>
         <br>
         <div class="form-group col-md-3">
            <input type="file" class="form-control" id="file" name="file" required>
         </div>
         <br>
         <input type="submit" class="btn btn-primary" name="submit" value="Insert New Data">
      </form> 
   </div>
</div>
</body>
</html>

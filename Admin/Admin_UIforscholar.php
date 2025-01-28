<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Admin_UI.css" />
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>-->
  </head>
  <body>
    <section class="container">
      <a href="Admin_choiceUI.php"><i data-bs-toggle="tooltip" data-bs-placement="left" title="AdminHome" class="fa fa-home" style="color: white; margin-left: 1200px; font-size: x-large;"></i></a>
      <div class="top"><h1 class="text">Welcome, Admin!</h1></div>
      <div class="text top2"><h3>You can insert, delete, update and view data for scholar information.</h3></div>
      
      <div class="btn-group mb">
        <a href="Admin_insertUIscholar.php"><button class="btn">Insert</button></a>
        <a href="Admin_deletemainUIscholar.php"><button class="btn">Delete</button></a>
        <a href="Admin_updatemainUIscholar.php"><button class="btn">Update</button></a>
        <a href="Admin_viewscholar.php"><button class="btn">View</button></a>
      </div>
    </section>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>


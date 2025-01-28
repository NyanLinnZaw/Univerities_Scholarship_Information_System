<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ViewUI</title>
  <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body style="margin: 50px; background-color: #14213d;">
<a href="Admin_UIforscholar.php"><i class="fa fa-hand-o-left" style="color: white; margin-left: 1200px; font-size: x-large;"></i></a>
<table class="table">
  <thead>
  <tr style="color: white;"><th>No</th>
                      <th>Scholar ID</th>
                      <th>University</th>
                      <th>Scholar Name</th>
                      <th>Region</th>
                      <th>Field</th>
                      <th>Degree</th>
                      <th>Language</th>
                      <th>Score</th>
                      <th>Description</th>
                      <th>Deadline</th>
                      <th>Uni Image</th>
  </tr>
  </thead> 
  <tbody>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";
  
    $connect = mysqli_connect($servername, $username, $password, $database);

    $todays_date = date("Y-m-d");
    $today = strtotime($todays_date);
    $sql = "SELECT * FROM `scholar_information`";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_num_rows($result);
    $counter = 1;
    if($row > 0){
        while($row = mysqli_fetch_assoc($result)){
            $deadline = $row['deadline'];
            $expiration_date = strtotime($deadline);
            if($expiration_date > $today){
                echo "<tr style='color: white;'><td>".$counter."</td>
                          <td color:white>" .$row['scholar_id']. "</td>
                          <td>" .$row['uni_name']. "</td>
                          <td>" .$row['scholar_name']. "</td>
                          <td>" .$row['region']. "</td>
                          <td>" .$row['field']. "</td>
                          <td>" .$row['degree']. "</td>
                          <td>" .$row['language']. "</td>
                          <td>" .$row['score']. "</td>
                          <td>" .$row['description']. "</td>
                          <td>" .$row['deadline']. "</td>
                          <td>". "<img src=".$row['uni_image'].' class=rounded-circle width=100px height=100px>' ."</td>
                      <tr>";
                $counter++;
            }
            else{
                 echo "<tr style='background-color: #fa728d; color: white;'><td>".$counter."</td>
                          <td>" .$row['scholar_id']. "</td>
                          <td>" .$row['uni_name']. "</td>
                          <td>" .$row['scholar_name']. "</td>
                          <td>" .$row['region']. "</td>
                          <td>" .$row['field']. "</td>
                          <td>" .$row['degree']. "</td>
                          <td>" .$row['language']. "</td>
                          <td>" .$row['score']. "</td>
                          <td>" .$row['description']. "</td>
                          <td>" .$row['deadline']. "</td>
                          <td>". "<img src=".$row['uni_image'].' class=rounded-circle width=100px height=100px>' ."</td>
                      <tr>";
                 $counter++;
                
            }
        }
    }
    mysqli_close($connect); 
    ?>
  </tbody>
</table>
</body>
</html>
<!--background-color: #e3f2fd;-->

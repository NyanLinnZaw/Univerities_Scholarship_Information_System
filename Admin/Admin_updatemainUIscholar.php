<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UpdateUI</title>
  <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body style="margin: 50px; background-color: #14213d;">
<a href="Admin_UIforscholar.php"><i class="fa fa-hand-o-left" style="color: white; margin-left: 1200px; font-size: x-large;"></i></a>
<table class="table">
  <thead>
  <tr style="color: white;"><th>Scholar ID</th>
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
                      <th>Action</th>
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
    if($row > 0){
        while($row = mysqli_fetch_assoc($result)){
            $deadline = $row['deadline'];
            $expiration_date = strtotime($deadline);
            if($expiration_date > $today){
                $btn = $row['scholar_id'];
                $uni = $row['uni_name'];
                $scholar = $row['scholar_name'];
                $region = $row['region'];
                $field = $row['field'];
                $degree = $row['degree'];
                $lan = $row['language'];
                $score = $row['score'];
                $des = $row['description'];
                $line = $row['deadline'];
                $img = $row['uni_image'];
                
                echo "<form action='Admin_updateUIscholar.php' method='POST'>"; 
                echo "<tr style='color: white;'><td>" .$row['scholar_id']. "</td>
                          <td>" .$row['uni_name']. "</td>
                          <td>" .$row['scholar_name']. "</td>
                          <td>" .$row['region']. "</td>
                          <td>" .$row['field']. "</td>
                          <td>" .$row['degree']. "</td>
                          <td>" .$row['language']. "</td>
                          <td>" .$row['score']. "</td>
                          <td>" .$row['description']. "</td>
                          <td>" .$row['deadline']. "</td>
                          <td valign='middle'>". "<img src=".$row['uni_image'].' class=rounded-circle width=100px height=100px>' ."</td>
                          <td valign='middle'><input type='submit' class='btn btn-primary' name='submit' value='Update'>
                          <input type='text' name='scholar_id' value = '$btn' hidden>
                          <input type='text' name='uni_name' value = '$uni' hidden>
                          <input type='text' name='scholar_name' value = '$scholar' hidden>
                          <input type='text' name='region' value = '$region' hidden>
                          <input type='text' name='field' value = '$field' hidden>
                          <input type='text' name='degree' value = '$degree' hidden>
                          <input type='text' name='language' value = '$lan' hidden>
                          <input type='text' name='score' value = '$score' hidden>
                          <input type='text' name='description' value = '$des' hidden>
                          <input type='text' name='deadline' value = '$line' hidden>
                          <input type='text' name='uni_image' value = '$img' hidden></td>
                      <tr>";
                echo "</form>";
            }
            else{
                 $btn = $row['scholar_id'];
                 $uni = $row['uni_name'];
                 $scholar = $row['scholar_name'];
                 $region = $row['region'];
                 $field = $row['field'];
                 $degree = $row['degree'];
                 $lan = $row['language'];
                 $score = $row['score'];
                 $des = $row['description'];
                 $line = $row['deadline'];
                 $img = $row['uni_image'];
                 
                 echo "<form action='Admin_updateUIscholar.php' method='POST'>";
                 echo "<tr style='background-color: #fa728d; color: white;'><td>" .$row['scholar_id']. "</td>
                          <td>" .$row['uni_name']. "</td>
                          <td>" .$row['scholar_name']. "</td>
                          <td>" .$row['region']. "</td>
                          <td>" .$row['field']. "</td>
                          <td>" .$row['degree']. "</td>
                          <td>" .$row['language']. "</td>
                          <td>" .$row['score']. "</td>
                          <td>" .$row['description']. "</td>
                          <td>" .$row['deadline']. "</td>
                          <td valign='middle'>". "<img src=".$row['uni_image'].' class=rounded-circle width=100px height=100px>' ."</td>
                          <td valign='middle'><input type='submit' class='btn btn-primary' name='delete' value='Update'>
                          <input type='text' name='scholar_id' value = '$btn' hidden>
                          <input type='text' name='uni_name' value = '$uni' hidden>
                          <input type='text' name='scholar_name' value = '$scholar' hidden>
                          <input type='text' name='region' value = '$region' hidden>
                          <input type='text' name='field' value = '$field' hidden>
                          <input type='text' name='degree' value = '$degree' hidden>
                          <input type='text' name='language' value = '$lan' hidden>
                          <input type='text' name='score' value = '$score' hidden>
                          <input type='text' name='description' value = '$des' hidden>
                          <input type='text' name='deadline' value = '$line' hidden>
                          <input type='text' name='uni_image' value = '$img' hidden></td>
                       <tr>";
                 echo "</form>";
            }
        }
    }
    mysqli_close($connect); 
    ?>
  </tbody>
</table>
</body>
</html>


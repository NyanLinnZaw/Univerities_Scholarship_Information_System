<?php
    
    $name = $_POST['name'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <title>Thank You</title>
    <style>body { background-color: #fff; color: #222; font: 16px/1.5 -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; margin: 0; }
           .container { margin: 30px; max-width: 600px; }
           h1 { color: #dc3545; font-size: 24px; }
           h2 { font-size: 18px; }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('HomePageImage/image3.jpg');height:120vh;width:100vw; background-position: center; background-size: cover;">

<div class="container">
    <h1>Thank you so much for your attentions!</h1>
    <h2>Hello <?php echo $name?></h2>

    <p>
        You can find opportunities in this site.Time and tide wait for no man.So find your ways correctly and quickly.Here we run for you.
    </p>
    <a href="index.php"><i class="fa fa-home" style="color: black; margin-top: 20px; margin-left: 2px; font-size: x-large;"></i></a>
       
</div>

</body>
</html>
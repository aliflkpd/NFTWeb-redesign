<?php
require "session.php";
 include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto:ital,wght@0,100;0,300;1,100&family=Trispace:wght@500;600;800&family=VT323&display=swap" rel="stylesheet">
    <head>
<style>
h1 {
  color: #000000;
  text-shadow: 2px 2px 4px #8a8a8a;
}
</style>
</head>
<body>
<body style="background-color: #ff6f00">
<div class="moving">
<h1><marquee direction="right", scrolldelay="100">Welcome, <?php echo $_SESSION['WalletID']; ?></h1></marquee>
</div>
    
      
</body>
<?php include "footer.php" ?>

</html>
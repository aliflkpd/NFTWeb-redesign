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
    <tittle></tittle>
   
    <head>
<style>
h1 {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
</style>
</head>
<body>
<body style="background-color: #ff6f00">
    <h1>Welcome, <?php echo $_SESSION['WalletID']; ?></h1>
      
</body>
<?php include "footer.php" ?>

</html>
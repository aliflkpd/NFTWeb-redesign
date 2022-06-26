<?php
require "session.php";
include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle></tittle>
    <?php include "header.php"; ?>
</head>


<body style="background-color: #FF8700">
    <h1>Welcome, <?php echo $_SESSION['WalletID']; ?></h1>
      
</body>
</html>
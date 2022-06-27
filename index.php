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
<style>
</style>
</head>
<body style="background-color: #ff6f00">
<div class="moving">
<h1><marquee direction="right", scrolldelay="100">Welcome, <?php echo $_SESSION['WalletID']; ?></h1></marquee>
</div>
<h2>
  <div class="navigation">
  <a class="button" href="logout.php"><div class="logout">About Us</div></h2></a>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<h3>
  <div class="navigation">
  <a class="button" href="logout.php"><div class="logout">LOGOUT</div></h3></a>
</div>

    <div class="container1 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
        <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/evos.jpg" style="width:100%; height:100%;">
         </div>
            <div class="ForText" style="width:100%; height:30%; background:white;">
            <h3><center>Baby#1</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">4</center>

            </div>
                <div class="buy-button" style="width:100%; height:10%; background:blue;">
                <center><input type="submit" name="buy" value="Buy"></center>
         </div>
    </div>
    
    <div class="container2 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
     <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/mulletgirl.jpg" style="width:100%; height:100%;">
    </div>
    <div class="ForText" style="width:100%; height:30%; background:white;">
            <h3><center>Baby#1</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">4</center>

            </div>
                <div class="buy-button" style="width:100%; height:10%; background:blue;">
                <center><input type="submit" name="buy" value="Buy"></center>
         </div>
    </div>
    
    <div class="container2 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/kawaki.jpg" style="width:100%; height:100%;">
    </div>
    <div class="ForText" style="width:100%; height:30%; background:white;">
            <h3><center>Baby#1</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">4</center>

            </div>
                <div class="buy-button" style="width:100%; height:10%; background:blue;">
                <center><input type="submit" name="buy" value="Buy"></center>
         </div>
    </div>
    
    <div class="container2 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/jb2.jpg" style="width:100%; height:100%;">
    </div>
    <div class="ForText" style="width:100%; height:30%; background:white;">
            <h3><center>Baby#1</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">4</center>

            </div>
                <div class="buy-button" style="width:100%; height:10%; background:blue;">
                <center><input type="submit" name="buy" value="Buy"></center>
         </div>
    </div>
    

</body>
<?php include "footer.php" ?>

</html>
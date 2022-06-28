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
h1 {
  color: #000000;
  text-shadow: 2px 2px 4px #8a8a8a;
}
</style>
</head>
<body style="background-color: #ff6f00">
<div class="moving">
<h1><marquee direction="right", scrolldelay="100">Welcome, <?php echo $_SESSION['WalletID']; ?></h1></marquee>
</div>
<h2>
  <div class="navigation">
  <a class="button" href="logout.php"><div class="logout">LOGOUT</div> </a>
  </div>
</h2>
<h3><br/><br/><br/><br/>

  <div class="navigation2">
    <style> 
    .navigation2 {
     font-family: 'Indie Flower', cursive;
     font-family: 'Roboto', sans-serif;
     font-family: 'Trispace', sans-serif;
     font-family: 'VT323', monospace;
      }
      </style>
        <a class="button" href="about.php"><div class="about us">about us</div> </a>
</h3>
<style>
      button {
        display: inline-block;
        background-color: #009dff;
        border: 2px solid white;
        border-radius: 8px;
        color: #eeeeee;
        text-align: center;
        font-size: 12px;
        padding: 4px;
        width: 100%;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        margin-left:0;
        margin-bottom:-20px;
      }
    </style>

    <div class="container1 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
        <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/evos.jpg" style="width:100%; height:110%;">
         </div>
            <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#1</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
                <div class="buy" style="width:100%; height:5%; background:white;">
                <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>
    
    <div class="container2 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
     <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/pinkninjagirl.jpg" style="width:100%; height:110%;">
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#2</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
            <div class="buy" style="width:100%; height:5%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>
    
    <div class="container2 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/junglearmy.jpg" style="width:100%; height:110%;">
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#3</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
            <div class="buy" style="width:100%; height:5%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>
    
    <div class="container2 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/futuristicalif.jpg" style="width:100%; height:110%;">
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#4</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
            <div class="buy" style="width:100%; height:10%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>

    <div class="container3 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/pandkarafuru4.jpg" style="width:100%; height:110%;">
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#5</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
            <div class="buy" style="width:100%; height:10%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>
    
    <div class="container4 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/gojek.jpg" style="width:100%; height:110%;">
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#6</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
            <div class="buy" style="width:100%; height:10%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>

    <div class="container4 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src="img/goku.jpg" style="width:100%; height:110%;">
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>Baby#7</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">2</center>

            </div>
            <div class="buy" style="width:100%; height:10%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>

    <div class="container4 ml-5 mt-3" style="width: 220px; float:left;
    height: 300px;
    background: black";>
    <div class="gambar" style="width:100%; height:60%; background:white;">
    <video width="100%" height="110%" autoplay loop>
      <source src="img/datamine.mp4" type="video/mp4">
    </video>
    </div>
    <div class="ForText" style="width:100%; height:26%; background:white;">
            <h3><center>LegendaryBaby#1</center></h3>
            <center><img src="img/eth.png" style="width:15px; height:23px; margin-bottom:-6px">5</center>

            </div>
            <div class="buy" style="width:100%; height:10%; background:white;">
            <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
         </div>
    </div>
    
</body>
<?php include "footer.php" ?>

</html>
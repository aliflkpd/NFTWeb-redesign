<?php
require "session.php";
require "connection.php";
 include "../templates/header.php";
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
<?php $posts = $con->query("SELECT * FROM nft");
while($post = $posts->fetch_object()) {
  ?>
    <div class="container1 ml-5 mt-3" style="width: 220px; float:left; height: 300px; background: black";>
      <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src ="users/<?php echo $post->image ?>"width= "100%"> </div>
        <a href="nftpost.php?id=<?php echo $post->id ?>"><h2 class="btn btn-outline-secondary"></h2></a>
          <div class="ForText" style="width:100%; height:26%; background:white;">
            <?php echo $post->title; ?>
            <p class="price"><?php echo $post->price; ?></p> </div>
                <div class="buy" style="width:100%; height:5%; background:white;">
                <p><a href="buy.php"><button>BUY</button></a></p>
                </div>
      </div>

<?php
}
?>
  
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
   
</body>
<?php include "../templates/footer.php" ?>

</html>
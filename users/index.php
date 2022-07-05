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
<body style="background-color: #ff6f00;          
         font-family: 'Indie Flower', cursive;
         font-family: 'Roboto', sans-serif;
         font-family: 'Trispace', sans-serif;
         font-family: 'VT323', monospace;" >
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
      button:hover {
      background-color:#051A54;
      transition: 0.7s;
      }
    </style>

<?php $posts = $con->query("SELECT * FROM nft");
while($post = $posts->fetch_object()) {
  ?>

    <div class="container1 ml-5 mt-3" style="width: 220px; float:left; height: 300px; background: black; margin-left: 10%; margin-bottom:2%; margin-top:5%";>
      <div class="gambar" style="width:100%; height:60%; background:white;">
        <img src ="../assets/<?php echo $post->image ?>"width= "100%" height="120%"> </div>
        <h2 class="btn btn-outline-secondary"></h2></a>
          <div class="ForText" style="width:100%; height:24%; background:white;">
          </br></br><center><?php echo $post->title; ?></center>
            <div class="price">
              <center><img src="../assets/eth.png" style="width:15px; height:23px; margin-bottom:-6px">
                <?php echo $post->price; ?></center></div> </div>
                <div class="buy" style="width:100%; height:5%; background:white;">
                <center><button onclick="window.location.href = 'buy.php'" type="button">BUY</center>
                </div>
      </div>

<?php
}
?>

</body>
<?php include "../templates/footer.php" ?>

</html>
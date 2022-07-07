<?php include "../templates/header.php";
      require "../users/connection.php";
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
   <div class="navigation">
  <a class="button" href="insert.php"><div class="">UPLOAD NFT</div> </a>
  </div>

<?php
if(isset($_POST["nft"]) && $_POST["nft"] == 'insert')

if($_POST["nft"] == 'insert') {
    $target_dir = "../assets/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $title = $_POST['title'];
    $image = $_FILES["image"]["name"];
    $price = $_POST['price'];
    $con->query("INSERT INTO NFT set title='$title', image='$image', price= '$price'");
 }
 
 if(isset($_POST["submit"]) && $_POST["submit"] == 'update') 

 if($_POST["submit"] == 'update'){
     $target_dir = "../assets/";
     $target_file = $target_dir . basename($_FILES["image"]["name"]);
     move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
     $title = $_POST['title'];
     $newimg = $_FILES["image"]["name"];
     $id = $_POST['id_nft'];
     $price = $_POST['price'];
     $con->query("UPDATE nft set title='$title', image='$newimg', price = '$price' WHERE id='$id'");
 }
 $posts = $con->query("SELECT * FROM nft");
 ?>

<?php
while($post = $posts->fetch_object()) {
 ?>
    <div class="container1 ml-5 mt-3" style="width: 220px; float:left; height: 300px; background: black; margin-left: 10%; margin-bottom:2%; margin-top:5%";>
      <div class="gambar" style="width:100%; height:55%; background:white;">
        <img src ="../assets/<?php echo $post->image ?>"width= "100%" height="122%"> </div>
        <h2 class="btn btn-outline-secondary"></h2></a>
          <div class="ForText" style="width:100%; height:24%; background:white;">
          </br>#ID : <?php echo $post->id ?><center><?php echo $post->title; ?></center>
            <div class="price">
              <center><img src="../assets/eth.png" style="width:15px; height:23px; margin-bottom:-6px">
                <?php echo $post->price; ?></center></div> </div>
                <div class="update" style="width:100%; height:5%; background:white;">
</br>
                <button onclick="window.location.href = 'update.php?id=<?php echo $post->id ?>'" type="button" 
                style="width:45%; height:160%;">edit </button>

                <button onclick="window.location.href = 'delete.php?id=<?php echo $post->id ?>'; return confirm('Are you sure to delete the nft? this will remove the whole nft data from database')" type="button"style="width:47%; height:160%;"> Delete </button><a>
                
      </div>
</div>
<style>
button {
        display: inline-block;
        background-color: #009dff;
        border: 3px solid white;
        border-radius: 2px;
        color: #eeeeee;
        text-align: center;
        font-size: 12px;
        padding: 4px;
        width: 100%;
        height:100%;
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
</body>
   <?php
}
include "../templates/footer.php"
?>


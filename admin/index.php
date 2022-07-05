<?php include "../templates/header.php";
      require "../users/connection.php";
   ?>

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



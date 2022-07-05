<?php include "../users/connection.php";
$id = $_GET['id'];
$nftdel  = $con->query("select * from nft where id='$id'"); 
$row    = mysqli_fetch_array($nftdel);
$con->query("DELETE from nft  WHERE id='$id'");
header("location: index.php");
?>



<?php
include "header.php";
require "connection.php";
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM nft WHERE id=$id");
$post = $result->fetch_object();
?>
<div class="zeph">
<div><img src ="users/<?php echo $post->image ?>"width= "100%"></div>
</div>
<div class="container1 ml-5 mt-3">
<div style="font-size: 32pt;"><?php echo $post->title;?></div>
<p class="price"><?php echo $post->title; ?></p>
</div>
<?php include "footer.php" ?>

<!doctype html>
<html lang="en">
<?php
include "../templates/header.php";
require "../users/connection.php";
$id = $_GET['id'];
$babydom  = $con->query("select * from nft where id='$id'");
$row        = mysqli_fetch_array($babydom);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto:ital,wght@0,100;0,300;1,100&family=Trispace:wght@500;600;800&family=VT323&display=swap" rel="stylesheet">
</head>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<body>
<div class="main">
	<div class="div-content">
		<div class="all">
			<div class="center">
				<div class="div-box">
    <a><Center>UPDATE YOUR NFT</Center></a></br></br>
    <input type="hidden" name="submit" value="update">
    <input type="hidden" value="<?php echo $row['id'];?>" name="id_nft">
    <input type="hidden" name="submit" value="update">
        <table>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>NFT</td>
				<td><input type="file" name="image"></td>			
			</tr>	
			<tr>
                <td>Name </td>
				<td><input type="text" name="title"></td>	
			</tr>
            <tr>
				<td>Price</td>
				<td><input type="int" name="price"></td>		
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="save"></td>			
			</tr>
</table>
    </form>
</div>
</div>
</div>
</div>
</div>
</body>
<?php
include "../templates/footer.php";
?>
</html>
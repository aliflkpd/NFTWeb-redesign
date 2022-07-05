<!doctype html>
<html lang="en">
<?php
include "../templates/header.php"
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
<body>
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
<div class="main">
	<div class="div-content">
		<div class="all">
			<div class="center">
				<div class="div-box">
   				 <a><Center>UPLOAD NFT ARTS</Center></a></br></br>
   				 <table>
   				 <form action="index.php" method="post" enctype="multipart/form-data">
             	<tr>
            	<input type="hidden" name="nft" value="insert"></tr>
		    	<tr>
					<td>NFT </td>
					<td style = ><input type="file" name="image"></td>					
				</tr>	
				<tr>
					<td>Name</td>
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
    </form>	
	</table> 
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
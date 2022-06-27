<!DOCTYPE html>
<html>
<head>
    <title> NFT Collection </title>
</head>
<body>
<table border="1" align="center" width="100%">
    <tr bgcolor="white">
        <th>id</th>
        <th>nama</th>
        <th>gambar</th>
    </tr>
    <tr>
        <?php
            include "connection.php";
            $query = mysqli_query($con, "SELECT * FROM gambar");
            while($data = mysqli_fetch_array($query)){
        ?>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><img src="<?php echo $data['gambar']; } ?></td>
    </tr>
</table>
</body>
</html>
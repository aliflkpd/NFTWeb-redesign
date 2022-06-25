<?php
require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Home</tittle>
</head>

<Style>
    body {
        margin : 0;
        height : 100vh;
        display : flex;
        justify-content: center;
        align-items: center;
    }
</Style>
<body>
    <h1>Welcome, <?php echo $_SESSION['email']; ?></h1>
</body>
</html>
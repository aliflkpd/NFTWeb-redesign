<?php
    require "connection.php";
    include "headerREgLog.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="div-content">
        <div class="all">
            <h1>Register here</h1>
            <div class="div-box">
                <form action="" method="post">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                   
                    <div>
                        <label for="WalletID">WalletID</label>
                        <input type="WalletID" name="WalletID" id="WalletID">
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    
                    <div>
                        <input type="submit" name="submit" value="Register">
                    </div>
            </div>
                </form>

                <?php 
                    if(isset($_POST['submit'])){
                        $email = htmlspecialchars($_POST['email']);
                        $WalletID = htmlspecialchars($_POST['WalletID']);
                        $password = htmlspecialchars($_POST['password']);
                        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
                    
                        $query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
                        $query = mysqli_query($con, "SELECT WalletID FROM users WHERE WalletID='$WalletID'");
                        $count = mysqli_num_rows($query);
                        

                        if($count > 0){
                            echo "Email or WalletID already registered!";
                        }
                        else {
                            $queryInsert = mysqli_query($con, "INSERT INTO users (email,password,WalletID) VALUES 
                            ('$email','$encryptedPassword','$WalletID')");
                        
                        IF($queryInsert) {
                            echo "Register success!";
                            echo '<a href="login.php"><br>Click here to login</a>';
                        }
                    }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
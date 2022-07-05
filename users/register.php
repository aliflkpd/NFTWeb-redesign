<?php
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
</head>
<body>
    <div class="main">
        <div class="div-content">
        <div class="all">
        <div class="center">
        <h1><img src="img/text.jpg" width=100% height=100%></h1></div>
            <div class="div-box">
                <form action="" method="post">
                    <div>
                        <label class="emailbox" for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                   
                    <div>
                        <label class="walletbox" for="WalletID">WalletID</label>
                        <input type="WalletID" name="WalletID" id="WalletID">
                    </div>

                    <div>
                        <label class="passwordbox" for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    
                    <div class="register-button2">
                        <input type="submit" name="submit" value="Register">
                    </div>
                    <div>
                        <a href="login.php"> <center> got an account? login here!</center></a>
                    </div>
                    <?php 
                    if(isset($_POST['submit'])){
                        $email = ($_POST['email']);
                        $WalletID = ($_POST['WalletID']);
                        $password = ($_POST['password']);
                        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
                    
                        $query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
                        $query = mysqli_query($con, "SELECT WalletID FROM users WHERE WalletID='$WalletID'");
                        $count = mysqli_num_rows($query);
                        

                        if($count > 0){
                           $error = true;
                        }
                        else {
                            $queryInsert = mysqli_query($con, "INSERT INTO users (email,password,WalletID) VALUES 
                            ('$email','$encryptedPassword','$WalletID')");
                        
                        IF($queryInsert) {
                            echo "Register success!";
                        }
                    }
                    }
                ?>
    <?php if( isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
     <center> Email or WalletID already exist!</center>
    </div>
    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
<?php include "../templates/footer.php" ?>
</html>
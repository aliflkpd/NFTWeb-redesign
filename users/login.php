<?php
    session_start();
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
    <tittle></tittle>
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
                        <label class="passwordbox" for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    
                    <div class ="login-button">
                        <input type="submit" name="submit" value="Log in">
                    </div>
                    <div>
                        <a href="register.php"> <br/><center> don't have an account? register here!</center></a>
                    </div>
                    <?php
                    if(isset($_POST['submit'])){
                    $email = ($_POST['email']);
                    $password = ($_POST['password']);

                    $query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
                    $count = mysqli_num_rows($query);
                    
                    if($count > 0) {
                        
                        $data = mysqli_fetch_array($query);
                            if(password_verify($password, $data['password'])) {
                            $_SESSION['logged_in'] = true;
                            $_SESSION['email'] = $data['email'];
                            $_SESSION['WalletID'] = $data['WalletID'];

                            header("location: index.php");
                        } 
                        else {
                            $passwordinvalid = true;
                        }
                    }
                    else {
                        $accountinvalid = true;
                    }
                }
                ?>
    <?php if( isset($accountinvalid)) : ?>
    <div class="alert alert-danger" role="alert">
     <center> Your account doesn't exist !</center>
    </div>
    <?php endif; ?>

    <?php if( isset($passwordinvalid)) : ?>
    <div class="alert alert-danger" role="alert">
     <center> Password Invalid !</center>
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
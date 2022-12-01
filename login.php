<?php

@include 'config.php';

//Starts a user session as long as user email and password are correct
session_start();

if (isset($_POST['submit'])) {
    
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $_SESSION['email'] = $email;
      header('location:account1.php');
   }else {
      $error[] = ' Error! Incorrect password or email.';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LoginPage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Login.css" />
</head>
<body>
    <nav class="header-out">
        <img class="BulletinLogo" src="https://i.imgur.com/aNeZokY.jpeg">
    </nav>
    <main>
        <div class="form-container">
            <form action="" method="post">
                <div id="Login">
                    <p style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 30px">Login</p><br>
                </div>
                <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                        echo '<script type="text/javascript">';
                        echo ' alert("Error, incorrect password/email")';
                        echo '</script>';
                        }
                    }
                ?>
                <label for="email" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 560px"><b>Email</b></label><br>
                <input type="email" name="email" placeholder="Enter in Email" class="box" style="width: 350px; padding: 12px 25px; display: inline-block; margin-left: 560px; border: 4px black; border-radius: 4px;" required><br><br>
                <label for="password" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 560px"><b>Password</b></label><br>
                <input type="password" name="password" placeholder="Enter in Password" class="box" style="width: 350px; padding: 12px 25px; display: inline-block; margin-left: 560px; border: 4px black; border-radius: 4px;" required><br><br>
                <input type="submit" value="Login" name="submit" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; background-color: black; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; width: 400px; margin-left: 560px;"><br><br>
                <p style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 0px"> or </p>
                <p><a href="createAccount.php" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 700px">Create Account</a></p>
                </div>
             </form>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer id="footer">
        <p> While using Bulletin, you agree to have read and accepted our terms of use, cookie and privacy policy.<br>
            Copyright 2022-2023 by IDM Industries. All Rights Reserved.<br>
            Bulletin is Powered by IDM Industries.</p>
    </footer>
</body>
</html>
<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $retypedpassword = md5($_POST['retypedpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password'";

   //If else statement that grabs the users defined in our database and checks to see if the created account already has a user associated with that email. It also checks if the password and retyped password are the same.
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error1[] = 'Error, a User With that Email Already Exists';
   }else {
      if ($password != $retypedpassword) {
         $error2[] = 'Error, Your Passwords do not Match';
      }else {
         $insert = "INSERT INTO user_form(email, password) VALUES('$email','$password')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LoginPage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CreateAccount.css"
    integrity= "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CreateAccount.css"/>
</head>
<body>
    <div class="form-container">
        <nav class="header-out">
            <img class="BulletinLogo" src="https://i.imgur.com/aNeZokY.jpeg">
        </nav>
        <main>
        <form action="" method="post">
            <h1 style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 30px">Create an Account</h1><br><br>
            <?php
               if (isset($error1)) {
                  foreach ($error1 as $error1) {
                     echo '<script type="text/javascript">';
                     echo ' alert("Error, a user with that email already exists")';
                     echo '</script>';
                  }
               }
            ?>
            <?php
               if (isset($error2)) {
                  foreach ($error2 as $error2) {
                     echo '<script type="text/javascript">';
                     echo ' alert("Error, your passwords do not match")';
                     echo '</script>';
                  }
               }
            ?>
            <label for="email" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 560px"><b>Email</b></label><br>
            <input type="email" name="email" placeholder="Enter in Email" class="box" style="width: 350px; padding: 12px 25px; display: inline-block; margin-left: 560px; border: 4px black; border-radius: 4px;" required><br><br>
            <label for="password" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 560px"><b>Password</b></label><br>
            <input type="password" name="password" placeholder="Enter in Password" class="box" style="width: 350px; padding: 12px 25px; display: inline-block; margin-left: 560px; border: 4px black; border-radius: 4px;" required><br><br>
            <label for="validatePassword" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 560px"><b>Re-enter Password</b></label><br>
            <input type="password" name="retypedpassword" placeholder="Re-enter Password" class="box" style="width: 350px; padding: 12px 25px; display: inline-block; margin-left: 560px; border: 4px black; border-radius: 4px;" required><br><br>
            <input type="submit" value="Create Account" class="form-btn" name="submit" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; background-color: black; border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; width: 400px; margin-left: 560px;">
            <p><a href="login.php" style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; font-size: 16px; margin-left: 570px"> Already Have an Account? Click Here to Login </a></p>
        </form>
        </main>
    </div>
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

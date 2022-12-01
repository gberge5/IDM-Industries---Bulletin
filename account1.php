<?php
@include 'config.php';

  session_start();

  if (!isset($_SESSION['email'])) 
  {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title> account </title>
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, intitial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="account.css" />

</head>
</html>
<body>
  <nav class="header-out">
    <img class="BulletinLogo" src="https://i.imgur.com/aNeZokY.jpeg">
    <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/home.php">Home</a>
    <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentCalendar.php">Student Calendar</a>
    <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentAssignmentPlanner.php">Student Planner</a>
    <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentRunOrganizations.php">Student-Run Organizations</a>
    <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/studentGradeCalculator.php">Student Grade Calculator</a>
    <a class="nav-bar" style="text-decoration: none;" href="http://localhost/bulletin/account1.php">Account</a>
  </nav>
  <main>
    <div class="container">
      <div class="content">
        <h1 style="font-family: 'Open Sans', sans-serif; color:white; text-align: center; top: 50%; font-size: 30px">Account Information</h3><br>
        <p style="font-family: 'Open Sans', sans-serif; color:white; text-align: left; top: 50%; font-size: 20px; margin-left: 645px"> Email: <span><?php echo $_SESSION['email']; ?></span></p><br>
        <a href="logout.php" class="a" style="display:inline-block; text-decoration: none; font-family: 'Open Sans', sans-serif; color:white; text-align: center; background-color: black;border: 2px solid white; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; cursor: pointer; width: 150px; font-size: 20px; margin-left: 680px;">Logout</a>
      </div>
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

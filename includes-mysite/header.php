<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes-mysite/session.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Levites</title>
    <link rel="stylesheet" href="cascading-style-sheets/mysitestyle.css" >
    <link rel="icon" type="image/x-icon" href="img/Little Levites.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>
    <div class= "nav-style">
    <!--<a class="split-1" href="index.php">Home</a> -->
    
  <?php 
              if(!isset($_SESSION["userid"])){
          ?>
  <a style="font-style: italic;" href="login.php" class="split-2">LOGIN</a>
  <?php } else { ?>
    <div class = "nav_section"> 
    <!--<a  href="aboutus.php">About Us</a>
  <a href="#gallery"> Gallery</a>
  <a href="#location">Location</a>

  <a href="admin_view_records.php">View Students</a>  -->
 
            <a style="font-weight: bolder;  font-style: italic; color: #edbb00;" href="admin_view_records.php"> Welcome  <?php echo $_SESSION["username"] ?>
         (current)</a>
         </div>
            <a style="font-style: italic;" href="logout.php" class= "spilt-3">LOGOUT </a>
          <?php } ?> 
</div>
    </header>
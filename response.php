<?php 
$title = "Profile";
require_once "includes/header.php"; 
?>
<h1> Operation has been completed. Please proceed to login </h1>
<br/>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST["FirstName"]; echo" "; echo $_POST["LastName"]; ?></h5>
    <p class="card-text">Gender:  <?php echo $_POST["gender"]; ?></p>
    <p class="card-text">Age: <?php echo $_POST["age"]; ?></p>
    <p class="card-text">Email Address: <br/> <?php echo $_POST["inputEmail3"]; ?></p>
    <p class="card-text">Contact Number:<br/> <?php echo $_POST["tel1"]; echo" | "; echo $_POST["tel2"]; ?></p>
  </div>
</div>
<?php require_once "includes/footer.php"; ?>
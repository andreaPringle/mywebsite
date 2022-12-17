<?php 
$title = "View Record";
require_once "includes-mysite/header.php"; 
require_once "db/conn_mysite.php"; 


if(!isset($_GET["id"])){
    echo "<br/>  <br/> ";
    include "includes-mysite/unsuccessfull.php";
    header("Location: admin_view_records.php");
  } else{
    $id= $_GET["id"];
    $results= $crud->getStudentDetails($id);
  
?>
<br/>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $results["fname"]; echo" "; echo $results["lname"]; ?></h5>
    <p class="card-text">Gender:  <?php echo $results["name"]; ?></p>
    <p class="card-text">Age: <?php echo $results["age"]; ?></p>
    <p class="card-text">Email Address: <br/> <?php echo $results["email"]; ?></p>
    <p class="card-text">Address: <br/> <?php echo $results["address"]; ?></p>
    <p class="card-text">Contact Number:<br/> <?php echo $results["contact_1"]; echo" | "; echo $results["contact_2"]; ?></p>
  </div>
</div>
<br/>
<a href="admin_view_records.php" class= "btn btn-info">Back to list</a>
<a href="admin_edit.php?id=<?php echo $results["student_id"] ?> " class= "btn btn-warning">Edit</a>
<a onclick="return confirm('Are you sure you want to delete this record?')" href="admin_delete.php?id=<?php echo $results["student_id"] ?> " class= "btn btn-danger">Delete</a>
<?php }?>
<?php require_once "includes-mysite/footer.php"; ?>
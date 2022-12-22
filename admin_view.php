<?php 
$title = "View Record";
require_once "includes-mysite/header.php"; 
require_once "includes-mysite/authen_check.php";
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

<img style="display: block; margin-left: auto; margin-right: auto; width: 20%; height: 20%" 
  src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result["avatar_path"] ; ?>" 
  class="rounded-circle"/>
  <div class="center-card" >
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><div style="font-weight:bolder;"><?php echo $results["fname"]; echo" "; echo $results["lname"]; ?></h5>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;"> Gender:  <br/> </div> <?php echo $results["name"]; ?></p>
    <p class="card-text"><div style="font-style: italic; font-weight:bold;">Age:  <br/> </div><?php echo $results["age"]; ?></p>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;">Email Address: <br/></div> <?php echo $results["email"]; ?></p>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;">Address: <br/>  </div><?php echo $results["address"]; ?></p>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;">Contact Number: <br/> </div> <?php echo $results["contact_1"]; echo" | "; echo $results["contact_2"]; ?></p>
  </div>
</div>
<br/>
<a href="admin_view_records.php" class= "btn btn-info">Back to list</a>
<a href="admin_edit.php?id=<?php echo $results["student_id"] ?> " class= "btn btn-warning">Edit</a>
<a onclick="return confirm('Are you sure you want to delete this record?')" href="admin_delete.php?id=<?php echo $results["student_id"] ?> " class= "btn btn-danger">Delete</a>
  </div>
<?php }?>
<?php require_once "includes-mysite/footer.php"; ?>
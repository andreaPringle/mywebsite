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
    $result= $crud->getStudentDetails($id);
  
?>
<br/>
<img style="display: block; margin-left: auto; margin-right: auto; width: 20%; height: 20%" 
src="<?php echo empty($result["avatar_pic"]) ? "uploads/blank.png" : $result["avatar_pic"];?>" alt=" Picture of student" />
<div class="center-card"> 
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><div style="font-weight:bolder;"><?php echo $result["fname"]; echo" "; echo $result["lname"]; ?></h5>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;"> Gender:  <br/> </div> <?php echo $result["name"]; ?></p>
    <p class="card-text"><div style="font-style: italic; font-weight:bold;">Age:  <br/> </div><?php echo $result["age"]; ?></p>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;">Email Address: <br/></div> <?php echo $result["email"]; ?></p>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;">Address: <br/>  </div><?php echo $result["address"]; ?></p>
    <p class="card-text"> <div style="font-style: italic; font-weight:bold;">Contact Number: <br/> </div> <?php echo $result["contact_1"]; echo" | "; echo $result["contact_2"]; ?></p>
  </div>
</div>
<br/> 
 
<?php }?>
</div>
<?php require_once "includes-mysite/footer.php"; ?>
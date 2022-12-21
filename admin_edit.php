<?php 
$title = "Edit Record";
require_once "includes-mysite/header.php"; 
require_once "includes-mysite/authen_check.php";
require_once "db/conn_mysite.php";  

$results = $crud->getGender();
if(!isset($_GET["id"])){
    echo "<br/>  <br/> ";
    include "includes-mysite/unsuccessfull.php";
    header("Location: admin_view_records.php");
  } else{
    $id= $_GET["id"];
$students = $crud->getStudentDetails($id);
  
?>
<br/>  <br/> 
    <h1 class="text-center">Edit Students Record</h1>
    <br/>  <br/> 
    <div class="little-levites-logo-img"> 
<a href="index.php"><img src="img/Little Levites.png" width="550px" height="300px" ></a>
</div>
    <br/> <br/>
<h1 style="text-align: center;"> Sign Up</h1>
<h4 style="text-align: center;">Please fill in the form below accurately</h4>
<br/><br/><br/>

<form method="post" action="admin_edit_post.php">

<input type="hidden" name= "id" value="<?php echo $students["student_id"]?>"/>
<div class="row">
<label class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-5">
      <input required type="text" class="form-control" id="FirstName" 
      name="FirstName" placeholder="First name" value="<?php echo $students["fname"]?>">
    </div>
    <div class="col-sm-5">
      <input required type="text" class="form-control" id="LastName" 
      name="LastName" placeholder="Last name" value="<?php echo $students["lname"]?>">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
    <select  class="form-control" value="<?php echo $students["name"]?>" 
    id="gender" name="gender">
    <?php 
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r["gender_id"] ?> "
          <?php if($r["gender_id"] == $students["gender_id"]) echo 'selected'?>>
          <?php echo $r["name"] ?> </option>
        <?php } ?>
    </select>
  </div>
  </div>
<br/>
<div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
    <input required type="number" class="form-control" value="<?php echo $students["age"]?>" 
    id="age" name="age">
  </div>
  </div>
  <br/> 
  <div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input required type="password" class="form-control" value="<?php echo $students["password"]?>" 
      id="pass1" name="pass1">
    </div>
  </div>
<br/>
<div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input required type="password" class="form-control" value="<?php echo $students["confirm_password"]?>" 
      id="pass2" name="pass2">
    </div>
  </div>
<br/>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address </label>
    <div class="col-sm-10">
      <input required type="email" class="form-control" value="<?php echo $students["email"]?>" 
      id="inputEmail3" name="inputEmail3" placeholder="Email">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" value="<?php echo $students["address"]?>" 
      id="home_address" name="home_address" placeholder="Address">
    </div>
  </div>
  <br/>
  <div class="row">
<label class="col-sm-2 col-form-label">Contact Number</label>
    <div class="col-sm-5">
      <input required type="text" class="form-control" value="<?php echo $students["contact_1"]?>" 
       id="tel1" name="tel1" placeholder="Contact #1">
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" value="<?php echo $students["contact_2"]?>" 
      id="tel2" name="tel2" placeholder="Contact #2">
    </div>
  </div>
  <br/>
  <a href="admin_view_records.php" class="btn btn-default" > Back to List </a>
  <button type="submit" name="submit" class="btn btn-success" >Save Changes</button>
</form>
<?php }?>
<br/><br/><br/><br/><br/>
<?php require_once "includes-mysite/footer.php"; ?>
<?php 
$title = "User Profile";
require_once "includes-mysite/header.php"; 

require_once "db/conn_mysite.php"; 
if(isset($_POST["submit"])){
    
    $FirstName= $_POST["FirstName"];
    $LastName= $_POST["LastName"];
    $gender= $_POST["gender"];
    $age= $_POST["age"];
    $inputEmail3= $_POST["inputEmail3"];
    $home_address= $_POST["home_address"];
    $tel1= $_POST["tel1"];
    $tel2= $_POST["tel2"];
   

    $orig_file = $_FILES["avatar_pic"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar_pic"]["name"], PATHINFO_EXTENSION);
        $target_dir = "uploads/";
        $avatar_pic = "$target_dir$tel1.$ext";
        move_uploaded_file($orig_file,$avatar_pic);

    $isSucess = $crud->insertStudents($FirstName, $LastName, $gender, $age,
    $inputEmail3, $home_address, $tel1, $tel2, $avatar_pic);
    
    $genderName = $crud->getGenderById($gender);
    if($isSucess){
      include "includes-mysite/successfull.php";
    } else{
      include "includes-mysite/unsuccessfull.php";
    }
  }
  ?> 
  <br/>
  
  <img src="<?php echo $avatar_pic; ?>" 
  style="display: block; margin-left: auto; margin-right: auto; width: 20%; height: 20% " alt="Profile Picture"/>
  <div class="center-card"> 
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST["FirstName"]; echo" "; echo $_POST["LastName"]; ?></h5>
    <p class="card-text">Gender:  <?php echo $genderName["name"]; ?></p>
    <p class="card-text">Age: <?php echo $_POST["age"]; ?></p>
    <p class="card-text">Email Address: <br/> <?php echo $_POST["inputEmail3"]; ?></p>
    <p class="card-text">Contact Number:<br/> <?php echo $_POST["tel1"]; echo" | "; echo $_POST["tel2"]; ?></p>
  </div>
</div>
  </div>
<br/><br/>
<?php require_once "includes-mysite/footer.php"; ?>
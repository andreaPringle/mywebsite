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
    $avatar_pic= $_POST["avatar_pic"];

    $orig_file = $_FILES["avatar_pic"];["tmp_name"];
        $ext = pathinfo($_FILES["avatar_pic"]["name"], PATHINFO_EXTENSION);
        $target_dir = "uploads/";
        $destination = "$target_dir$tel1.$ext";
        move_uploaded_file($orig_file,$destination);

    $isSucess = $crud->insertStudents($FirstName, $LastName, $gender, $age,
    $inputEmail3, $home_address, $tel1, $tel2, $destination);
    
    $genderName = $crud->getGenderById($gender);
    if($isSucess){
      include "includes-mysite/successfull.php";
    } else{
      include "includes-mysite/unsuccessfull.php";
    }
  }
  ?> 
  <br/>
  
  <img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />

<br/><br/>
<?php require_once "includes-mysite/footer.php"; ?>
<?php 
$title = "Response";
require_once "includes-mysite/header.php"; 

require_once "db/conn_mysite.php"; 
if(isset($_POST["submit"])){

    $FirstName= $_POST["FirstName"];
    $LastName= $_POST["LastName"];
    $gender= $_POST["gender"];
    $age= $_POST["age"];
    $pass1= $_POST["pass1"];
    $pass2= $_POST["pass2"];
    $inputEmail3= $_POST["inputEmail3"];
    $home_address= $_POST["home_address"];
    $tel1= $_POST["tel1"];
    $tel2= $_POST["tel2"];

    


    $isSucess = $crud->insertStudents($FirstName, $LastName, $gender, $age, $pass1, $pass2, $inputEmail3, $home_address, $tel1, $tel2,);
  
    if($isSucess){
      include "includes-mysite/successfull.php";
    } else{
      include "includes-mysite/unsuccessfull.php";
    }
  }
  ?> 
  <br/>

<?php require_once "includes-mysite/footer.php"; ?>
<?php 
require_once "includes-mysite/authen_check.php";
require_once "db/conn_mysite.php"; 

//gets values from post operation
if(isset($_POST["submit"])){
     //extracts values from $_POST array
    $id = $_POST["id"];
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

    //call crud function
    $result = $crud->editStudents($id, $FirstName, $LastName, $gender, $age, $pass1, $pass2, $inputEmail3, $home_address, $tel1, $tel2);
  
    //redirect to index page
    if($result){
      header("Location: admin_view_records.php");
    } else{
      include "includes-mysite/unsuccessfull.php";
    }
  }
    else{
      include "includes-mysite/unsuccessfull.php";
  }
?>


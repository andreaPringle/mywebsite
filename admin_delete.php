<?php 
require_once "db/conn_mysite.php"; 

if(!$_GET["id"]){
    include "includes-mysite/unsuccessfull.php";
    header("Location: admin_view_records.php");
} else{
    $id = $_GET["id"];
    $result= $crud->deleteStudent($id);
    if($result){
        header("Location: admin_view_records.php");
      } else{
        include "includes-mysite/unsuccessfull.php";
      }
}
?>
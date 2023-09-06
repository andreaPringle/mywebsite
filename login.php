<?php 
$title = "Login";
require_once "includes-mysite/header.php"; 
require_once "db/conn_mysite.php";
 
//If data was submitted via a form POST request, then...
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username = strtolower(trim($_POST["username"]));
  $password = $_POST["pass"];
  $new_password = md5($password.$username);

  $result = $user1->getUser($username,$new_password);
  if(!$result){
      echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
  }else{
      $_SESSION["username"] = $username;
      $_SESSION["userid"] = $result["id"];
      header("Location: admin_view_records.php");
  }

}

?>

<br/><br/>
<h1 class="text-center"><?php echo $title ?> </h1>
<br/>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username </label>
    <div class="col-sm-10">
      <input  type="text" class="form-control"  id="username"name="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
    </div>
  </div>
  <br/>
<div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="pass" id="pass">
    </div>
  </div>
  <br/>
  <button type="submit" name="submit" class="btn btn-primary w-100" >Submit</button>
  
</form>


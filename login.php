<?php 
$title = "Login";
require_once "includes-mysite/header.php"; 
require_once "db/conn_mysite.php"; 
?>

<br/><br/>
<h1 style="text-align: center;"> Login</h1>
<br/>
<form>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address </label>
    <div class="col-sm-10">
      <input required type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <br/>
<div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input required type="password" class="form-control" id="pass">
    </div>
  </div>
  <br/>
  <button type="submit" name="submit" class="btn btn-primary w-100" >Submit</button>
</form>
<?php require_once "includes-mysite/footer.php"; ?>

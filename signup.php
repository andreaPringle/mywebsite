<?php 
$title = "Sign Up";
require_once "includes/header.php"; 
?>

<?php require_once "includes/footer.php"; ?>
<!--A registration form for subscribers. Form should contain
- Data collection for name, email address, gender, address, profile picture.
- Validate that the name and email address are added | email should be valid format
- Use a default profile picture if no profile picture is uploaded by the user.
- A check to ensure that the same email is not already registered.
- An action page thanking them for submitting their information which also triggers an email to
the registered user. -->
<br/>
<h1 style="text-align: center;"> Sign Up</h1>
<h4 style="text-align: center;">Please fill the form below accurately</h4>
<br/><br/><br/><br/>
<div class="form_styled">
<form>
<div class="row">
<label class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-5">
      <input required type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-sm-5">
      <input required type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <br/>
  <div class="row">
            <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-5">
            <div class="radio-inline">
                <input type="radio" name="gridRadios1" id="checkrads_11">
                <label for="checkrads_11">Male</label>
            </div>
            </div>
            <div class="col-sm-5">
            <div class="radio-inline">
                <input type="radio" name="gridRadios1" id="checkrads_12" checked>
                <label for="checkrads_12">Female</label>
            </div>
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
<div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input required type="password" class="form-control" id="pass">
    </div>
  </div>
<br/>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address </label>
    <div class="col-sm-10">
      <input required type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="address" placeholder="Address">
    </div>
  </div>
  <br/>
  <div class="row">
<label class="col-sm-2 col-form-label">Contact Number</label>
    <div class="col-sm-5">
      <input required type="text" class="form-control" placeholder="Contact #1">
    </div>
    <div class="col-sm-5">
      <input required type="text" class="form-control" placeholder="Contact #2">
    </div>
  </div>
  <br/>
  <button type="submit" name="submit" class="btn btn-primary w-100" >Submit</button>
  <br/><br/><br/>
</form>
</div>

<?php 
$title = "Sign Up";
require_once "db/conn_mysite.php"; 

$results = $crud->getGender();
?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Levites</title>
    <link rel="stylesheet" href="cascading-style-sheets/mysitestyle.css" >
    <link rel="icon" type="image/x-icon" href="img/Little Levites.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div  class = "nav-contain">
<a style="font-style: italic; font-weight:bolder;" class="split-3" href="index.php" >Instructors </a> 
<a style="font-style: italic; font-weight:bolder;" class="split-3"  href="index.php"> Location</a> &nbsp;
<a style="font-style: italic; font-weight:bolder;"  class="split-3"  href="index.php" >Mission & Vision</a> &nbsp;
<a style="font-style: italic; font-weight:bolder;" class="split-3" href="index.php" >About Us</a> &nbsp;      
  
</div>

</head>
<!--A registration form for subscribers. Form should contain
- Data collection for name, email address, gender, address, profile picture.
- Validate that the name and email address are added | email should be valid format
- Use a default profile picture if no profile picture is uploaded by the user.
- A check to ensure that the same email is not already registered.
- An action page thanking them for submitting their information which also triggers an email to
the registered user. -->
<div class="little-levites-logo-img"> 
<a href="index.php"><img src="img/Little Levites.png" width="550px" height="300px" ></a>
</div>
    <br/> <br/>
<h1 style="text-align: center;"> Sign Up</h1>
<h4 style="text-align: center;">Please fill in the form below accurately</h4>
<br/><br/><br/>
<div class="form_styled">

<form method="post" action="little-levite_user_profle.php" enctype="multipart/form-data">
<div class="row">
<label class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-5">
      <input required type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First name">
    </div>
    <div class="col-sm-5">
      <input required type="text" class="form-control" id="LastName" name="LastName" placeholder="Last name">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
    <select class="form-control" id="gender" name="gender">
    <?php 
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r["gender_id"] ?> "><?php echo $r["name"] ?> </option>
        <?php } ?>
    </select>
  </div>
  </div>
<br/>
<div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
    <input required type="number" class="form-control" id="age" name="age">
  </div>
  </div>
<br/>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address </label>
    <div class="col-sm-10">
      <input required type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Email">
    </div>
  </div>
  <br/>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="home_address" name="home_address" placeholder="Address">
    </div>
  </div>
  <br/>
  <div class="row">
<label class="col-sm-2 col-form-label">Contact Number</label>
    <div class="col-sm-5">
      <input required type="text" class="form-control" id="tel1" name="tel1" placeholder="Contact #1">
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tel2" name="tel2" placeholder="Contact #2">
    </div>
  </div>
  <br/>
  
  <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar_pic" name="avatar_pic" >
            <label class="custom-file-label" for="avatar_pic">Choose File</label>
            <small id="avatar_pic" class="form-text text-danger"> &nbsp;(Optional)</small>
            </div>
       
        <br/>
  <button type="submit" name="submit" class="btn btn-primary w-100" >Submit</button>
  <br/><br/><br/>
  <p style="text-align: center; font-style:italic; font-size:larger;">Psalm 33:3 KJV <br/>
  Sing unto him a new song; play skilfully with a loud noise.</p>
</form>
<br/><br/><br/>
</div>
<?php require_once "includes-mysite/footer.php"; ?>
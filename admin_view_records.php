<?php 
$title = "List of Students";
require_once "includes-mysite/header.php"; 
require_once "db/conn_mysite.php"; 

$results = $crud->getStudents();
?>
<div class="little-levites-logo-img"> 
<a href="index.php"><img src="img/Little Levites.png" width="550px" height="300px" ></a>
</div>
<br/><br/>  <br/> 
<h1 class="text-center">Student Records</h1>
    <br/>  <br/>  
    <table class="table">
        <tr style="text-align: center;">
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th> 
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact# 1</th>
            <th>Contact# 2</th>
            <th>Actions</th>
        </tr>
        <?php 
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr >
                <td style="text-align: center;" > <?php echo $r["student_id"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["fname"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["lname"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["name"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["age"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["email"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["address"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["contact_1"] ?> </td>
                <td style="text-align: center;"> <?php echo $r["contact_2"] ?> </td>
                <td style="text-align: center;"><a href="admin_view.php?id=<?php echo $r["student_id"] ?> " class= "btn btn-primary">View</a>
                    <a href="admin_edit.php?id=<?php echo $r["student_id"] ?> " class= "btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?')" 
                    href="admin_delete.php?id=<?php echo $r["student_id"] ?> " class= "btn btn-danger">Delete</a>
            </td>
        </tr>
       <?php }?>
       </table> 
    <br/> <br/>  
<?php require_once "includes-mysite/footer.php"; ?>
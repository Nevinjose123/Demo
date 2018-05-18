<?php
include "header.php";

if(isset($_POST['sub']))
{
	$insertArray = array();
	$insertArray['name']=$_POST['name'];
	$insertArray['age']=$_POST['age'];
	$insertArray['gender']=$_POST['gen'];
	$insertArray['email']=$_POST['email'];
	$insertArray['phno']=$_POST['phno'];
	$insertArray['photoname']=$_FILES['file']['name'];
	$insertArray['photosize']=$_FILES['file']['size'];
	$insertArray['n']=$_FILES['file']['tmp_name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"public\user/".$_FILES['file']['name']);
	$insertArray['pass']=$_POST['pass'];
	
	$insert=$agencyObj->insertUser($insertArray,"signup");
	if(isset($insert))
	{
		header("location:login.php");
	}
	else
	{
		echo "Something Went Wrong";
	}
}
?>

                <!-- /.row -->
                <h2 align="center">Sign Up To Get Cool Stuffs</h2><br>
<br>
<br>

                <!-- /.row --><center>
                
<form method="post" enctype="multipart/form-data">
<center>
  <div class="form-group">
    <label for="name" class="col-md-7">Name:</label>
    <input type="text"  class="col-md-2" name="name"><br />

  </div>
  <div class="form-group">
    <label for="pwd" class="col-md-7">Age:</label>
    <input type="text" class="col-md-2" name="age"><br />
  </div>
  <div class="gender">
  <label class="col-md-7">Gender:</label>
    <label class="col-md-1">Male<input type="radio" name="gen" value="Male" class="col-md-2"></label><label class="col-md-1">Female<input type="radio" name="gen" value="Female" class="col-md-2" </label><br />

  </div><br />
<br />

  <div class="form-group">
    <label for="email" class="col-md-7">Email:</label>
    <input type='email' name="email" class="col-md-2"><br />

  </div>
  <div class="form-group">
    <label for="phno" class="col-md-7">Phone:</label>
    <input type="text" name="phno" class="col-md-2"><br />
  </div>
  <div class="form-group">
    <label for="Pic" class="col-md-7">Photo:</label>
    <input type="file" class="col-md-2" name="file"><br />

  </div>
  <div class="form-group">
    <label for="password" class="col-md-7">Password:</label>
    <input type="password" class="col-md-2" name="pass"><br />

  </div>
  <div id="sub">
  <input type="submit" name="sub" value="SUBMIT" id="sub"/>
  </div>
</form>                
            
               </center>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <!-- /.div -->
                
                
                <!-- /.row -->
                    <!-- /.col -->
                    <!-- /.col -->
                 
                 
                 
                 
                 
                 
                 
                <!-- /.row -->
                
                <!-- /.row -->
            <?php
			include "footer.php";
			?>
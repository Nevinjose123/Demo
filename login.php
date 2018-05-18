<?php
include "header.php";
if(isset($_POST['sub']))
{
	$username = $_POST['name'];
	$Password = $_POST['pass'];
	
	$res = $adminObj->isLogginDetailsCurrect($username,$password);
	
	if($res['code']=1)
	{
		header("location:welcome.php");
	}
	else
	{
		$res['msg'];
	} 
	
}
?>
                <!-- /.row -->
                <h2 align="center">Log In to Your  Account</h2><br>
<br>
<br>

                <!-- /.row --><center>
                <form method="post">
                <div class="form-group" >
                <label>Username:</label>
                <input type="text" name="name" />
                </div>
                <div class="form-group">
                <label>Password:</label>
                <input type="password" name="pass" />
                </div>
                <div class="form-group">
                <input type="submit" name="sub" value="LogIn">
                <span style="color:#F00">
                <?php
				if(isset($res['msg']))
				{
					echo $res['msg'];
				}
				?>
                </span>
                </div>
                </form></center>
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
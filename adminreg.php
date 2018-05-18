<?php
$conn=mysqli_connect("localhost","root","","shopping");
if(isset($_POST['sub']))
{
	$first =$_POST['name'];
	$last =$_POST['last'];
	$email =$_POST['email'];
	$user =$_POST['user'];
	$pass =$_POST['pass'];
	$photoname =$_FILES['file']['name'];
	$photosize =$_FILES['file']['size'];
	$n=$_FILES['file']['tmp_name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"admin\public/".$_FILES['file']['name']);
	
	$sql=mysqli_query($conn,"insert into admin (first,last,email,username,pass,photoname,photosize,n) values('$first','$last','$email','$user','$pass','$photoname','$photosize','$n')");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table align="center" border="1">
<tr>
<td>First name</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Last name</td>
<td><input type="text" name="last" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="user" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"  /></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="sub" value="SUBMIT" /></td>
</tr>
</table>
</form>
</body>
</html>
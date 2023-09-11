<?php
include("setting.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:ahome.php");
}
$e=mysqli_real_escape_string($al, $_POST['email']);
$p=mysqli_real_escape_string ($al, $_POST['password']);
$p=sha1( $_POST['password']);
if($_POST['email']!=NULL && $_POST['password']!=NULL)
{
	$sql=mysqli_query($al, "SELECT * FROM users WHERE email='$e' AND password='$p'");
	
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$e;
		header("location:ahome.php");
	}
	else
	{
		$info="Incorrect Email or Password";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Food &amp;Management System</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
<div align="center">
<span class="headingMain">Online Food &amp; Management System</span>
</div>
<br />
</div>
<br />
<div align="center">
<br />
<br />
<h2><span class="subHead" >Admin Login</span><br /></h2>
<br />

<form method="post" action="">
<table border="0" align="center" cellpadding="5" cellspacing="5" class="design" style="background:lightgray;">
<tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
<tr><td class="labels">Email : </td><td><input type="email" size="25" name="email" class="fields" placeholder="Enter Email ID" required="required" autocomplete="off" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" size="25" name="password" class="fields" placeholder="Enter Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="index.php" class="link btn btn-success">BACK</a>
</div>

</body>

<br />
<br />


</html>
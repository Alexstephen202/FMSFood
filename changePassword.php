<?php
include("setting.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al, "SELECT * FROM customers WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$pass=$b['password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['old']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	//ASL Do Nothing
}
else
{
if($old!=$pass)
{
	$info="Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		$info="New Password Didn't Matched";
	}
	else
	{
		mysqli_query($al, "UPDATE admin SET password='$p2' WHERE aid='$aid'");
		$info="Successfully Changed your Password";
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Food &amp; Management System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.ashu
{
	border:1px solid #333;
	border-collapse:collapse;
		color:#FFF;
		text-shadow:1px 1px 1px #000000; 
}

</style>
</head>

<body>
<div id="header">
  <div align="center"> <span class="headingMain">Online Food &amp; Management System</span> </div>
</div>
<br />
<br />

<div align="center">

 <span class="subHead" style="color:pink;">Change Password<br /></span><br />
<form method="post" action="">
<table cellpadding="3" cellspacing="3" class="design" align="center" style="background:lightgray;">
<tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
<tr><td class="labels">Old Password :</td><td><input type="password" name="old" size="25" class="fields" placeholder="Enter Old Password" required="required" /></td></tr>
<tr><td class="labels">New Password :</td><td><input type="password" name="p1" size="25" class="fields" placeholder="Enter New Password" required="required"  /></td></tr>
<tr><td class="labels">Re-Type Password :</td><td><input type="password" name="p2" size="25"  class="fields" placeholder="Re-Type New Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Change Password" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="home.php" class="btn btn-primary">HOME</a>
</div>
</body>

</html>
<?Php
session_start();
if(count($_POST)>0)
{
include('setting.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["email"];
    $password=$_POST["password"];
	
    $sql="select * from users where email ='".$username."' AND password='".$password."'";

    $result=mysqli_query($al,$sql);

    $row=mysqli_fetch_array($result);
	
    if($row["usertype"]=="user")
    {
       header("location:home.php");
    }
    elseif($row["usertype"]=="admin") {
        header("location:ahome.php");
    }
    else
    {
        print_r("incorrect");
    }
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
</div>
<br />
<br />
<div align="center">
<span class="subHead" style="color:pink;">User Login</span><br />
<br />

<form method="post" action="">
<table border="0" align="center" cellpadding="5" cellspacing="5" class="design" style="background:lightgray;">
<tr><td colspan="2" class="info" align="center"></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" size="25" name="email" class="fields" placeholder="Enter Email ID" required="required" autocomplete="off" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" size="25" name="password" class="fields" placeholder="Enter Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Login" class="fields" /></td></tr>
</table>
</form>
<br />
<br />

<a href="newReg.php" class="link btn btn-primary">New User Click Here</a>
<br /><br>
<a href="admin.php" class="link btn btn-primary">Admin Login</a>


</div>
<div id="footer">
<div align="center">
<span class="footerMain"></span>
</div>
</body>

<br />
<br />
<br />


</html>
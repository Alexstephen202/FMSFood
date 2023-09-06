<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:admin.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($al, "SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Food &amp;Management System</title>
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
  <div align="center"> <span class="headingMain">Online Food &amp; management System</span> </div>
</div>
<br />
<br />

<div align="center">

 <span class="subHead" style="color:pink;">Customers Booking<br /></span><br />

<table border="0" cellpadding="5" cellspacing="5" class="design ashu" style="background-color:DodgerBlue;">
<tr class="labels ashu"><th class="ashu">Sr.No.</th><th class="ashu">E-Mail</th><th class="ashu">Package Name</th>
<th class="ashu">Duration</th>
<th class="ashu">Total Amount</th>
<th class="ashu">Members</th>
<th class="ashu">Date</th>
<th class="ashu">Status</th>book.php
<th class="ashu">Delete</th></tr>
<?php
$u=1;
$x=mysqli_query($al, "SELECT * FROM bookings");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels">
<td class="ashu"><?php echo $u;$u++;?></td>
<td class="ashu"><?php echo $y['email'];?></td>
<td class="ashu"><?php echo $y['package'];?></td>
<td class="ashu"><?php echo $y['journey'];?></td>
<td class="ashu"><?php echo "INR ".$y['amount'];?></td>
<td class="ashu"><?php echo $y['members'];?></td>
<td class="ashu"><?php echo $y['date'];?></td>
<?php if($y['status']==0)
{
	
?> <td class="ashu"><a href="app.php?a=<?php echo $y['id'];?>" class="link">Approve</a></td>
<?php } else { ?>
<td class="ashu">Approved</td>
<?php }
?>
<td class="ashu"><a href="deleteH.php?dd=<?php echo $y['id'];?>" class="link">Delete</a></td>
</tr>
<?php } ?>
</table>
<br />
<br />
<a href="ahome.php" class="link">HOME</a>
</div>
</div>

<div id="footer">
<div align="center">
<span class="footerMain"></span>
</div>
</body>

</html>
<html>
<body>

<table border=1 width="100%" height="100%" bgcolor="lightgreen">
<tr>
<td>
<?php
session_start();
if(isset($_SESSION['user']))
{
	echo "<font size='8'>".$_SESSION['user']."</font>";
	echo "<a href='logout.php'><b><font size=6>LogOut</font></b></a>";
}else{
	header('Location:login.php');
}
?>


</td>
</tr>
<?php include('menu.php') ?>
<tr height="50%">
	<td align='center'><img src='images/1.jpg' width="70%" height="100%"></td>
	<td><img src='images/2.jpg' width="30%" height="90%"></td>
	
</tr>
<tr height="50%">
	<td align='center'><img src='images/5.jpg' width="70%" height="70%"></td>
	<td><img src='images/4.jpg' width="30%" height="70%"></td>
	
</tr>
<tr height="50%">
	<td align='center'><img src='images/6.jpg' width="70%" height="100%"></td>
	<td><img src='images/7.jpg' width="30%" height="100%"></td>
	
</tr>
</border>
</body>
</html>
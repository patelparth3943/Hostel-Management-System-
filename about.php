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
<tr height="70%">
	<td align='center'><img src='images/about1.jpg' width='90%' height='100%'></td>
		
</tr>
<tr height="70%">
	
	<td align='center'><img src='images/about2.jpg' width='90%' height='100%'></td>	
</tr>
</border>
</body>
</html>
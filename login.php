<html>
<body>
<form action="check.php" method="post"> 
<table border=1 width="100%" height="100%" bgcolor="yellow">
<?php include('menu.php') ?>

<tr height="70%">
	<td>
	<table width="20%" bgcolor="009cc" align="center">
<tr>
<td colspan=2><center><font size=6><b>Login Here</b></font></center></td>
</tr>

<tr>
<td><font size=5><b>Username:</b></font></td>
<td><input type="text" size=30 name="userid"></td>
</tr>

<tr>
<td><b><font size=5>Password:</font></b></td>
<td><input type="Password" size=30 name="pwd"></td>
</tr>

<tr>

<td><input type="submit" value="Login"></td>
<td ><input type="Reset">
<?php
if(isset($_GET['a']))
{
	echo "<font color='red'>Password incorrect</font>";
}
?>


</td>
<tr>
<td colspan=2><a href='registration.php'><font size=5>New User Register Here</font></a></td>
</tr>
</tr>
	</td>
</tr>
</table>
</form>

</border>
</body>
</html>
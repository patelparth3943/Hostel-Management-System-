
<html>
<body>
<form action="submit.php" method="post"> 
<table border=3 width="100%" height="100%" bgcolor="lightgreen">
<?php include('menu.php') ?>
<tr height="70%">
	<td>
	<table width="30%" height="60%" bgcolor="0099cc" align="center">
<tr>
<td colspan=2><center><font size=6><b>Registration Form</b></font></center></td>
</tr>

<tr>
<td align="right">Name:</td>
<td><input type="text" size=25 name="name"></td>
</tr>

<tr>
<td align="right">Gender:</td>
<td><input type="radio" name="g" value="Male" checked>Male<input type="radio" name="g" value="Female">Female</td>
</tr>

<tr>
<td align="right">Date Of Birth:</td>
<td><input type="date" size=25 name="dob"></td>
</tr>
<tr>
<td align="right">Email:</td>
<td><input type="email" size=25 name="email"></td>
</tr>
<tr>
<td align="right">Contact:</td>
<td><input type="text" size=25 name="contact"></td>
</tr>
<tr>
<td align="right">Login Id:</td>
<td><input type="text" size=25 name="id"></td>
</tr>
<tr>
<td align="right">Password:</td>
<td><input type="password" size=25 name="pass"></td>
</tr>
<tr>
<td align="right">Confirm Password:</td>
<td><input type="password" size=25 name="pass2"></td>
</tr>
<tr>
<td><input type="submit" value="Register"></td>
<td ><input type="Reset"></td>
</tr>

</table>
	</form>

</body>
</html>
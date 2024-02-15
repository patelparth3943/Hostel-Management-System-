<html>
<body>

<form action="book.php" method="post">
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
	<td>
	<table width="40%" height="80%" bgcolor="0099CC" align="center" border="1">
<tr>
<td colspan=2><center><font size=6><b>Room Booking Form</b></font></center></td>
</tr>

<tr>
<td align="right"><b>Student Name:</b></td>
<td><input type="text" size=25 name="name"></td>
</tr>

<tr>
<td align="right"><b>Gender:</b></td>
<td><input type="radio" name="g" value="Male" checked>Male<input type="radio" name="g" value="Female">Female</td>
</tr>

<tr>
<td align="right"><b>Date Of Birth</b></td>
<td><input type="date" size=25 name="dob"></td>
</tr>
<tr>
<td align="right"><b>College Name</b></td>
<td>
<select name="clg_name">
<option value="B S Patel Polytechnic">B S Patel Polytechnic</option>
<option value="U V Patel College of Engineering">U V Patel College of Engineering</option>
<option value="V M Patel College">V M Patel College</option>
<option value="Institute of Technology">Institute of Technology</option>
</select>



</td>
</tr>
<tr>
<td align="right"><b>Department</b></td>
<td>

<select name="dept_name">
<option value="Computer">Computer</option>
<option value="Information Technology">Information Technology</option>
<option value="Civil">Civil</option>
<option value="Mechanical">Mechanical</option>
<option value="Electrical">Electrical</option>
</select>


</td>
</tr>
<tr>
<td align="right"><b>semester</b></td>
<td>
<select name="sem_number">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>



</td>
</tr>
<tr>
<td align="right"><b>Blood Group</b></td>
<td>
<select name="bg">
<option value="A">A</option>
<option value="A+">A+</option>
<option value="B">B</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>




</td>
</tr>
<tr>
<td align="right"><b>Address</b></td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td align="right"><b>Email</b></td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td align="right"><b>Student Contact</b></td>
<td><input type="text" name="contact1"></td>
</tr>
<tr>
<td align="right"><b>Father Contact</b></td>
<td><input type="text" name="contact2"></td>
</tr>
<tr>
<td align="right"><b>Home Contact</b></td>
<td><input type="text" name="contact3"></td>
</tr>
<tr>
<td align="right"><b>Hostel Name</b></td>
<td>

<select name="hostel_name">
<option value="old uma">Old Uma</option>
<option value="new uma">New Uma</option>
<option value="panch gam">Panch Gam</option>
</select>


</td>
</tr>
<tr>
<td align="right"><b>Room number</b></td>
<td><input type="text" name="room_number"></td>
</tr>
<tr>
<td align="right"><b>Type of Payment</b></td>
<td>

<select name="payment_type">
<option value="offline">Offline</option>

</select>


</td>
</tr>
<tr>
<td align="right"><input type="submit" value="Book"></td>
<td ><input type="Reset"></td>
</tr>

</table>
	
	</form>
	</td>
		
</tr>

</border>
</body>
</html>
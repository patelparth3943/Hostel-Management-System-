<html>
<body>

<table border=1 width="100%" height="100%" bgcolor="lightblue">
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
	<td align='center'><img src='images/main.jpg' width='100%' height='100%'></td>
		
</tr>
 <td align='center'>  <font size='8'><font color="red"> GANPAT  UNIVERSITY  HOSTEL</font> </font> </td> 
<tr><td><p>
<font size='5'><b>=> The campus consists of Several well built hostel blocks,both for girls and boys with capacity of 3000 students.
 Each hostel consists of a separate mess, administrative office, warden quarter. In addition to well furnished rooms, the hostel 
 is complete with facilities like free hi speed Wi-Fi connection, gymnasium, medical center and other amenities for shopping, 
 sports, recreation and entertainment. A shopping complex, consisting of about 20 shops, is constructed in the vicinity of the
 hostel blocks and caters to the daily needs of the students like groceries, stationery, laundry and grooming.</b></font>
</p></td></tr>
<tr height="50%">
	<td align='center'><img src='images/8.png' width="80%" height="90%"></td>
	
</tr>
<tr height="50%">
	<td align='center'><img src='images/9.png' width="80%" height="90%"></td>
	
</tr>
<tr height="50%">
	<td align='center'><img src='images/10.png' width="80%" height="90%"></td>
	
</tr>

</border>



</body>
</html>
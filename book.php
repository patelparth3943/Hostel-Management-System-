<?php
$name = $_POST['name'];
$gender = $_POST['g'];
$dob = $_POST['dob'];
$college = $_POST['clg_name'];
$dept = $_POST['dept_name'];
$sem = $_POST['sem_number'];
$blood = $_POST['bg'];
$address = $_POST['address'];
$email = $_POST['email'];
$c1 = $_POST['contact1'];
$c2 = $_POST['contact2'];
$c3 = $_POST['contact3'];
$hostel_name = $_POST['hostel_name'];
$room_number = $_POST['room_number'];
$payment_type = $_POST['payment_type'];



echo $pass;
echo $pass2;

$cn=mysql_connect("localhost","root","");
if($cn)
	echo"connection successful";

mysql_select_db("hostel",$cn);

$q="insert into room_booking values('$name','$gender','$dob','$college','$dept',$sem,'$blood','$address','$email',$c1,$c2,$c3,'$hostel_name',$room_number,'$payment_type')";
if(mysql_query($q,$cn))
	header('Location:booking.php');
	//echo"record inserted successfully";
else
	echo"error";


mysql_close($cn);



?>
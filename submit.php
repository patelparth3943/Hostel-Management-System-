<?php
$name = $_POST['name'];
$gender = $_POST['g'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$id = $_POST['id'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

echo $pass;
echo $pass2;

$cn=mysql_connect("localhost","root","");
if($cn)
	//echo"connection successful";

mysql_select_db("hostel",$cn);

$q="insert into registration values('$name','$gender','$dob','$email',$contact,'$id','$pass')";
if(mysql_query($q,$cn))
	header('Location:login.php');
	//echo"record inserted successfully";
else
	//echo"error";
    header('location:registration.php');


mysql_close($cn);



?>
<?php
session_start();
	$u = $_POST['userid'];
	$p = $_POST['pwd'];
	$h = mysql_connect("localhost","root","");
	mysql_select_db("hostel",$h);
	$r = mysql_query("select * from registration",$h);
	$temp=0;
	while($a = mysql_fetch_array($r))
	{
		if($a[6]==$p)
		{
			$temp=1;
			$_SESSION['user']=$u;
			header('Location:home.php');
			//echo "login success";
			break;
		}
	}
	if($temp==0)
	{
		header('Location:login.php?a=1');
	}
	mysql_close($h);
?>
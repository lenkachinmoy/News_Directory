<?php
    session_start();
	include("connection.php");
	$uid=$_POST["uname"];
	$pword=$_POST["psw"];
	$_SESSION["uname"]=$uid;
	$_SESSION["psw"]=$pword;
	$sql="select administrator,Password from admin where administrator='$uid' && Password='$pword'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result))
		header("location:admin_homepage.php");
	else
		header("location:home.php");
	?>
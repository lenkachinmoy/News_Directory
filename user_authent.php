<?php
    session_start();
	include("connection.php");
	$uid=$_POST["uname"];
	$pword=$_POST["psw"];
	$_SESSION["uname"]=$uid;
	$_SESSION["psw"]=$pword;
	$sql="select User_Id,Password from user_registration where User_Id='$uid' && Password='$pword'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result))
		header("location:user_page.php");
	else
		header("location:home.php");
?>
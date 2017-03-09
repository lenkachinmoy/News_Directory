<?php
	session_start();
	$userid=$_POST["uid"];
	$password=$_POST["pwd"];
	//$str=MD5($password);
	$confirmpassword=$_POST["cpwd"];
	//$str1=MD5($confirmpassword);
	$name=$_POST["name"];
	$allowedExts=array("jpeg","gif","jpg");
	$temp=explode(".",$_FILES["file"]["name"]);
	$extension=end($temp);
	if(($_FILES["file"]["size"]<20000000000) && in_array($extension, $allowedExts))
	{
		if($_FILES["file"]["error"]>0)
		{
			echo"Return Code:".$_FILES["file"]["error"]."<br>";
		}
		else
		{       
	            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
				$img="upload/".$_FILES["file"]["name"];	
		}
	}
	else
	{
		echo"Invalid Image";
	}
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$address=$_POST["address"];
	$dob=$_POST["myDate"];
	$qualification=$_POST["lastqual"];
	$gender=$_POST["gender"];
	$hobby=$_POST["hobby"];
	
	
	//database insertion
	include("connection.php");
	
	$sql="insert into user_registration
	(
	User_Id,
	Password,
	Confirm_Password,
	Name,
	Image,
	Email,
	Contact,
	Address,
	Dob,
	Last_Qualification,
	Gender,
	Hobbies
	)
	values('$userid','$password','$confirmpassword','$name','$img','$email','$contact','$address','$dob','$qualification','$gender','$hobby')";
	
	
	$result=mysql_query($sql);
	if($result)
	{
		header("location:successful_reg.php");
	}
	else
	{
		header("location:unsuccessful_reg.php");
	}
?>
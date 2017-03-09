<?php
	session_start();
	$date=$_POST["date"];
	$place=$_POST["place"];
	$category=$_POST["category"];
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
	            move_uploaded_file($_FILES["file"]["tmp_name"],"uploaded_news/".$_FILES["file"]["name"]);
				$img="uploaded_news/".$_FILES["file"]["name"];	
		}
	}
	else
	{
		echo"Invalid Image";
	}
	$news=$_POST["news"];	
	
	//database insertion
	include("connection.php");
	
	$sql="insert into admin_news
	(
	Date,
	Place,
	Category,
	Image,
	News
	)
	values('$date','$place','$category','$img','$news')";
	
	
	$result=mysql_query($sql);
	if($result)
	{
		header("location:news_successful.php");
	}
	else
	{ //header("location:home.php");
		echo die(mysql_error());
	}
?>
<?php
  session_start();
?>
<html>
<head>
<script type="text/Javascript">
  function validation()
  {
      
	   var x;
	   x=document.getElementById("date").value;
	   if(x=="")
	   {
	   	  alert("The date field cannot be left blank");
	   	  return false;
       } 
       x=document.getElementById("place").value;
       if(x=="")
       {
          alert("The place cannot be left blank");
          return false;
       }
      //Validation check for category
       if(f3.category.selectedIndex<=0)
	   {
           alert("Please select a category");
           return(false);
       }
	   //validation for image
	  var z=document.getElementById("news").value;
	  if(z=="")
	  {
	   	   alert("The news field cannot be left blank");
	   	   return false;
	   }
	   
   }
</script>
<style type="text/CSS">
#wrapper
{
  height:1000px;
  width:1000px;
  background-color:white;
}
#header
{
  height:100px;
  width:1000px;
  background-image:url("new1.jpg");
  float:left;
}
div.transbox 
{
	height:50px;
	width:500px;
  margin-left:255px;
  margin-top:25px;
  background-color:#000000;
  border: 1px solid black;
  opacity: 0.8;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
h3
{
	color:red;
	margin:0;
	text-decoration:none;
	font-size:50px;
	font-weight: bold;
	text-align:center;
}
#menu
{
  height:800px;
  width:150px;
    background-image:url("new1.jpg");
  float:left;
}
#content
{
	border:2px solid black;
  margin:0;
  height:800px;
  width:693px;
  background-color:grey;
  float:left;
}
#comment
{
	height:800px;
	width:150px;
	  background-image:url("new1.jpg");
	float:left;
}
#footer
{
  height:100px;
  width:1000px;
    background-image:url("new1.jpg");
  float:left;
}
</style>
</head>
<body>
<div id="wrapper">
<div id="header">
	<div class="transbox">
	<h3>NEWS DIRECTORY</h3>
	</div>
</div>
<div id="menu"></div>
<div id="content">
<form  name="f3"  action="add_news.php" onSubmit="return validation()" method="post" enctype="multipart/form-data">
			<table>
					<tr>
					<td>Date</td>
					<td><input type="date" name="date" id="date" value="mm-dd-yyyy">
					</td>
					</tr>
					<tr>
					<td>Place</td>
					<td><input type="text" name="place" id="place">
					</td>
					</tr>
					<tr>
                    <td>Category</td>
                    <td><Select name="category">
                    <option value="0">Select</option>
                    <option value="Sports">Sports</option>
					<option value="World">World</option>
					<option value="Business">Business</option>
					<option value="Fashiom">Fashion</option>
					<option value="Technology">Technology</option>
					<option value="Health">Health</option>
                    </Select>
                    </td>
                    </tr>
					<tr>
					<td>Image</td>
					<td><input type="file" name="file" id="file">
					</td>
					</tr>
					<tr>
					<td>News</td>
					<td><textarea rows="25" cols="70" name="news" id="news" >
					</textarea></td></tr>
					<tr>
					<td>
                    <input type="Submit"value="register">
                    <input type="reset"value="cancel">
                    </td>
                    </tr>
			</table>
			</form>
			<form action="admin_logout.php">
			<input type="submit" value="logout">
			</form>
</div>
<div id="comment"></div>
<div id="footer"></div>
</body>
</html>
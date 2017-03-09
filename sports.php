<?php
 session_start();
 include("connection.php");
 $sql="select * from admin_news where Category='sports'";
 ?>
<html>
<head>
<link rel="stylesheet" href="css/layout1.css">
<link rel="stylesheet" href="css/animate.min.css">
<script type="text/javascript">
function send(str) {
//catch the id and send it to another page by http request
window.location.href="news.php?item=" +str;
}
</script>
<style type="text/CSS">
#wrapper
{
  height:1000px;
  width:1000px;
  background-color:black;
}
#header
{
  height:150px;
  width:1000px;
  background-image:url("new1.jpg");
  float:left;
}
div.sub_header
{

	height:200px;
	width:1000px;
	color:pink;
}
div.sub_header ul 
{
	height:50px;
	width:1000px;
    list-style-type:none;
    margin:0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

div.sub_header li {
    float: left;
    border-right:1px solid #bbb;
}


div.sub_header li a 
{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 30.6px;
    text-decoration: none;
}

div.sub_header li a:hover
{
    background-color:#111;
}

div.transbox 
{
	height:100px;
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
	margin-top:;
	text-decoration:none;
	font-size:50px;
	font-weight: bold;
	text-align:center;
}
#menu
{
	background-image:url("new1.jpg");
	margin:0;
	height:800px;
	width:150px;
	background-color:grey;
	float:left;
}
#menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 150px;
    background-color: #f1f1f1;
}

#menu li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}
#menu li a:hover {
    background-color: #555;
    color: white;
}
#content
{
  border:3px solid black;
  border-radius:100px;
  margin:0;
  height:800px;
  width:693px;
  background-color:#888;
  float:left;
}
#comment
{
	background-image:url("new1.jpg");
	height:800px;
	width:150px;
	background-color:grey;
	float:left;
}
#footer
{
	background-image:url("new1.jpg");
	margin-top:0px;
	height:100px;
	width:1000px;
	background-color:white;
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
<div class="sub_header">
	<ul>
			<li><a href="user_page.php">HOME</a></li>
			<li><a href="sports.php">SPORTS</a></li>
			<li><a href="world.php">WORLD</a></li>
			<li><a href="business.php">BUSINESS</a></li>
			<li><a href="fashion.php">FASHION</a></li>
			<li><a href="tech.php">TECH-CORNER</a></li>
			<li><a href="health.php">HEALTH</a></li>
			<li><a href="logout.php">LOG OUT</a></li>
	</ul>
</div>
<div id="menu"></div>
<div id="content">
 <table style="font-size:12px" class="gridtable">
 <tr>
 <th>News_Id</th>
 <th>Image</th>
 <th>Place</th>
 </tr>
   <?php 
   $result=mysql_query($sql); 
   while($row=mysql_fetch_array($result))
   {
      echo "<tr>
      <td>$row[News_Id]</td>
	  <td><img src='".$row['Image']."' height='50' width='50' onclick='send(this.id)' id='$row[0]'></td>
	  <td>$row[Place]</td>
	  </tr>";
			   }
  ?>
  </table>

</div>
<div id="comment"></div>
<div id="footer"></div>
</body>
</html>
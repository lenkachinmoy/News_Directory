<?php
  session_start();
 ?>
<html>
<head>
<link rel="stylesheet" href="css/layout1.css">
<link rel="stylesheet" href="css/animate.min.css">
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
.wrap
{
	margin-left:25px;	
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
	<div class="wrap">
  <div id="cxslide_x" class="cxslide_x">
    <div class="box">
      <ul class="list">
        <li><a href="#1"><img src="img/_pic/slide_1.jpg" width="600" height="280"></a><p></p></li>
        <li><a href="#2"><img src="img/_pic/slide_2.jpg" width="600" height="280"></a><p></p></li>
        <li><a href="#3"><img src="img/_pic/slide_3.jpg" width="600" height="280"></a><p></p></li>
        <li><a href="#4"><img src="img/_pic/slide_4.jpg" width="600" height="280"></a><p></p></li>
        <li><a href="#5"><img src="img/_pic/slide_5.jpg" width="600" height="280"></a><p></p></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div id="comment"></div>
<div id="footer"></div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cxslide.min.js"></script>
<script>
$('#cxslide_x').cxSlide({
  plus: true,
  minus: true
});

$('#cxslide_y').cxSlide({
  type: 'y'
});

$('#cxslide_fade').cxSlide({
  events: 'mouseover',
  type: 'fade',
  speed: 300
});
</script>
</body>
</html>
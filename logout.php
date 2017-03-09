<?php
   session_start();
   session_destroy();
 ?>
 <html>
<head>
<style>
#center{
    background-color: white;
    color: black;
    border: 2px solid green;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin-left:430px;
	cursor: pointer;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
#center:hover{
	background-color: green;
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	
}
div.background {
	height:500px;
	max-width:1000px;
	margin:20px auto;
  background-image: url("ss.jpg");
  	background-size: 1000px 500px;
		background-repeat: no-repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
</style>
<body>
<div class="background">
  <div class="transbox">
    <h1 align="center">THANKS FOR VISITING US</h1>
	<h2 align="center">HOPE THAT YOU FOUND IT USEFUL!!!</h2>
   </div>
   <form action="home.php" >
	<input type="Submit" id="center" value="REVISIT HOME PAGE">
	</form>
</div>
</body>
</html>
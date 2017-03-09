<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>NEWSSS DIRECTORY</title>
	<link rel="stylesheet" href="main.css"/>
	<script type="text/Javascript">
  function validation()
  {
       var RE_UID=/^(\w)+$/;
       var RE_PASS=/^(\w)+$/;
       var RE_NAME=/^[A-Za-z]+(\s)+[A-Za-z]+$/;
       var RE_CONTACTNO=/^\d{10,11}$/;
       var RE_EMAIL=/^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
	   var x;
       x=document.getElementById("uid").value;
       if(x=="")
       {
          alert("The user id cannot be left blank");
          return false;
       }
       if(!RE_UID.test(x))
       {
         alert("User id has to be alphanumeric");
         return false;
       }
       var y=document.getElementById("pwd").value;
	   if(y=="")
	   {
	         alert("The password cannot be left blank");
	         return false;
	  }
	  var z=document.getElementById("cpwd").value;
	  if(z=="")
	  {
	   	   alert("The confirm password cannot be left blank");
	   	   return false;
	   }
	   else
	   {
	   	     if((y!=z))
	   	     {
	   	       alert("Password not matching!!");
	   	        return false;
	   	    }
	   }
       x=document.getElementById("name").value;
	   if(x=="")
	   {
	   	  alert("The name cannot be left blank");
	   	  return false;
       }
       if(!RE_NAME.test(x))
	   {
	   	            alert("NAME  has to be in proper format with First Name as well as Last Name ");
	   	            return false;
       }
       x=document.getElementById("email").value;
	   if(x=="")
	   {
	   	  alert("The email field cannot be left blank");
	   	  return false;
       }
       if(!RE_EMAIL.test(x))
	   {
	   	            alert("Email should be in proper format");
	   	            return false;
       }
       x=document.getElementById("contact").value;
	   if(x=="")
	   {
	   	  alert("The contact field cannot be left blank");
	   	  return false;
       }
       if(!RE_CONTACTNO.test(x))
	   	   {
	   	            alert("The contact number must contain 10 digits ");
	   	            return false;
       }
        x=document.getElementById("address").value;
	   if(x=="")
	   {
	   	  alert("The address field cannot be left blank");
	   	  return false;
       }
	    //Validation check for date
		x=document.getElementById("myDate").value;
	   if(x=="")
	   {
	   	  alert("The date of birth field cannot be left blank");
	   	  return false;
       } 
       //Validation check for last qualification
       if(f3.lastqual.selectedIndex<=0)
	   {
           alert("Please select a valid last qualification");
           return(false);
       }

       //Validation check for gender
       var radioSelected=false;
       for(i=0;i<f3.gender.length;i++)
       {
          if(f3.gender[i].checked)
              radioSelected=true;
       }
       if(!radioSelected)
       {
          alert("Please select one of the Gender option");
          return(false);
       }

       //Validation check for hobby
       var checkSelected=false;
       for(i=0;i<f3.hobby.length;i++)
       {
          if(f3.hobby[i].checked)
            checkSelected=true;
       }
       if(!checkSelected)
       {
         alert("Select a hobby");
         return(false);
       }
   }
</script>
	<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
table tr{
padding:20px;
}
/* Set a style for all buttons */
ul li{
	padding:0px 60px;
	margin:50px;
}
button {
    background-color:black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	border-radius: 10px 10px 0 0;
}
button:hover{
	background-color:orange;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
	<div id="about1">
	<header>
		<h1>Welcome to---</h1>
		<h2> 	NEWS DIRECTORY </h2>
	</header>	
		<ul>			
			<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span title="click to login">User</span></button></li>
			<div id="id01" class="modal">
			<form class="modal-content animate" action="user_authent.php" method="post">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					<img src="login.jpg" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
			
					<button type="submit">Login</button>
					<input type="checkbox" checked="checked"> Remember me
				</div>

				<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
		    </form>
			</div>						
			
			<li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><span title="new user??? click to register">Register</span></button></li>
			
			<div id="id02" class="modal">
			<form class="modal-content animate" action="connect.php" name="f3" onSubmit="return validation()" method="post" enctype="multipart/form-data">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
					<img src="signup.jpg" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<table>
					<tr>
					<td>User Id</td>
					<td><input type="text" name="uid" id="uid"></td>
					</tr>
					<tr>
					<td>Password</td>
					<td><input type="Password" name="pwd" id="pwd">
					</td>
					</tr>
					<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="cpwd" id="cpwd">
					</td>
					</tr>
					<tr>
					<td>Name</td>
					<td><input type="text" name="name" id="name"></td>
					</tr>
					<tr>
					<td>
					Upload your profile pic	:</td>
					<td><input type="file" name="file" id="file">
					</td>
					</tr>
					<tr>
					<td>Email id</td>
					<td><input type="text" name="email" id="email"></td>
					</tr>
					<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" id="contact"></td>
					</tr>
					<tr>
                    <td>Address</td>
                    <td><textarea rows="10" cols="40" name="address" id="address">
                    </textarea></td></tr>
					<tr>
					<td>Date of Birth</td>
					<td><input type="date" name="myDate" id="myDate" value="mm-dd-yyyy">
					</td>
					</tr>
					<td>Last Qualification</td>
					<td><Select name="lastqual">
					<option value="0">Select</option>
					<option value="BCA">BCA</option>
					<option value="MCA">MCA</option>
					<option value="Btech">Btech</option>
					<option value="Mtech">Mtech</option>
					<option value="PhD">PhD</option>
					</Select> 
					</td>
					</tr>
					<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="Male">Male
					<input type="radio"name="gender" value="Femaile">Female
					</td>
					</tr>
					<tr>
					<td>Hobbies</td>
					<td><input type="checkbox" name="hobby" value="Games">Gaming
					<input type="checkbox" name="hobby" value="Travelling">Travelling
					<input type="checkbox" name="hobby" value="Reading">Reading
					<input type="checkbox" name="hobby" value="Photography">Photography
					</td>
					</tr>
					</table>					
					<button type="submit">Register</button>					
				</div>

				<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
			</form>
			</div>
			<li><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;"><span title="click only if you are an admin">Admin</span></button></li>		
		    <div id="id03" class="modal">
			<form class="modal-content animate" action="admin_authent.php" method="post">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
					<img src="login.jpg" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
			
					<button type="submit">Login</button>
					<input type="checkbox" checked="checked"> Remember me
				</div>

				<div class="container" style="background-color:#f1f1f1">
					<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>				
				</div>
		    </form>
			</div>
		</ul>
	</div>
</body>
</html>
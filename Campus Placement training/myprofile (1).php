<?php 
$username=$_GET['username'];
@$cn=new mysqli('localhost','root','','campus');
if($cn->connect_error)
    {
      echo"Could not Connect";
      exit;
    }
$qry="select * from student where username='$username'";
$rslt=$cn->query($qry);
$r=$rslt->fetch_assoc();
$name=$r['name'];
$qry1="select *from noti where username='$username'";
$rslt1=$cn->query($qry1);
$count=0;
while($rslt1->fetch_assoc()) {
	$count=$count+1;
}
$email=$r['email'];
$phone=$r['phone'];
$address=$r['address'];
$institute=$r['institute'];
$class=$r['class'];
$regino=$r['regino'];
echo'
<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title></title>
	<style>
	*{
	list-style: none;
	text-decoration: none;
	padding: 0;
	margin: 0;
}
body{
	background-color: white;
}
.icon-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  color: black;
  background: #5858f4;
  border: none;
  outline: none;
  border-radius: 50%;
  left:95%;
  top:-35px;
}

.icon-button:hover {
  cursor: pointer;
}

.icon-button:active {
  background: #cccccc;
}

.icon-button__badge {
  position: absolute;
  top: -7px;
  right: -7px;
  width: 28px;
  height: 28px;
  background: red;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
}
.sidebar{
	position: fixed;
	left: -255px;
	width: 250px;
	height: 100%;
	background: #042331;
	transition: all .5s ease;
	margin-top: 0px;
}
.sidebar header{
	font-size: 22px;
	color: white;
	text-align: center;
	line-height: 70px;
	background: #063146;
	user-select: none;
	transition: all .5s ease;
}
.sidebar a{
	display: block;
	height: 100%;
	width: 100%;
	line-height: 65px;
	font-size: 20px;
	color: white;
	padding-left: 40px;
	box-sizing: border-box;
	border-top: 1px solid rgba(255, 255, 2555, .1);
	border-bottom: 1px solid black;
}
li:hover{
	padding-left: 20px;
}
#check1{
	display: none;
}

label #btn, label #btn2{
	position: absolute;
	cursor: pointer;	
	background: #042331;
	border-radius: 3px;
}
label #btn{
	left: 15px;
	top: 8px;
	font-size: 35px;
	color: white;
	padding: 6px 12px;
	transition: all .5s ease;

}
label #btn2{
	z-index: 1111;
	left: -195px;
	top: 17px;
	font-size: 30px;
	color: white;
	padding: 4px 9px;
	transition: all .5s ease;
}
	
#check1:Checked ~ .sidebar{
	left: 0;
}
#check1:Checked ~ label #btn{
	left: 250px;
	opacity: 0;
	pointer-events: none;
}
#check1:Checked ~ label #btn2{
	left: 195px;
	
}
h1{
	text-transform: uppercase;
	text-align: right;
	font-family: sans-serif;
	font-size: 25px;
	margin-right: 100px;
	padding-top: 20px;
	color: white;
}
.nam{
	background: #063133;
	height: 70px;
	
}
.welcome{
	background-color: white;
}
.contain{
	height: 80px;
	border-radius:10px;
}
.div1{		
			background:teal;
			height: 80px;
			
			top: 80px;	
			text-align: center;
			padding-left: 500px;
			border-radius:10px;
			margin-top:5px;
		}
	.div1 h1{
		text-align: center;
		padding-right: 500px;

	}
	.div1 .btn{
		position: relative;
		color: red;
		font-size: 20px;
		
			height: 40px;
			width: 100px;
			bottom: 30px;
			right: 10px;
			float: right;
			border:none;
			background:transparent;
			cursor:pointer;
	}
	.btn:active{
		bottom: 25px;
	}
	.div2{
  		margin-left:200px;
  		left:3;
			 background: rgb(35, 51, 64);
			width: 250px;
			height: 505px;
			padding-top: 40px;
			border: 5px outset solid rgb(35, 51, 64);
			border-radius:10px;
		}
		.div3{
			position:absolute;
 			top: 150px;
  		left:455px;
			background: rgb(35, 51, 64);;
			height: 545px;
			width: 840px;
			 right:0;
			 color:lightblue;
			 border-radius:10px;
			 margin-top:5px;
		}
		.img1{
			border-radius: 50px;
		}
		.h{
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  padding-top: 30px;
  text-align: center;
  margin-left:69px;
		}
		.name{
			 left: 40px;
  		font-size: 20px;
  		padding-left: 120px;
   		padding-top: 20px;
   		padding-bottom: 5px;
		}
		.name1{
			margin-left:29px;
			margin-top:16px;
			padding-left: 20px;
			padding-bottom: 10px;
			font-size: 20px;	  
  		left: 40px;
   		font-family: Arial, Helvetica, sans-serif;
		}
		.btn{
			
		}
		.contain{
			width:1095px;
			margin-left:200px;
			border-radius:20px;
		}
		
	</style>
</head>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title></title>
	<link rel=stylesheet type=text/css href="student_interface_style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>	
</head>
<body>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<input type=checkbox id=check1>
	<label for=check1>
		<i class="fas fa-bars" id=btn></i>
		<i class="fas fa-times" id=btn2></i></label>
	<div class=sidebar>
		<header>My App</header>
		<ul>
		<li><a href="student_interface.php?username='.$username.'">Dashboard</a></li>
			<li><a href="myprofile.php?username='.$username.'">Profile</a></li>
			<li><a href="choosingtemplate.php?username='.$username.'">Generate Resume</a></li>
			<li><a href="take_test.php?username='.$username.'">Take Test</a></li>
			<li><a href="result.php?username='.$username.'">View Result</a></li>
			<li><a href="login.php">Logout</a></li>
		</ul>
	</div>
	
	<div class="nam"><h1>'.$name.'</h1><button onclick=window.location.href="notificationpage.php?username='.$username.'" type="button" class="icon-button">
    <span class="material-icons" style="font-size:30px;">notifications</span>
    <span class="icon-button__badge">'.$count.'</span></span>
  </button></div>
		<div class="contain">
			<div class="div1">
			<h1 style="color: rgba(255,255,255,0.87);">PROFILE</h1>
		<button class="btn" onclick=window.location.href="myprofile_edit.php?username='.$username.'"><i class="fa fa-edit" style="font-size:40px;color:lightblue"></i></button></div>
			</div>
			
			
		
	<div class="div2">
<center>';echo"<img src='images/".$r['image']."'"; echo'<img src="" class="img1"  width="200px" height="210"></center>
<h1 class="h">'.$name.'</h1>
</div>
<div class="div3">
<table style=" border-spacing: 20px; ">
<tr><td><h3 class="name"><i style="font-size:24px" class="fas">&#xf501;</i>&nbsp;&nbsp;Full Name</h3> </td><td><p class="name1">'.$name.'</p></td></tr>

<tr><td><h3 class="name"><i style="font-size:24px" class="fas">&#xf2b6;&nbsp;</i>Email Address</h3>  </td><td><p class="name1">'.$email.'</p></td></tr>

<tr><td><h3 class="name"><i style="font-size:24px" class="fas">	&#xf87b;&nbsp;</i>Phone No</h3>  </td><td><p class="name1">'.$phone.'</p></td></tr>

<tr><td><h3 class="name"><i style="font-size:24px" class="fas">		&#xf6f1;&nbsp;</i>Address</h3>  </td><td><p class="name1">'.$address.'</p></td></tr>

<tr><td><h3 class="name"><i style="font-size:24px" class="fas">			&#xf549;&nbsp;</i> Institution</h3>  </td><td><p class="name1">'.$institute.'</p></td></tr>

<tr><td><h3 class="name"><i style="font-size:24px" class="fas">				&#xf5da;&nbsp;</i> Class</h3> </td><td> <p class="name1">'.$class.'</p></td></tr>

<tr><td><h3 class="name"><i style="font-size:24px" class="fas">				&#xf2bb;&nbsp;</i>  Register No</h3> </td><td> <p class="name1">'.$regino.'</p></td></tr>
</table>
</div>
</body>
</html>';
?>
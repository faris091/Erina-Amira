<?php 
mysql_connect("localhost","root","");
mysql_select_db("incident_data");
session_start();
if(isset($_SESSION['username']) == true){
  header("location:home.php");
}
?>
<?php
	
$submit = isset($_POST['Submit']);
if($submit)
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $type = $_POST['type'];
  $sql = "SELECT * FROM " .$type ." WHERE username='". $username ."' AND password='" . $password ."'";
  $get = mysql_query($sql)  or die('Cannot Execute:'. mysql_error());
  $CG = mysql_fetch_object ( $get );
  $num = mysql_num_rows($get);
  
  
if($num==1){
    $_SESSION["username"]= $_POST["username"];
	$password = $_POST['password'];
    $_SESSION["type"]= $_POST["type"];
	
    if($_SESSION['type'] == "cert_team")
      $_SESSION["id"] = $CG->idcert_team;
  
  if($_SESSION['type'] == "admin")
      $_SESSION["id"] = $CG->idadmin;
	  
    if($_SESSION['type'] == "user")
      $_SESSION["id"] = $CG->iduser;
	  
	  $get = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
	  $get2 = mysql_fetch_assoc($get);
	  $id = $get2['iduser'];
	  $num = mysql_num_rows($get);
	
	  if($num==1)
	  {
	  	  header("location:profile.php?userid=$id");
	  }
	
	  else
	  {
		  header("location:index.php");
	  }
	  
  }
  else{
    $ERROR = true;
  }
}

?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" media="all" href="assets/css/login_style.css" />
<body>

    <meta charset="UTF-8">


    <title>Login Form</title>
    
    
    
    
        <style>
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://www.etawau.com/edu/UniversitiesPublic/UPMN/UPNM_01b.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}
.login select[type=button]{
	width: 260px;
	height: 35px;
	background: transparent;
	border: 1px solid #fff;
	border-radius: 2px;
	cursor: pointer;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}
.login select[type=button]:hover{
	opacity: 0.8;
}

.login select[type=button]:active{
	opacity: 0.6;
}


.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login select[type=button]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
::-webkit-select-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-select-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
  
  <div id="superWrapper">
  <div id="wrapper">
    <div id="header">
      <a class="" href="#">&nbsp;</a></div>
  <div id="mainTitle"><a class="mainTitle" href="#"></a></div>
  <div id="info"><br>
  </div>         
    <form action="" method="post">
    <div  id="login">
    <div  id="login h4">
    <div  id="login table">

	<!--utk upnm-->
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Login<span>Report</span></div>
		</div>
		<br>
		<div class="login">
				<input class="input input-medium" type="text" placeholder="username" name="username" size="15" maxlength="25" required="true"><br>
				<input class="input input-medium" type="password" placeholder="password" name="password" size="15" maxlength="25" required="true"><br>
				<select class="input input-medium" type="button" placeholder="login as" data-toggle="dropdown" name="type">login as
					<option value="user" type="user">user</option>
					<option value="cert_team" type="cert_team">cert team</option>
					<option value="admin" type="admin">admin</option>
				</select>
				
				<a href="index.php"><input type="button" name="submit" value="Login" id="btn_masuk"> <br>
		</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Arsenal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
body
{
	background-image:url("camo1.jpg");
	@background-color: #FFFF99;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
<body> 
<header>
<br />
<div class="container-fluid" >
    <div class="row">
    <div class="col-md-1" > </div>
  <div class="col-md-10" >
 <nav class="navbar navbar-default ">
 <div class="container-fluid" >  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >
      <img alt="Brand" src="logo_atm.png" >
      
      </a>
       <a class="navbar-brand" >MILITARY ARSENAL DATABASE (ADMIN) </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="force.php"><strong>FORCE</strong></a></li>
      <li  class="active"><a href="index2.php"><strong>ARSENAL</strong></a></li>
      <li><a href="feature.php"><strong>FEATURE 1</strong></a></li>
      <li><a href="ammunition.php"><strong>FEATURE 2</strong></a></li>
      <li><a href="ammunition1.php"><strong>GUN</strong></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <div class="navbar-header">
      <a class="navbar-brand">
        <img alt="Brand" src="army.png">
      </a>
      <a class="navbar-brand">
        <img alt="Brand" src="navy.png">
      </a>
      <a class="navbar-brand">
        <img alt="Brand" src="airforce.png">
      </a>
    </div>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="logout.php"><strong>LOG OUT</strong></a></li>
            
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div> 
<div class="col-md-1" > </div>
</div> 
</div> 
</header> 
<br/><br/>
<div class="container-fluid" >
 <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
            <div class="panel panel-default" style="background:#F8F8F8;">
               <div class="panel-body">
               
               <div class="page-header" style="margin-top:5px;" >
                     <h2 class="text-center"> ARSENAL</h2>
                     </div>

<form class="form-horizontal" action="upload.php" enctype="multipart/form-data" method="post">
	<div class="form-group">
    	<label for="type_name" class="col-sm-4 control-label">Category:</label>
    	 <div class="col-sm-6">
    	 <div class="input-group">
    	 <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" id="basic-addon1"></span></span>
        <input type="text" name="arsenal_category" required="required" id="arsenal_category" class="form-control">
        </div>
    </div>
    </div> 
	<div class="form-group">
    	<label for="type_name" class="col-sm-4 control-label">Name:</label>
    	<div class="col-sm-6">
    	<div class="input-group">
    	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" id="basic-addon1"></span></span>
        <input type="text" name="arsenal_name" required="required" id="arsenal_name" class="form-control">
    </div>
    </div>
    </div>
    <div class="form-group">
    	<label for="type_name" class="col-sm-4 control-label">Number:</label>
    	<div class="col-sm-6">
    	<div class="input-group">
    	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" id="basic-addon1"></span></span>
        <input type="text" name="arsenal_number" required="required" id="arsenal_number" class="form-control">
    </div>
    </div>
    </div>
   <div class="form-group">
    	<label for="type_name" class="col-sm-4 control-label">Image:</label>
    		<div class="col-sm-6">
    	<div class="input-group">

<input name="uploadedimage" type="file">

    </div>
    </div>
    </div>
    <div class="form-group">
<label for="type_name" class="col-sm-4 control-label">Force:</label>
<div class="col-sm-6">
<div class="input-group">

<?php
$conn = mysql_connect("localhost","root","1234");
mysql_select_db("fyp",$conn); 
$result = mysql_query("SELECT * FROM military");
?>
<select class="form-control" name="m_flag">
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
?>
<option value="<?=$row["m_id"];?>"><?=$row["m_name"];?></option>
<?php
$i++;
}
?>
</select>

</div>
</div>
</div>
<div class="form-group">
<label for="type_name" class="col-sm-4 control-label">Feature:</label>
<div class="col-sm-6">
<div class="input-group">

<?php
$conn = mysql_connect("localhost","root","1234");
mysql_select_db("fyp",$conn); 
$result = mysql_query("SELECT * FROM feature_arsenal");
?>
<select class="form-control" name="feature_flag">
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
?>
<option value="<?=$row["feature_id"];?>"><?=$row["feature_id"];?></option>
<?php
$i++;
}
?>
</select>

</div>
</div>
</div> <div></div>

   <div class="form-group">
  <div class="col-sm-offset-4 col-sm-10">
   <input name="Reset1" type="reset" value="Reset" class="btn btn-danger" />
	<input name="doType" type="submit" id="doType" value="Add Type" class="btn btn-success">
	</div>
              </div>
</form>


  </div>
            </div>
         </div>
      <div class="col-md-3"></div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>                                		






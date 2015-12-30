 
<?php
include("dbc.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;
	
$noSystemaffected = $_POST['noSystemaffected'];
 $method = $_POST['method'];
 $antivirus = $_POST['antivirus'];
$Os = $_POST['Os'];
/* $lastUpdate = $_POST['lastUpdate']; */
$statusSystem = $_POST['statusSystem'];
$incidentTime = $_POST['incidentTime'];
$incidentstate = $_POST['incidentstate'];
$incidentCharacteristics = @$_POST['incidentCharacteristics'];
$userscomment = $_POST['userscomment'];
$systemScreenshot = @$_POST['systemScreenshot'];
  
   
if(move_uploaded_file($temp_name, $target_path)) {

 	$query_upload=mysql_query("INSERT into reportform 
 	VALUES ('$noSystemaffected','$method','$antivirus',
	'$Os','$statusSystem','$incidentTime','$incidentstate',
	'$incidentCharacteristics','$userscomment','$target_path',
	'$systemScreenshot')");

	echo "Entered data successfully\n";
echo "<a href='lead_list.php'>Search Data</a>\n";

}
else{

   exit("Error!");
} 

}

?>


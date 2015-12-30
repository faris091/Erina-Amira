
<?php
include 'dbc.php';


?>
<html>

<head>
<style>
#nav {
	line-height: 30px;
	background-color: #808080;
	height: 300px;
	width: 100px;
	float: left;
	padding: 5px;
}
#section {
    width:350px;
    float:left;
    padding:10px; 
}
</style>

<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title> NDUM Cyber Security Incident Reporting System</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	font-family: Elephant;
	text-align: center;
}
.auto-style3 {
	text-align: right;
}
.auto-style33 {
	text-align: left;
}
.auto-style7 {
	text-align: center;
	font-weight: bold;
	text-decoration: underline;
}
.auto-style8 {
	text-decoration: none;
}
table.one {  
  text-align: center;
   border-style: solid;
    border-width: 3px;}
</style>
<script type="text/javascript">
tday  =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
</head>
<body bgcolor="#FFFFFF" style="margin-bottom: 19px; height: 303px; background-color: #FFFFFF;">

   


<div class="auto-style1">

<div class="auto-style1">
<div id="clockbox" class="auto-style3"></div>
	</div>
	<img alt="" height="200" src="cyber.jpg" width="1339" /><p class="auto-style2">
<marquee behavior="scroll" direction="left" style="width: 312px; font-size: large;">Welcome To Incident Reporting System</marquee></p>
<label id="Label1"></label>
<hr />
	
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	
<?php	
	
	$sql="SELECT * FROM reportformtech";
$result=mysql_query($sql);
	?>
	
	<table align="center" class="one" width="1100" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="1100" border="1" cellspacing="0" cellpadding="3">
<tr>
<td align="center" colspan="16"><h2><strong>REPORT </strong></h2> </td>
</tr>

<tr>
<td align="center"><strong>No System Affected</strong></td>
<td align="center"><strong>Method</strong></td>
<td align="center"><strong>Antivirus</strong></td>
<td align="center"><strong>OS</strong></td>
<td align="center"><strong>Status System</strong></td>
<td align="center"><strong>Incident Characteristics</strong></td>
<td align="center"><strong>Number of systems impacted by the incident</strong></td>
<td align="center"><strong>Number of sites impacted by the incident </strong></td>
<td align="center"><strong>Incident Time</strong></td>
<td align="center"><strong>Primary Purpose of Affected System </strong></td>
<td align="center"><strong>IP Address of Affected System </strong></td>
<td align="center"><strong>Protocol Used in Attack</strong></td>
<td align="center"><strong>Attackers IP Address</strong></td>
<td align="center"><strong>Incident State</strong></td>
<td align="center"><strong>Description of Incident</strong></td>
<td align="center"><strong>System Screenshot</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>

<td align="center"><?php echo $rows['noSystemaffected']; ?></td>
<td align="center"><?php echo $rows['method']; ?></td>
<td align="center"><?php echo $rows['antivirus']; ?></td>
<td align="center"><?php echo $rows['Os']; ?></td>
<td align="center"><?php echo $rows['statusSystem']; ?></td>
<td align="center"><?php echo $rows['incidentCharacteristics']; ?></td>
<td align="center"><?php echo $rows['systemsImpacted']; ?></td>
<td align="center"><?php echo $rows['sitesImpacted']; ?></td>
<td align="center"><?php echo $rows['incidentTime']; ?></td>
<td align="center"><?php echo $rows['primaryPurpose']; ?></td>
<td align="center"><?php echo $rows['ipAddress']; ?></td>
<td align="center"><?php echo $rows['relevantProtocol']; ?></td>
<td align="center"><?php echo $rows['attackersIP']; ?></td>
<td align="center"><?php echo $rows['incidentstate']; ?></td>
<td align="center"><?php echo $rows['shortDescription']; ?></td>
<td align="center"><img src="<?php echo $rows['images_path']; ?>" height="100" width="100"</td>




</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<tr>
<td><a href="logout.php">Sign Out Here</a></td>
</tr>	
	

<br></br>
<br></br><br>
<br></br>


</body>

</html>

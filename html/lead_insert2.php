


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
<title>Incident Reporting System</title>
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
.auto-style9 {
	color: #FF6600;
}
.auto-style11 {
	color: #FF0000;
}
.auto-style12 {
	color: #A5490E;
}
.auto-style34 {
	color: #800000;
}
.auto-style35 {
	color: #000000;
}
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



   
   
<br>
<br>
<div class="auto-style1">

<div class="auto-style1">
<div id="clockbox" class="auto-style3"></div>
	</div>
	<img alt="" height="200" src="meow.jpg" width="1339" /><p class="auto-style2">
<marquee behavior="scroll" direction="left" style="width: 312px; font-size: large;">Welcome To Incident Reporting System of Cyber Security Center NDUM</marquee></p>
<label id="Label1"></label>
<hr />
	


<form class="form-horizontal" action="uploadtech.php" enctype="multipart/form-data" method="post">
<table align="center" border="0" cellspacing="1" cellpadding="2" class="auto-style9" style="width: 761px; height: 436px;">
<tr>
<td align="center" colspan="10"><h3 class="auto-style33" style="width: 699px">
<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;<span class="auto-style34">TECHNICAL USER REPORT FORM</span></strong></h3>
<p class="auto-style3" style="width: 699px">&nbsp;</p> </td>
</tr>


</select><br><br>
              </td>
              </tr>
			  


			  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Number of System Affected  &nbsp;</span> 
            </td>
          <td><br>             
<input type="radio" name="noSystemaffected" value="1">1
<br>
<input type="radio" name="noSystemaffected" value="2">2
<br>
<input type="radio" name="noSystemaffected" value="3">3
<br>
<input type="radio" name="noSystemaffected" value="4">4
<br>
<input type="radio" name="noSystemaffected" value="5">5
<br>
<input type="radio" name="noSystemaffected" value="More Than 5">More Than 5
<br>
<input type="radio" name="noSystemaffected" value="Unknown">Unknown
<br>


	 </select><br><br>
     </td>
     </tr>

 <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Method of detection of incident&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="method" id="method">
                <option value=" ">  Please Select Type   </option>
                <option value="Anti Virus">Anti Virus</option>
                <option value="IDS">IDS</option>
                  <option value="3rd Party">3rd Party</option>
				  <option value="Log Files">Log Files</option>
				  <option value="Unknown">Unknown</option>
                 
                </select><br><br>
              </td>
              </tr>

			  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Antivirus used on affected system &nbsp;</span> 
            </td>
          <td><br>
          
                <select name="antivirus" id="antivirus">
                <option value=" ">   Please Select Type  </option>
                <option value="Avast">Avast</option>
                <option value="Kapersky Lab">Kapersky Lab</option>
                  <option value="Avira Antivirus">Avira Antivirus</option>
				  <option value="ESET Nod 32">ESET Nod 32</option>
				  <option value="AVG Antivirus">AVG Antivirus</option>
				  <option value="SMADAV">SMADAV</option>
				  <option value="SYMANTEC">SYMANTEC</option>
				  <option value="Mcafee">Mcafee</option>
				  <option value="Norton Internet Security">Norton Internet Security</option>
				  <option value="No Antivirus Installed">No Antivirus Installed</option>
				  <option value="Unknown">Unknown</option>
                 
                </select><br><br>
              </td>
              </tr>
			  
			  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Operating System of affected system&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="Os" id="Os">
                <option value=" ">   Please Select Type  </option>
                <option value="Windows XP">Windows XP              </option>
                <option value="Windows Vista">Windows Vista</option>
                  <option value="Windows 7">Windows 7</option>
				   <option value="Windows 8.1 ">Windows 8.1</option>
				    <option value="Linux">Linux</option>
					 <option value="MAC OS X Version">MAC OS X Version</option>
					  <option value="Unknown">Unknown</option>
                 
                </select><br><br>
              </td>
              </tr>
			  
			  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Current status of affected system&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="statusSystem" id="statusSystem">
                <option value=" ">   Please Select Type   </option>
                <option value="Still Running">Still Running</option>
				<option value="Unusually Slow Network Performance">Unusually Slow Network Performance</option>
				<option value="Unable to access websites">Unable to access websites</option>
				<option value="Cant' Start">Cant Start</option>
				<option value="Slow startup">Slow startup</option>
				<option value="Computer keep on crashing spontaneously">Computer keep on crashing spontaneously</option>
				<option value="Antivirus and Firewall disabled">Antivirus and Firewall disabled</option>
				<option value="Restored to normal condition">Restored to normal condition</option>
				<option value="Unknown">Unknown</option>
				 
                
		
				
                  
                 
                </select><br><br>
              </td>
              </tr>
			  


			  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Incident Characteristic &nbsp;</span> 
            </td>
          <td><br>             
<input type="checkbox" name="incidentCharacteristics" value="Unusual Error Messages">Unusual Error Messages
<br>
<input type="checkbox" name="incidentCharacteristics" value="Hardware Troubles">Hardware Troubles
<br>
<input type="checkbox" name="incidentCharacteristics" value="Missing files">Missing files
<br>
<input type="checkbox" name="incidentCharacteristics" value="Weird pop-up ads">Weird pop-up ads
<br>
<input type="checkbox" name="incidentCharacteristics" value="Slow System Performance">Slow System Performance
<br>
<input type="checkbox" name="incidentCharacteristics" value="Blue Screen Monitor">Blue Screen Monitor
<br>
<input type="checkbox" name="incidentCharacteristics" value="Disconnection of wireless LAN and Internet">Disconnection of wireless LAN and Internet
<br>
<input type="checkbox" name="incidentCharacteristics" value="Computer keep freezing">Computer keep freezing
<br>
<input type="checkbox" name="incidentCharacteristics" value="Unknown">Unknown
     

	 </select><br><br>
     </td>
     </tr>
	 
	  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Number of systems impacted by the incident&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="systemsImpacted" id="systemsImpacted">
                <option value=" ">  Please Select    </option>
				<option value="None">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="More than 5">More than 5</option>
				  <option value="Unknown">Unknown</option>
                 
                </select><br><br>
              </td>
              </tr>
			  
	
     </select><br><br>
     </td>
     </tr>
	 
	  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Number of sites impacted by the incident&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="sitesImpacted" id="sitesImpacted">
                <option value=" ">  Please Select    </option>
				<option value="None">None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="More than 5">More than 5</option>
				  <option value="Unknown">Unknown</option>
                 
                </select><br><br>
              </td>
              </tr>	
			  
			  
			  
			  

<tr>
<td style="width: 253px; height: 11px;" class="auto-style1">
<span class="auto-style12">Incident Time&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
<td style="height: 11px">
<input name="incidentTime" type="text" id="incidentTime" class="required" required="required" maxlength="18" style="width: 150px">&nbsp;
<span class="auto-style35">
</tr>



         </select><br><br>
              </td>
              </tr>
			  


			  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">If known, what is the primary purpose(s) of the affected system? [Check all that apply] &nbsp;</span> 
            </td>
          <td><br>             
<input type="checkbox" name="primaryPurpose" value="Individual workstation">Individual workstation
<br>
<input type="checkbox" name="primaryPurpose" value="Domain Name Server (DNS)">Domain Name Server (DNS)
<br>
<input type="checkbox" name="primaryPurpose" value="Server System">Server System
<br>
<input type="checkbox" name="primaryPurpose" value=" Proxy Server"> Proxy Server
<br>
<input type="checkbox" name="primaryPurpose" value="Database Server">Database Server
<br>
<input type="checkbox" name="primaryPurpose" value="Web Server">Web Server
<br>
<input type="checkbox" name="primaryPurpose" value="Router">Router
<br>
<input type="checkbox" name="primaryPurpose" value="Printer">Printer
<br>
<input type="checkbox" name="primaryPurpose" value="Laptop">Laptop
<br>
<input type="checkbox" name="primaryPurpose" value="Others">Others
<br>
<input type="checkbox" name="primaryPurpose" value="Unknown">Unknown
     

	 </select><br><br>
     </td>
     </tr>


	 <tr>
<td style="width: 253px; height: 26px;" class="auto-style1"><span class="auto-style12">What is the IP Address of the affected system? (eg:192.168.111.10)                 Leave blank if Unknown&nbsp;</span> </td>
<td style="height: 26px"><br><textarea name="ipAddress" id="ipAddress" class="optional" optional="optional" style="width: 150px; height: 22px"/></textarea> 
<br> 
<br> </td>
</tr>


 </select><br><br>
     </td>
     </tr>
	 
	  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">If known, please select the relevant protocol used in the attack.&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="relevantProtocol" id="relevantProtocol">
                <option value=" ">  Please Select    </option>
				<option value="IMAP Protocol">IMAP Protocol</option>
                <option value="POP3 Protocol">POP3 Protocol</option>
                <option value="SMTP Protocol">SMTP Protocol</option>
                  <option value="HTTP Protocol">HTTP Protocol</option>
				  <option value="Telnet">TELNET</option>
				  <option value="FTP">FTP</option>
				  <option value="Others">Others</option>
				  <option value="Unknown">Unknown</option>

                 
                </select><br><br>
              </td>
              </tr>	
			  
			  

<tr>
<td style="width: 253px; height: 26px;" class="auto-style1"><span class="auto-style12">If Known,Please Enter the Attackers/Suspects IP Address(eg:192.168.111.10)                 Leave blank if Unknown&nbsp;</span> </td>
<td style="height: 26px"><br><textarea name="attackersIP" id="attackersIP" class="optional" optional="optional" style="width: 150px; height: 22px"/></textarea> 
<br> 
<br> </td>
</tr>


  <tr><td style="width: 253px" class="auto-style1"><span class="auto-style12">Incident State&nbsp;</span> 
            </td>
          <td><br>
          
                <select name="incidentstate" id="incidentstate">
                <option value=" ">    Please Select Type   </option>
				<option value="Manageable">Manageable</option>
				<option value="Critical">Critical</option>
			     <option value="Unknown">Unknown</option>
                
                  
                 
                </select><br><br>
              </td>
              </tr>
			  
<tr>
<td style="width: 253px; height: 26px;" class="auto-style1"><span class="auto-style12">Please Provide a Short Description of the Incident&nbsp;</span> </td>
<td style="height: 26px"><br><textarea name="shortDescription" id="shortDescription" class="required" required="required" style="width: 291px; height: 76px"/></textarea> 
<br> 
<br> </td>
</tr>		  
			  
<tr>
<td style="width: 253px; height: 26px;" class="auto-style1"><span class="auto-style12">Screenshot of affected system&nbsp;</span> </td>
<td style="height: 26px"><br><input name="uploadedimage" type="file">
<br> 
<br> </td>
</tr>

         
<tr>
<td style="height: 37px; width: 253px;"> </td>
<td style="height: 37px">
<input name="add" type="submit" id="add" value="Submit">

</td>
</tr>
</table>
</form>
<div align="right">
<form action="lead_listtech.php">
    <input type="submit" value="See Report"></form>	
</div>	
</div>



</body>

</html>

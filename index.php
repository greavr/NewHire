<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<Title>iD New Hire - v0.1</Title>
<link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui-1.8.12.custom.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>  
    <script type="text/javascript" src="js/javainclude.js"></script>
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
</head>
<body>
	<div id="Content">
		<div id="Title">
			<h1>IT Employee Management Site</h1>
			<ul><li>New Hire</li><li>Termination Form</li></ul>
			<hr />
		</div>
		
		<div id="NewHire">
		<form action="index.php" method="get">
			<table>
				<label>Start Date:</label>  <input type="text" size="50" name="StartDate" id="StartDate" size="10" value="<?php echo date("F j, Y"); ?>">
				<h2>Employee Details:</h2>
				<label>First Name(s):</label> <input type="text" size="75"   name="FirstName" value="e.g. Richard James"> 
				<label>Last Name:</label> <input type="text" size="75"   name="LastName" value="e.g. Greaves"> 
				<label>Job Title:</label> <input type="text" size="75"   name="JobTitle" value="e.g. CS Rep"> 
				<label>Manager:</label> <input type="text" size="75"   name="Manager" value="e.g. Rene Sorensen"> 
				<label>Department:</label> <input type="text" size="75"   name="Department" value="e.g. IT"> 
				<label>Position:</label> <input type="radio" name="PositionType" value="Full Time" checked>Full Time<br /><input type="radio" name="PositionType" value="Part Time">Part Time<br /><input type="radio" name="PositionType" value="Temp">Temp 
				<label>Office Location:</label> <input type="radio" name="OfficeLocation" value="Main Office" checked>Main Office<br /><input type="radio" name="OfficeLocation" value="iD Studio">iD Studio<br /><input type="radio" name="OfficeLocation" value="Seattle">Seattle<br /><input type="radio" name="OfficeLocation" value="Telecommuter">TeleCommuter<br />
				<label>Is This Person A Manager:</label> <input type="checkbox" name="Manager" value="Yes"> 
				<div id="ManagerOptions"><label>Whom Do They Manage:</label> <Textarea Rows="5" cols="75" name="ManagerOf">e.g. Victor Alvarez, James Samson</TextArea></div>
				<hr />
				<h2>Folder / Network Access</h2>
				<label>User Requires A Personal Folder:</label> <input type="checkbox" name="PersonalFolder" value="Yes"> 
				<div id="PersonalFolderOptions"><label>Apart From Their Manager Whom Else Should Have Access To Their Folder:</label> <TextArea Rows="5" cols="75"   name="Personal Folder Access">e.g. Victor Alvarez"</TextArea></div>
				<label>Should They Be Able To Access The Departmental Private Folder:</label> <input type="checkbox" name="PrivateFolder" value="Yes"> 
				<label>Do They Require Spark:</label> <input type="checkbox" name="Spark" value="Yes"> 
				<hr />
				<h2>Email Account</h2>
				<label>Do They Require An iD Email Account:</label> <input type="checkbox" name="EmailAccount" value="Yes"> 
				<div id="EmailOptions">
					<label>Which Distribution Lists Will They Need To Be Part Of:</label><br />
					<input type="checkbox" name="EmailDistributionLists" value="away">away@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="as">as@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="admin">admin@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="company">company@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="compliance">compliance@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="coms">coms@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="contracts">contracts@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="cr">cr@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="cs">cs@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="editors">editors@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="finance">finance@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="health">health@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="import">import@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="it">it@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="kermitsupport">kermitsupport@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="latehires">latehires@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="locations">locations@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="mainoffice">mainoffice@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="managers">managers@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="projects">projects@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="rmstaff">rmstaff@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="shipping">shipping@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="studio">studio@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="summerqa">summerqa@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="summerterms">summerterms@internaldrive.com<br />
					<input type="checkbox" name="EmailDistributionLists" value="warehouse">warehouse@internaldrive.com 
					<label>Additional Distribution Lists:</label> <input type="text" size="75"   name="AdditionalDistributionLists" value="e.g. info@internaldrive.com"> 
				</div>
				<hr />
				<h2>Pulse Access</h2>
				<label>Do They Require Pulse Account:</label> <input type="checkbox" id="PulseAccount" value="Yes"> 
				<div id="PulseAccountContent"><label>Pulse Access Level Required:</label> <input type="text" size="75"   name="PulseAccessLevel" value="e.g. CS Rep"> </div>
				<label>Do They Require A Pulse Dev Account:</label> <input type="checkbox" id="PulseDevAccount" value="Yes"> 
				<div id="PulseDevAccountContent"><label>Pulse Dev Access Level Required:</label> <input type="text" size="75"   name="PulseDevAccessLevel" value="e.g. CS Rep"> </div>
				<label>Will The User Require Great Plains Access:</label> <input type="checkbox" name="GreatPlainsAccount" value="Yes"> 
				<hr />
				<h2>Harware Requirements</h2>
				<h3>Please Note Hardware Can Take Upto 10 Days For Purchase / Processing (Est date:</label> <?php echo date("F j, Y"); ?>)</h3>
				<label>Hardware Package:</label> <input type="radio" name="HardwarePackage" value="Desktop">Desktop - (2x Monitor, one desktop)<br /><input type="radio" name="HardwarePackage" value="Laptop">Laptop - (1x Laptop, 1x Dock, 1x Laptop Bag, 1x Large Monitor, 1x Printer/fax/scanner, 1x Wifi Router)<br /><input type="radio" name="HardwarePackage" value="NA" checked>N/A <br />
				<div id="HardwareNotes">
					<label>Hardware Notes:</label> <TextArea Rows="5" cols="75"   name="HardwareNotes">e.g. Does Not Require Printer</TextArea>
					<label>Shipping Address For Equipment:</label> <input type="text" size="75" name="ShippingAddress" value="For Main Office, put Main Office">
				</div>
				<hr />
				<h2>Additional Notes</h2>
				<label>Any Additional Notes:<TextArea Rows="10" cols="75" name="AdditionalNotes"></TextArea>
			</table>
			<input type="submit" value="Submit">
		</form>
		</div>
		
		<div id="Terminate">
		<form>
		
		</form>
		</div>
		
	</div>
</body>
</html>
<?php
include("../connection/conn.php");
$sellerid=$_REQUEST['sellerid'];
$sql=mysql_query("select * from sellerreg where sellerid='$sellerid'");
while($row=mysql_fetch_row($sql))
{
$name=$row[1];
$address=$row[2];
$gender=$row[3];
$bd=$row[4];
$city=$row[5];
$area=$row[6];
$contactno=$row[7];
$speciality=$row[8];
$awardwin=$row[9];
$photo=$row[10];
$email=$row[11];
$username=$row[12];
$password=$row[13];

}
if(isset($_POST['submit']))
{
$name1=$_POST['txtname'];
$address1=$_POST['txtaddress'];
$gender1=$_POST['radiobtn'];
$bd1=$_POST['txtbod'];
$city1=$_POST['city'];
$area1=$_POST['txtarea'];
$contactno1=$_POST['txtcontactno'];
$speciality1=$_POST['txtspeciality'];
$awardwin1=$_POST['txtaward'];
$photo1=$_FILES["file"]["name"];
$email1=$_POST['txtemail'];
$username1=$_POST['txtusername'];
$password1=$_POST['txtpass'];
$sql=mysql_query("update sellerreg set name='$name1',address='$address1',gender='$gender1',bd='$bd1',city='$city1',area='$area1',contactno='$contactno1',speciality='$speciality1',awardwin='$awardwin1',photo='$photo1',email='$email1',username='$username1',password='$password1' where sellerid='$sellerid'");
header('location:sellerview.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getCity(stateId) {		
		
		var strURL="findcity.php?state="+stateId;
		
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
				
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}
		
			}	
			
			req.open("GET", strURL, true);
			req.send(null);
		
}		
	}
	
	function getarea(stateId,cityId) {		
		var strURL="findarea.php?state="+stateId+"&city="+cityId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('areadiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	
	</script>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="/img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Charisma</span></a>
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="../../login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="../../index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="../../ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a class="ajax-link" href="../../form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a class="ajax-link" href="../../chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a class="ajax-link" href="../../typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a class="ajax-link" href="../../gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li class="nav-header hidden-tablet">Sample Section</li>
						<li><a class="ajax-link" href="../../table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a class="ajax-link" href="../../calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a class="ajax-link" href="../../grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a class="ajax-link" href="../../file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="../../tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
						<li><a class="ajax-link" href="../../icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="../../error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
						<li><a href="../../login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Forms</a>
					</li>
				</ul>
			</div>
			
			<?php /*?><div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<legend>Datepicker, Autocomplete, WYSIWYG</legend>
							<div class="control-group">


							  <label class="control-label" for="typeahead">Auto complete </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block">Start typing to activate auto complete!</p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
<?php */?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> New Seller Registration Form</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form action="#" enctype="multipart/form-data" method="post">
<table align="center" >
<tr>
<td> 
Name:
</td>
<td>
<input type="text" name="txtname" value="<?php echo $name;?>" />
</td>
</tr>
<tr>
<td> 
Address:
</td>
<td>
<input type="text" name="txtaddress" value="<?php echo $address;?>" class="input-xlarge datepicker"/>
</td>
</tr>
<tr>
<td> 
Gender:
</td>
<td>
<input type="radio" name="radiobtn" value="male" <?php echo($gender=="male")? 'checked="checked"':'' ?>/>male
<input type="radio" name="radiobtn" value="female" <?php echo($gender=="female")? 'checked="checked"':'' ?>/>female<br/>
</td>
</tr>
<tr>
<td> 
BirthDate:
</td>
<td>
<input type="text" name="txtbod" value="<?php echo $bd;?>" class="input-xlarge datepicker" id="date01" value="01/01/2014"  />

</td>
</tr>
<tr>
<td> 
State:
</td>
<td>
<select name="txtstate" onChange="getCity(this.value)">
<option value="0">--select--</option>
<option value="1" selected="selected">Gujarat</option>
</select>
</td>
</tr>

<tr>
<td> 
City:
</td>
<td>
<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
echo "<select name='city'>";

//echo "<option value='0'>--select--</option>";
$sql=mysql_query("select * from city");
while($row=mysql_fetch_row($sql))
{
echo '<option value="'.$row[0].'" selected="selected">'.$row[1].'</option>';
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td> 
Area:
</td>
<td>
<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
echo "<select name='area'>";

//echo "<option value='0'>--select--</option>";
$sql=mysql_query("select * from area");
while($row=mysql_fetch_row($sql))
{
echo '<option value="'.$row[1].'" selected="selected">'.$row[1].'</option>';
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td> 
Contactno:
</td>
<td>
<input type="text" name="txtcontactno" value="<?php echo $contactno;?>" />
</td>
</tr>
<tr>
<td> 
Speciality:
</td>
<td>
<input type="text" name="txtspeciality" value="<?php echo $speciality;?>" />
</td>
</tr>
<tr>
<td> 
Awardwin:
</td>
<td>
<input type="text" name="txtaward" value="<?php echo $awardwin;?>" />
</td>
</tr>
<tr>
<td> 
Photo:
</td>
<td>

<input type="file" name="file" value="<?php echo $photo;?>"/>
<?php

if($img == null || $img=="")
{
echo "<img src='upload/pd.jpg' alt='pd.jpg' width='100'>"; 
}
else
{

echo "<img src='upload/$photo' alt='$photo' width='100'>"; 
}
?>

</td>
</tr>
<tr>
<td> 
Email:
</td>
<td>

<input type="text" name="txtemail" value="<?php echo $email;?>" />
</td>
</tr>
<tr>
<td> 
Username:
</td>
<td>
<input type="text" name="txtusername" value="<?php echo $username;?>" />
</td>
</tr>
<tr>
<td> 
Password:
</td>
<td>
<input type="text" name="txtpass" value="<?php echo $password;?>" />
</td>
</tr>
<tr>
<td colspan="2" align="center"> 
<input type="submit" value="submit" name="submit"/>
</td>
</tr>
</form>
</table>


					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
<?php /*?>			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="prependedInput">Prepended text</label>
								<div class="controls">
								  <div class="input-prepend">
									<span class="add-on">@</span><input id="prependedInput" size="16" type="text">
								  </div>
								  <p class="help-block">Here's some help text</p>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInput">Appended text</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInput" size="16" type="text"><span class="add-on">.00</span>
								  </div>
								  <span class="help-inline">Here's more help text</span>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedPrependedInput">Append and prepend</label>
								<div class="controls">
								  <div class="input-prepend input-append">
									<span class="add-on">$</span><input id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInputButton">Append with button</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="appendedInputButtons">Two-button append</label>
								<div class="controls">
								  <div class="input-append">
									<input id="appendedInputButtons" size="16" type="text"><button class="btn" type="button">Search</button><button class="btn" type="button">Options</button>
								  </div>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Checkboxes</label>
								<div class="controls">
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1"> Option 1
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> Option 2
								  </label>
								  <label class="checkbox inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3"> Option 3
								  </label>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">File Upload</label>
								<div class="controls">
								  <input type="file">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Radio buttons</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
									Option one is this and that—be sure to include why it's great
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
									Option two can be something else and selecting it will deselect option one
								  </label>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->
<?php */?>
			</div><!--/row-->
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<?php /*?><footer>
			<p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
			<p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
		</footer>
		<?php */?>
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="../../js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="../../js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="../../js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="../../js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="../../js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="../../js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="../../js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="../../js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="../../js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="../../js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="../../js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="../../js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="../../js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="../../js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="../../js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='../../js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='../../js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="../../js/excanvas.js"></script>
	<script src="../../js/jquery.flot.min.js"></script>
	<script src="../../js/jquery.flot.pie.min.js"></script>
	<script src="../../js/jquery.flot.stack.js"></script>
	<script src="../../js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="../../js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="../../js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="../../js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="../../js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="../../js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="../../js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="../../js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="../../js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="../../js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="../../js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="../../js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="../../js/charisma.js"></script>
	
		
</body>
</html>
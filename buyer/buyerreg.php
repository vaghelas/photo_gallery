<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoGallery</title>
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


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body>
<div id="top_menu">
  <ul class="menu">
    <li><a href="http://www.free-css.com/" class="nav">home</a></li>
    <li><a href="http://www.free-css.com/" class="nav">about us</a></li>
    <li><a href="http://www.free-css.com/" class="nav">services</a></li>
    <li><a href="gallery.html" class="nav">gallery</a></li>
    <li><a href="contact.html" class="nav">contact</a></li>
    <li><a href="buyerlogin.php" class="nav">login</a></li>
  </ul>
</div>
<div id="main_content">
  <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content_left">
    <div class="title"> Welcome to our photoGallery </div>
    <div class="content_text"> 
    <form action="buyerreginsert.php" enctype="multipart/form-data" method="post">
<table align="center" >
<tr>
<td> 
Name:
</td>
<td>
<input type="text" name="txtname" />
</td>
</tr>
<tr>
<td> 
Address:
</td>
<td>
<input type="text" name="txtaddress" />
</tr>
</td>
<tr>
<td> 
State:
</td>
<td>
<select name="txtstate" onChange="getCity(this.value)">
<option value="0">--select--</option>
<option value="1">Gujarat</option>
</select>
</td>
</tr>

<tr>
<td> 
City:
</td>
<td>
<div id="citydiv"> 
<select name="city" id="city">
<option value="0">--please select--</option>
</select>
</div>
</td>
</tr>
<tr>
<td> 
Area:
</td>
<td>
<div id="areadiv"> 
<select name="area" id="area">
<option value="0">--please select--</option>

</select>
</div>
</td>
</tr>
<tr>
<td> 
Contactno:
</td>
<td>
<input type="text" name="txtcontactno" />
</td>
</tr>
<tr>
<td> 
Gender:
</td>
<td>
<input type="radio" name="txtradio" value="male" />Male
<input type="radio" name="txtradio" value="female" />Female
</td>
</tr>

<tr>
<td> 
Email:
</td>
<td>
<input type="text" name="txtemail" />
</td>
</tr>
<tr>
<td> 
Username:
</td>
<td>
<input type="text" name="txtusername" />
</td>
</tr>
<tr>
<td> 
Password:
</td>
<td>
<input type="password" name="txtpassword" />
</td>
</tr>

<tr>
<td> 
Notification:
</td>
<td>
<input type="radio" name="txtstatus" value="0" />Yes
<input type="radio" name="txtstatus" value="1" />No
</td>
</tr>
<tr>
<td> 
Roll:
</td>
<td>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("gallery");
echo "<select name='roll'>";
echo "<option value='0'>---SELECT---</option>";
$sql=mysql_query("select rollname from roll");
while($row=mysql_fetch_row($sql))
{
	echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select>";
?>
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
    <div class="title"> Partners </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/csscreme.jpg" width="106" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/wallpaperstock.jpg" width="100" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/inethouse.jpg" width="103" height="34" alt="" class="inspiration" /></a> </div>
  </div>
  <div id="page_content_right">
    <div class="title"> Latest photos </div>
    <div class="content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
     <?php 
   mysql_connect("localhost","root","");
   mysql_select_db("gallery");
	 echo $id=$_REQUEST['id'];
	$sql=mysql_query("select * from sellerphotomapping");
	?>
    <div class="content_text">
    <?php 
	while($row=mysql_fetch_array($sql))
	{
	$id=$row[0];
    echo"<a href='details.php?id=$id'><img src='seller/photomapping/$row[3]' width='100' height='100' alt='' class='gallery' /></a>";
	} ?>
   
   <?php /*?> <div class="content_text"> <a href="details.html"><img src="images/pic/1.jpg" width="100" height="100" alt="" class="gallery" /></a>
     <a href="details.html"><img src="images/pic/2.jpg" width="100" height="100" alt="" class="gallery" /></a> 
     <a href="details.html"><img src="images/pic/3.jpg" width="100" height="100" alt="" class="gallery" /></a> 
     <a href="details.html"><img src="images/pic/4.jpg" width="100" height="100" alt="" class="gallery" /></a> 
     <a href="details.html"><img src="images/pic/5.jpg" width="100" height="100" alt="" class="gallery" /></a>
     <a href="details.html"><img src="images/pic/6.jpg" width="100" height="100" alt="" class="gallery" /></a> 
     <a href="details.html"><img src="images/pic/7.jpg" width="100" height="100" alt="" class="gallery" /></a> 
     <a href="details.html"><img src="images/pic/8.jpg" width="100" height="100" alt="" class="gallery" /></a> 
     <a href="details.html"><img src="images/pic/9.jpg" width="100" height="100" alt="" class="gallery" /></a><?php */?> </div>
    <div class="more"> <img src="images/more.jpg" width="20" height="20" alt="" border="0" class="more" />
      <div class="link_more"><a href="gallery.html"> Visit gallery</a></div>
    </div>
  </div>
  <div id="page_bottom">
    <div class="title"> Inspiration Site </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/s5.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s2.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s3.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s4.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s1.jpg" width="125" height="40" alt="" class="inspiration" /></a> </div>
  </div>
</div>
<div id="footer">
  <div id="footer_content">
    <div id="copyrights"> Quartz Solution.&copy; All Rights Reserved 2007 </div>
    <div>
      <ul class="footer_menu">
        <li><a href="http://www.free-css.com/" class="nav2">home </a></li>
        <li><a href="http://www.free-css.com/" class="nav2">services</a></li>
        <li><a href="http://www.free-css.com/" class="nav2">gallery</a></li>
        <li><a href="http://www.free-css.com/" class="nav2">contact</a></li>
      </ul>
    </div>
    <div id="madeby"> <a href="http://www.csscreme.com"><img src="images/csscreme_link.jpg" width="125" height="40" border="0" alt="" /></a><br />
      <a target="_blank" href="http://validator.w3.org/check?uri=referer">Xhtml</a> <a target="_blank" href="http://jigsaw.w3.org/css-validator/check/referer">css</a> </div>
  </div>
</div>
</body>
</html>

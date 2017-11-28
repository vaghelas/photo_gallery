<?php include("buyermaintop.php");?>
  <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content_left">
    <div class="title"> Welcome to our photoGallery </div>
    <div class="content_text"> 
   <?php  if(isset($_POST['submit']))
{
$name=$_POST["txtname"];
$pass=$_POST["txtpass"];
if($_POST["chkbox"]=="on")
{
setcookie("namea",$name,time()*3600);
setcookie("nameb",$pass,time()*3600);
}
}
?>

    <table>
    	<form action="" method="post">
        <tr>
        <td>
        username:</td>
        <td>
        <input type="text" name="txtusername" id="username" type="text" />
        </td>
        </tr>
       <tr>
       <td>
        password:</td>
        <td>
        <input type="password" name="txtpassword" id="password" type="password"  />
        </td></tr>
		<tr>
        <td colspan="2" align="center">
        <input type="checkbox" name="" id="remember" />Remember me</label>
        </td></td>
		<tr><td colspan="2" align="center">
        <button type="submit" name="submit">Login</button>
        </td></tr>
	   </form></table>
                    <?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("gallery");
if(isset($_POST['submit']))
{
$username=$_POST['txtusername'];
$password=$_POST['txtpassword'];
$sql=mysql_query("select * from sellerreg where username='$username' and password='$password' and roll='buyer' and status='Active'");
if(mysql_num_rows($sql)==1)
{
$_SESSION['username']=$_POST['txtusername'];
while($row=mysql_fetch_array($sql))
{
$_SESSION['sellerid']=$row[0];
			/*$sql1=mysql_query("select * from sellerphotomapping");
			while($row1=mysql_fetch_array($sql1))
			{
				$id=$row1[0];
				$eid=$row1[2];
			*/	
		
		 header('location:../event.php');
		//mysql_query("insert into tmp_");
		
		}	
		}
else
{
echo "Invalid Usename/Password";
}
}
?>

    
    
     </div>
    <div class="title"> Partners </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/csscreme.jpg" width="106" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/wallpaperstock.jpg" width="100" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/inethouse.jpg" width="103" height="34" alt="" class="inspiration" /></a> </div>
  </div>
  <div id="page_content_right">
    <div class="title"> Latest photos </div>
    <div class="content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    <div class="content_text"> <a href="details.html"><img src="images/pic/1.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/2.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/3.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/4.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/5.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/6.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/7.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/8.jpg" width="100" height="100" alt="" class="gallery" /></a> <a href="details.html"><img src="images/pic/9.jpg" width="100" height="100" alt="" class="gallery" /></a> </div>
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

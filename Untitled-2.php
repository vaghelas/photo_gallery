<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
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
<form method="post" action="">
UserName :<input type="text" name="txtname"  value="<?php echo $_COOKIE["namea"]; ?>" />
Password:<input type="password" name="txtpass" value="<?php echo $_COOKIE["nameb"]; ?>"/>
Remember Me:<input type="checkbox" name="chkbox" />
<input type="submit" name="submit" value="Login" />
</form>


</body>
</html>

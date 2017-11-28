<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$adminid=$_REQUEST['adminid'];

$sql=mysql_query("select * from adminreg where adminid='$adminid'");
while($row=mysql_fetch_array($sql))
{
//$adminid=$row[0];
$name=$row[1];
$address=$row[2];
$gender=$row[3];
$birthdate=$row[4];
$city=$row[5];
$area=$row[6];
$contactno=$row[7];
$education=$row[8];
$email=$row[9];
$username=$row[10];
$password=$row[11];
$roll=$row[12];



}
if(isset($_POST['submit']))
{
$name=$_POST['txtname'];
$address=$_POST['txtaddress'];
$gender=$_POST['optionsRadios'];
$birthdate=$_POST['txtbod'];
$city=$_POST['city'];
$area=$_POST['area'];
$contactno=$_POST['txtcontactno'];
$education=$_POST['txteducation'];
$email=$_POST['txtemail'];
$username=$_POST['txtusername'];
$pass=$_POST['txtpass'];
$roll=$_POST['roll'];

	mysql_query("update adminreg set name='$name',address='$address',gender='$gender',birthdate='$birthdate',city='$city',area='$area',contactno='$contactno',education='$education',email='$email',username='$username',password='$password',roll='$roll',name='$name',name='$name' where id='$id' ");
	echo "data updated";
	echo "<a href='adminview.php'>Return</a>";
	}
	?>

<form method="post">
<b>Name:</b>
<input type="text" name="txtname" <?php echo $name1; ?> /><br />
<br />
<b>description:</b>
<input type="text" name="txtdis" <?php echo $dis1; ?> /><br />
<br />
<input type="submit" name="btnsubmit" value="submit" />
<br />
<br />
</form>


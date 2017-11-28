<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
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
if(isset($_POST['submit']))
{
//move_uploaded_file($_FILES['file']['tmp_name'],"s.ellerphoto/".$_FILES['file']['name']);
mysql_query("insert into adminreg(name,address,gender,birthdate,city,area,contactno,education,email,username,password,roll) values('$name','$address','$gender','$birthdate','$city','$area','$contactno','$education','$email','$username','$pass','$roll')"); 
echo "record insert successfully....";
}

?>

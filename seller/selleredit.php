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
$photo=$_FILES["file"]["name"];
$email1=$_POST['txtemail'];
$username1=$_POST['txtusername'];
$password1=$_POST['txtpass'];
if($photo == null || $photo == "")
{
$sql=mysql_query("update sellerreg set name='$name1',address='$address1',gender='$gender1',bd='$bd1',city='$city1',area='$area1',contactno='$contactno1',speciality='$speciality1',awardwin='$awardwin1',email='$email1',username='$username1',password='$password1' where sellerid='$sellerid'");
//echo "record update1";
header("location:sellerview.php");

}

else
{
 $extarray=array("gif","jpg","jpeg","png");
  //$photo=$_FILES['file']['name'];
  $temp =explode(".",$photo);
  $temp1=end($temp);
  if((( $_FILES['file']['type'] = "images/jpeg")
    || ( $_FILES['file']['type'] = "images/jpg")
	 || ( $_FILES['file']['type'] = "images/png")
	 || ( $_FILES['file']['type'] = "images/gif"))
	 && ($_FILES['file']['size'] <2000000)
	 && in_array($temp1,$extarray))
	 {
	 $tmpname=$_FILES['file']['tmp_name'];
	 echo $filename=$_FILES['file']['name'];
	 }
if(move_uploaded_file($tmpname,"photomapping/" .$filename))
{

$sql=mysql_query("update sellerreg set name='$name1',address='$address1',gender='$gender1',bd='$bd1',city='$city1',area='$area1',contactno='$contactno1',speciality='$speciality1',awardwin='$awardwin1',photo='$filename',email='$email1',username='$username1',password='$password1' where sellerid='$sellerid'");
header('location:sellerview.php');
}
}
}
?>
<?php include('topmenu.php'); 
include('leftmenu.php');
include('middlemenu.php');

?>

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
echo '<option value="'.$row[0].'" selected="selected">'.$row[2].'</option>';
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

if($photo == null || $photo=="")
{
echo "<img src='photomapping/1.jpg' alt='1.jpg' width='100'>"; 
}
else
{

echo "<img src='photomapping/$photo' alt='$photo' width='100'>"; 
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
			
<?php include('footer.php');?>
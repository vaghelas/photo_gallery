<?php
include("../connection/conn.php");
 $id=$_REQUEST['id'];
 $eid=$_REQUEST['eid'];

$sql=mysql_query("select * from sellerphotomapping where id='$id'");
while($row=mysql_fetch_row($sql))
{
$id=$row[0];
$photo=$row[3];
$cost=$row[4];
$description=$row[5];
$sizepx=$row[6];
$sizeinch=$row[7];
$sizecm=$row[8];
$sizebytes=$row[9];
$qty=$row[10];
$checksize=$row[11];
$checksize1 =explode(",",$checksize);
$checksize2 =end($checksize1);
}
$sql1=mysql_query("select * from sellerevent where eid='$eid'");
while($row1=mysql_fetch_row($sql1))
{
$eid=$row1[0];
$category=$row1[2];
}
if(isset($_POST['submit']))
{
  $title=$_POST['sellerevent'];
 //$photo=$_FILES['file']['name'];
 $cost1=$_POST['txtcost'];
 $description1=$_POST['txtdes'];
 $sizepx1=$_POST['sizepx'];
 $sizeinch1=$_POST['sizeinch'];
 $sizecm1=$_POST['sizecm'];
 $sizebytes1=$_POST['sizebytes'];
 $qty1=$_POST['txtqty'];
 $checksize3 =implode(",",$_POST['txtcheck']);

if($_FILES['file']['name']==null || $_FILES['file']['name']=="")
{
$sql=mysql_query("update sellerphotomapping set eid='$eid',cost='$cost1',description='$description1',sizepx='$sizepx1',sizeinch='$sizeinch1',sizecm='$sizecm1',sizebytes='$sizebytes1',qty='$qty1',checksize='$checksize3' where id='$id'");
header('location:sellerphotomappingview.php');
}

else
{
 $extarray=array("gif","jpg","jpeg","png");
 $photo=$_FILES['file']['name'];
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
	 $filename=$_FILES['file']['name'];

if(move_uploaded_file($tmpname,"photomapping/" .$filename));
{
$sql=mysql_query("update sellerphotomapping set eid='$eid',photo='$filename',cost='$cost1',description='$description1',sizepx='$sizepx1',sizeinch='$sizeinch1',sizecm='$sizecm1',sizebytes='$sizebytes1',qty='$qty1',checksize='$checksize3' where id='$id'");
header('location:sellerphotomappingview.php');
}
}
}
}
?>

<?php  

include("topmenu.php");
include("leftmenu.php");
include("middlemenu.php");

?><div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add Hisrorical Places Photos</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
<form action="" enctype="multipart/form-data" method="post">
<table align="center" >

<tr>
<td> 
Event Name:
</td>
<td>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("gallery");


echo "<select name='sellerevent'>";

echo "<option value='0' >--select--</option>";
$sql2=mysql_query("select * from sellerevent");
while($row2=mysql_fetch_row($sql2))
{?>

<option value='<?php $row1[2]; ?>' <?php echo($title == $row2[2])? 'selected = "selected"' : ''?>><?php echo $row2[2]; ?></option>
<?php
}
echo "</select>";

?>
</td>
</tr>
<tr>
<td> 
photo:
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
Cost:
</td>
<td>
<input type="text" name="txtcost" value="<?php echo $cost;?>"/>
</td>
</tr>
<tr>
<td> 
Description:
</td>
<td>
<input type="text" name="txtdes" value="<?php echo $description;?>" />
</td>
</tr>
<tr>
<td> 
Sizepx:
</td>
<td>
<input type="text" name="sizepx" value="<?php echo $sizepx;?>" />
</td>
</tr>
<tr>
<td> 
Sizeinch:
</td>
<td>
<input type="text" name="sizeinch" value="<?php echo $sizeinch;?>"/>
</td>
</tr>
<tr>
<td> 
Sizecm:
</td>
<td>
<input type="text" name="sizecm" value="<?php echo $sizecm;?>" />
</td>
</tr>
<tr>
<td> 
Sizebytes:
</td>
<td>
<input type="text" name="sizebytes" value="<?php echo $sizebytes;?>"/>
</td>
</tr>
<tr>
<td> 
qty:
</td>
<td>
<input type="text" name="txtqty" value="<?php echo $qty;?>"/>
</td>
</tr>
<tr>
<td>
Select size:
</td>
<td>
<?php
if(in_array("main",$checksize1))echo '<input type="checkbox" name="txtcheck[]" value="main" checked >main'; else echo '<input type="checkbox" name="txtcheck[]" value="main">main';
if(in_array("sub",$checksize1))echo '<input type="checkbox" name="txtcheck[]" value="sub" checked >sub';  else echo '<input type="checkbox" name="txtcheck[]" value="sub">sub';
?>
</td>
</tr>
<tr>
<td colspan="2" align="center"> 
<input type="submit" value="Save Changes" name="submit" class="btn btn-primary"/>
<button class="btn">Cancel</button>
  </div>
							

</td>
</tr>
</form>
</table>
<?php include("footer.php"); ?>
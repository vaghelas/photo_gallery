<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$photoid=$_REQUEST['photoid'];
$cid=$_REQUEST['cid'];
$sql=mysql_query("select * from photodetail where photoid='$photoid'");
while($row=mysql_fetch_array($sql))
{
//$adminid=$row[0];
$photoid=$row[0];
$sellerid=$row[1];
$name=$row[2];
$photo=$row[3];
$photocode=$row[4];
$description=$row[5];
$size=$row[6];
//$category=$row[7];
}
$sql1=mysql_query("select * from category where cid='$cid'");
while($row1=mysql_fetch_row($sql1))
{
$cid=$row1[0];
$category=$row1[1];
}

if(isset($_POST['submit']))
{
$name=$_POST['txtname'];
$photo=$_FILES['file']['name'];
$code=$_POST['txtcode'];
$description=$_POST['txtdesc'];
$size=$_POST['txtsize'];
$category=$_POST['category'];

if($photo == null || $photo == "")
{
mysql_query("update photodetail set sellerid='$sellerid', name='$name',photocode='$photocode',description='$description',size='$size',category='$category' where photoid='$photoid'"); 
//echo "record update1";
header("location:photodetailview.php?msg=update");

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
mysql_query("update photodetail set sellerid='$sellerid', name='$name',photo='$filename',photocode='$photocode',description='$description',size='$size',category='$category' where photoid='$photoid'"); 
//echo "record update successfully....";
	 
header("location:photodetailview.php?msg=update");
}
}
}
?>


<?php
include("topmenu.php");
include('leftmenu.php');
include('middlemenu.php');
?>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> New Photodetail</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
                        
  <form action="" enctype="multipart/form-data" method="post">
<table align="center">

<tr>
<td> 
Name:
</td>
<td>
<input type="text" name="txtname" class="text1" value="<?php echo $name; ?>"/>
</td>
</tr>
<tr>
<td>
Photo:
</td>
<td>

<input type="file" name="file" class="text1" value="<?php echo $photo; ?>" />
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
Code:
</td>
<td>

<input type="text" name="txtcode" class="text1" value="<?php echo $photocode; ?>"/>
</td>
</tr>
<tr>
<td> 
Description:
</td>
<td>
<input type="text" name="txtdesc" class="text1" value="<?php echo $description; ?>"/>
</td>
</tr>
<tr>
<td>
Size:
</td>
<td>
<input type="text" name="txtsize" class="text1" value="<?php echo $size; ?>" />
</td>
</tr>
<tr>

<td colspan="2">
Category:
&nbsp;
&nbsp;

<?php 
mysql_connect("localhost","root","");
mysql_select_db("gallery");


echo "<select name='category' class='text1'>";

echo "<option value='0' >--select--</option>";
$sql2=mysql_query("select category from category where cid='$cid'");
while($row2=mysql_fetch_row($sql2))
{?>

<option value='<?php $row1[1]; ?>' <?php echo($category == $row2[1])? 'selected="selected"' : ''?>><?php echo $row2[1]; ?></option>
<?php
}
echo "</select>";

?>
?>
<br/>
<br/>
</td>
</tr>

<tr>

<td colspan="2" align="center"> 
<input type="submit" value="Save Changes" name="submit" class="btn btn-primary"/>
<button class="btn">Cancel</button>
  </div>
							
</td>
</tr>
</table>
</form>
  
                         	</div>
				</div><!--/span-->

			</div><!--/row-->


		<?php include('footer.php'); ?>
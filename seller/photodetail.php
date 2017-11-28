<?php include('topmenu.php'); 
include('leftmenu.php');
include('middlemenu.php');

?>

<div align="right">
			 <a class='btn btn-info' href='photodetailview.php'>
<i class='icon-edit icon-white'></i>  
Back                                           
</a>
</div>
	<div class="container-fluid">
		<div class="row-fluid">

							
			<div class="row-fluid sortable">
          		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Members</h2>
						<div class="box-icon">
                           <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                 	
                        
  <form action="insertphotodetail.php" enctype="multipart/form-data" method="post">
<table align="center">

<tr>
<td> 
Name:
</td>
<td>
<input type="text" name="txtname" class="text1"/>
</td>
</tr>
<tr>
<td>
Photo:
</td>
<td>

<input type="file" name="file" class="text1" />
</td>
</tr>
<tr>
<td>
Code:
</td>
<td>

<input type="text" name="txtcode" class="text1"/>
</td>
</tr>
<tr>
<td> 
Description:
</td>
<td>
<input type="text" name="txtdesc" class="text1" />
</td>
</tr>
<tr>
<td>
Size:
</td>
<td>
<input type="text" name="txtsize" class="text1" />
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

echo "<option value='0'>--select--</option>";
$sql=mysql_query("select  category from category");
while($row=mysql_fetch_row($sql))
{
echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select>";

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
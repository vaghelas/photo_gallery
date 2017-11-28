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
						<form action="sellerinsert.php" enctype="multipart/form-data" method="post">
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
gender:
</td>
<td>
<input type="radio" name="txtradio" value="male" />male
<input type="radio" name="txtradio" value="female" />female
</td>
</tr>
<tr>
<td> 
Birth Date:
</td>
<td>
<input type="text" name="txtbod" />
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
Speciality:
</td>
<td>
<input type="text" name="txtspeciality" />
</td>
</tr>
<tr>
<td> 
Awardwin:
</td>
<td>
<input type="text" name="txtaward" />
</td>
</tr>
<tr>
<td> 
Photo:
</td>
<td>

<input type="file" name="file" />
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
<input type="text" name="txtpass" />
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
<?php include('footer.php'); ?>
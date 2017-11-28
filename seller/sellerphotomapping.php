<?php
include("topmenu.php");
include('leftmenu.php');
include('middlemenu.php');
?>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
                        
<form action='sellerphotomappinginsert.php' enctype="multipart/form-data" method="post">
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

echo "<option value='0'>--select--</option>";
$sql=mysql_query("select * from sellerevent");
while($row=mysql_fetch_row($sql))
{
echo "<option value='$row[0]'>$row[2]</option>";
}
echo "</select>";

?>
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
Cost:
</td>
<td>
<input type="text" name="txtcost" />
</td>
</tr>
<tr>
<td> 
Description:
</td>
<td>
<input type="text" name="txtdes" />
</td>
</tr>
<tr>
<td> 
Sizepx:
</td>
<td>
<input type="text" name="sizepx" />
</td>
</tr>
<tr>
<td> 
Sizeinch:
</td>
<td>
<input type="text" name="sizeinch" />
</td>
</tr>
<tr>
<td> 
Sizecm:
</td>
<td>
<input type="text" name="sizecm" />
</td>
</tr>
<tr>
<td> 
Sizebytes:
</td>
<td>
<input type="text" name="sizebytes" />
</td>
</tr>
<tr>
<td> 
Quality:
</td>
<td>
<input type="text" name="txtqty" />
</td>
</tr>
<tr>
<td> 
Select size:
</td>
<td>
<input type="checkbox" name="txtcheck" value="main" />Main
<input type="checkbox" name="txtcheck" value="sub" />Sub
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

                        	</div>
				</div><!--/span-->

			</div><!--/row-->


	
<?php include("footer.php"); ?>
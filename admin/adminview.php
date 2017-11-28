<?php ob_start(); 

include("topmenu.php");
include("leftmenu.php");
include("middlemenu.php");

?>
<!-- <div align="right">
			 <a class="btn btn-info" href="adminindex.php">
<i class="icon-edit icon-white"></i>  
Back                                           
</a>
-->
							
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
                 
 
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$_session['username'];
$sql=mysql_query("select * from sellerreg");
?>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>AdminId</th>
								  <th>Name</th>
								  <th>Address</th>
								  <th>city</th>
								  <th>Area</th>
                                   <th>Contectno</th>
                                    <th>Email</th>
                                     <th>roll</th>
                                     <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
                            <?php
                           while($row=mysql_fetch_array($sql))
{
$adminid=$row[0];

echo "<td>";
echo $row[0];
echo "</td>";
echo "<td>";
echo $row[1];
echo "</td>";
echo "<td>";
echo $row[2];
echo "</td>";
echo "<td>";
echo $row[5];
echo "</td>";
echo "<td>";
echo $row[6];
echo "</td>";
echo "<td>";
echo $row[7];
echo "</td>";
echo "<td>";
echo $row[12];
echo "</td>";
echo "<td>";
echo $row[16];
echo "</td>";

echo "<td class='center'>";
echo"<a class='btn btn-success' href='adminreg.php'>
<i class='icon-zoom-in icon-white'></i>  
Add                                            
</a>";
echo"<a class='btn btn-info' href='adminregedit.php?sellerid=$sellerid'>
<i class='icon-edit icon-white'></i>  
Edit                                            
</a>";
echo "<a class='btn btn-danger' href='admindel.php?sellerid=$sellerid'>
<i class='icon-trash icon-white'></i> 
Delete
</a>
</td>
</tr>
</tr>";
}
?>
</table>

                        	</div>
				</div><!--/span-->

			</div><!--/row-->


				
		<?php include ("footer.php");?>
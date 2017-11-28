<?php ob_start(); 

include("topmenu.php");
include("leftmenu.php");
include("middlemenu.php");

?>
 <div align="right">
			 <a class="btn btn-info" href="sellerdataview.php">
<i class="icon-edit icon-white"></i>  
Back                                           
</a>
</div>
							
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
                 
  <div class="span6"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select aria-controls="DataTables_Table_0" size="1" name="DataTables_Table_0_length"><option selected="selected" value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>records per page</label></div></div><div class="span6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search: <input aria-controls="DataTables_Table_0" type="text"></label></div></div>

<?php
session_start();
include("../connection/conn.php");
$_SESSION['username'];
//$sellerid=$_SESSION['sellerid'];

$sql=mysql_query("select * from photodetail");
?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Photoid</th>
								  <th>sellername</th>
								  <th>Photoname</th>
								  <th>Photo</th>
								  <th>Photocode</th>
                                   <th>Description</th>
                                    <th>Size</th>
                                     <th>Category</th>
                                     <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
                            <?php
                           while($row=mysql_fetch_array($sql))
{
$photoid=$row[0];

echo "<td>";
echo $row[0];
echo "</td>";
echo "<td>";
$seller=$row[1];
$sql1=mysql_query("select * from sellerreg where sellerid='$seller'");
if($row1=mysql_fetch_array($sql1))
{
echo $row1[1];
}
echo "</td>";
echo "<td>";
echo $row[2];
echo "</td>";
echo "<td>";
echo $row[3];
echo "</td>";
echo "<td>";
echo $row[4];
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
echo "<td class='center'>";
echo"<a class='btn btn-success' href='photodetail.php'>
<i class='icon-zoom-in icon-white'></i>  
Add                                            
</a>";
echo"<a class='btn btn-info' href='photodetailedit.php?photoid=$photoid'>
<i class='icon-edit icon-white'></i>  
Edit                                            
</a>";
echo "<a class='btn btn-danger' href='photodetaildel.php?photoid=$photoid'>
<i class='icon-trash icon-white'></i> 
Delete
</a>
</td>
</tr>
</tr>";
}
?>
</table>

<div class="span12"><div id="DataTables_Table_0_info" class="dataTables_info">Showing 1 to 10 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div>		
		
		<div class="modal hide fade" id="myModal">
 <?php include('footer.php'); ?>       						
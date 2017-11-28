<?php
include("topmenu.php");
include("leftmenu.php");
include("middlemenu.php");

?>				

<!--			 <div align="right">
             <a class="btn btn-info" href="adminindex.php">
                    <i class="icon-edit icon-white"></i>  
                    Back                                           
                    </a>	
            </div>
-->			
		
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Seller View</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
<?php
include("../connection/conn.php");
$sql=mysql_query("select * from city");
?>
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>CityId</th>
								  <th>City</th>
								     <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
                            <?php
                           while($row=mysql_fetch_array($sql))
{
$cityid=$row[0];

echo "<td>";
echo $row[0];
echo "</td>";
echo "<td>";
echo $row[1];
echo "</td>";
echo "<td class='center'>";
echo"<a class='btn btn-success' href='addcity.php'>
<i class='icon-zoom-in icon-white'></i>  
Add                                            
</a>";
echo"<a class='btn btn-info' href='cityedit.php?cityid=$cityid'>
<i class='icon-edit icon-white'></i>  
Edit                                            
</a>";
echo "<a class='btn btn-danger' href='citydel.php?cityid=$cityid'>
<i class='icon-trash icon-white'></i> 
Delete
</a>
</td>
</tr>
</tr>";
}
?>
</table>
			</div><!--/row-->

			<div class="row-fluid sortable">
				</div><!--/span-->
				
				<!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid sortable">	
				</div><!--/span-->
				
				</div><!--/span-->
			
			</div><!--/row-->
			
			<div class="row-fluid sortable">	
				</div><!--/span-->
			</div><!--/row-->
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<?php include("footer.php");?>
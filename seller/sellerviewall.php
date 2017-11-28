<?php include('topmenu.php'); 
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
						
                        
<?php 
session_start();
include("../connection/conn.php");
 $_SESSION['username'];
$sellerid=$_SESSION['sellerid'];

$sql=mysql_query("select * from photodetail  where sellerid='$sellerid'");
echo "<table border='1'>";
echo "<tr>";
echo "<th>";
echo "PhotoId";
echo "</th>";
echo "<th>";
echo "Sellername";
echo "</th>";
echo "<th>";
echo "photoname";
echo "</th>";
echo "<th>";
echo "photo";
echo "</th>";
echo "<th>";
echo "photocode";
echo "</th>";
echo "<th>";
echo "Description";
echo "</th>";
echo "<th>";
echo "Size";
echo "</th>";
echo "<th>";
echo "Category";
echo "</th>";

echo "<th>";
//echo "<a class='btn btn-info' href='#'>";
echo "<i class='icon-edit icon-white'>";
echo "</i>";
echo "Edit";                                            
//echo "</a>";
echo "</th>";
echo "<th>";
//echo "<a class='btn btn-danger' href='#'>";
echo "<i class='icon-trash icon-white'>";
echo "</i>";
echo "Delete";
//echo "</a>";
echo "</th>";
echo "</tr>";
echo "<tr>";
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

echo "<td>";
echo "<a class='btn btn-info' href='photodetailedit.php?photoid=$photoid'>Edit</a>";
echo "</td>";
echo "<td>";

echo "<a class='btn btn-danger' href='photodetaildel.php?photoid=$photoid'>Delete</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>

                        	</div>
				</div><!--/span-->

			</div><!--/row-->


<?php include('footer.php'); ?>
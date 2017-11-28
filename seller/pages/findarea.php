<?php echo $stateid=intval($_GET['state']);
echo $cityid=intval($_GET['city']);
$link = mysql_connect('localhost', 'root', ''); //change the configuration in required

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("gallery")or die("Could Not Connect To Database");
$query="SELECT * FROM area WHERE cityid='$cityid'";
$result=mysql_query($query);

?>
<select name="area" >
<option value="0">Select Area</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['areaid']?>"><?php echo $row['area'];?></option>
<?php } ?>
</select>

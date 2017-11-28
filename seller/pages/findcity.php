<?php echo  $state=intval($_GET['state']);

$link = mysql_connect('localhost', 'root', ''); //change the configuration in required

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("gallery")or die("Could Not Connect To Database");
$query="SELECT * FROM city";
$result=mysql_query($query);

?>
<select name="city" onChange="getarea(<?php echo $state; ?>,this.value)">
<option value="0">Select city</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['city']?>"><?php echo $row['city'];?></option>
<?php } ?>
</select>

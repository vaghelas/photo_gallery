<?php
session_start();
 $sellerid=$_SESSION['sellerid'];
mysql_connect("localhost","root","");
mysql_select_db("gallery");
//echo $cartid=$_REQUEST['cartid'];
//echo $eid=$_REQUEST['eid'];
//echo $id=$_REQUEST['id'];

 if(isset($_POST['submit']))
 {
	 	   $sql=mysql_query("SELECT cartid,sellerid,eid,id FROM tmp_cart where sellerid='$sellerid' ");
		while($row=mysql_fetch_row($sql))
		{
			$cartid=$row[0];
			$sellerid=$row[1];
			$eid=$row[2];
			$id=$row[3];
		
		$sql1=mysql_query("select sum(cost) from tmp_cart where sellerid='$sellerid'");
		while ($row1 = mysql_fetch_array($sql1))
		 {
		$row1[0];
		echo  $amount=$_SESSION['totalcost']=$row1['sum(cost)'];
		 echo "<br/>";
		}
		
mysql_query("INSERT INTO orders(cartid,sellerid,eid,id,amount,status) values('$row[0]','$row[1]','$row[2]','$row[3]','$amount','pendding')");


		}
		mysql_query("delete from tmp_cart where sellerid='$sellerid'");

$sql3=mysql_query("select * from orders order by orderid desc limit 1");
while($row3=mysql_fetch_row($sql3))
{
	 $orderid=$row3[0];
}
header('location:payments.php?sellerid='.$sellerid.'&orderid='.$orderid.'');
		}
		
 
?>
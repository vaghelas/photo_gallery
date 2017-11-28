
<?php
include 'adminheader.php';
?>

<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<!--<div id="page-heading"><h1>Country</h1></div>-->


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	<?php 
		
		if(isset($_REQUEST['msg'])=='success')
		{
	
		echo '<div id="successMessage" style="background:#00CCFF:color:#fff;">Country saved successfully!</div>';
		}
		
		?>
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Add country details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<!--<div class="step-no-off">2</div>
			<div class="step-light-left">Select related products</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Preview</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>-->
		</div>
		<!--  end step-holder -->
	 
		<!-- start id-form -->
        
         <form action="action/insertcountry.php" method="POST">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Country name:</th>
			<td><input type="text" class="inp-form" name="txtcountryname" id="txtcountryname" /></td>
			<td></td>
		</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" name="submit" id="submit1" />
			<input type="submit" value="" class="form-reset" name="reset" id="reset"  />
		</td>
		<td></td>
	</tr>
	</table>
    </form>
    	
	<!-- end id-form  -->

	
	
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

<?php
include 'adminfooter.php';
?>

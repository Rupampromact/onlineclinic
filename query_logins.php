<style type="text/css">
.log td{padding: 5px;cursor: pointer;border-spacing: 2px;}
.log{background-color: skyblue;border-spacing: 8px;color: black;font-weight: bold;text-align: center;padding: 5px;position: fixed;bottom: 0;right: 0;border-color: red;}	
</style>

<?php
if(isset($_SESSION['doc_id'])){
	$first = "Logout";
	$second = "";
}
else{
	$first = "Login To reply";
	$second = "Register To reply";
}
?>

<table class="log" border="8"><tr>

<td onClick="document.location.href='doctorsignin.php';"><?php echo $first; ?></td></tr><tr>
<td onClick="document.location.href='doctorlogin.php';"><?php echo $second; ?></td>

</tr>

</table>

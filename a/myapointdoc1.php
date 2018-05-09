<?php
include "mainpage.php";
session_start();
if(isset($_SESSION['doc_id1'])){
	$id = $_SESSION['doc_id1'];
}else{
	header('location:doctorlogin1.php');
}
?>

<table border="3">
	<tr>
		<th>Patient ID</th><th>Month</th><th>Date</th><th>Time</th>
	</tr>

<?php

include "../conn.php";


$sql = "select patient_id,a_month,a_date,a_time from take_apoint where doctor_id=".$_SESSION['doc_id1'].";";

$result = $conn->query($sql); 


while($getresult = $result->fetch_assoc()){ 
	$id_no = $getresult['patient_id'];
	$m = $getresult['a_month'];
	$d = $getresult['a_date'];
	$t = $getresult['a_time'];
?>
<tr>
	<td><?php echo $id_no ;?></td>
	<td><?php echo $m;?></td>
	<td><?php echo $d;?></td>
	<td><?php echo $t;?></td>
</tr>

<?php
}


?>
</table>
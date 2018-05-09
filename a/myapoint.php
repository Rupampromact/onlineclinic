<?php include "patientmain.php"; ?>

<?php

include "../conn.php";
if(isset($_GET['s_id'])){
	$ids = $_GET['s_id'];
$sql1 = "delete from take_apont where serial_no=".$ids.";";
if($conn->query($sql1)===TRUE){

}
else{

}
}

?>
<table border="3">
	<tr>
		<th>Doctor Name</th><th>Email</th><th>City</th><th>Month</th><th>Date</th><th>Time</th><th>Button</th>
	</tr>

<?php

include "../conn.php";
session_start();
$p_id = $_SESSION['p_id1'];


$sql = "select serial_no,d_name1,d_email1,d_city1,a_month,a_date,a_time from doctor1,take_apont where doctor_id=d_id1 and patient_id=".$p_id.";";

$result = $conn->query($sql); 
if ($result->num_rows > 0) {

while($getresult = $result->fetch_assoc()){ 
	$id_no = $getresult['serial_no'];
	$dname = $getresult['d_name1'];
	$email = $getresult['d_email1'];
	$city = $getresult['d_city1'];
	$month = $getresult['a_month'];
	$date = $getresult['a_date'];
	$time = $getresult['a_time'];
?>
<tr>
	<td><?php echo $dname ;?></td>
	<td><?php echo $email;?></td>
	<td><?php echo $city;?></td>
	<td><?php echo $month;?></td>
	<td><?php echo $date;?></td>
	<td><?php echo $time;?></td>
	<td><input type="button" value="Delete" onClick="document.location.href='myapoint.php?s_id=<?php echo $id_no;?>';"></td>
</tr>

<?php
}
}


?>
</table>
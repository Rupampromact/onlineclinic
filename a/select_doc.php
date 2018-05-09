<?php
extract($_REQUEST);
$city = $_POST['value'];
?>
	<?php

include "../conn.php";
$sql="select d_id1,d_name1,d_city1 from doctor1 where d_city1='".$city."'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {

while($getresult = $result->fetch_assoc()){ 
$name = $getresult["d_name1"];
$city = $getresult['d_city1'];
$iddoc = $getresult['d_id1'];
?>

	<option value="<?php echo $iddoc; ?>">
		<?php echo $name;?>
	</option>

<?php
}}
?>
 
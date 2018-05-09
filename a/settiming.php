<?php
include "mainpage.php";
session_start();
if(isset($_SESSION['doc_id1'])){
	$id = $_SESSION['doc_id1'];
}else{
	header('location:doctorlogin1.php');
}
?>
<form action="#" method="POST">
<!--<input type="number" placeholder="Start Time" name="s">-->
<select name="s">
<option value="0">Select Start time</option>
<option value="6">6:00-6:30</option>
<option value="6">6:30-7:00</option>
<option value="7">7:00-7:30</option>
<option value="7">7:30-8:00</option>
<option value="8">8:00-8:30</option>
<option value="8">8:30-9:00</option>
<option value="9">9:00-9:30</option>
<option value="9">9:30-10:00</option>
<option value="10">10:00-10:30</option>
<option value="10">10:30-11:00</option>
<option value="11">11:00-11:30</option>
<option value="11">11:30-12:00</option>
<option value="12">12:00-12:30</option>
<option value="12">12:30-1:00</option>
<option value="13">1:00-1:30</option>
<option value="13">1:30-2:00</option>
<option value="14">2:00-2:30</option>
<option value="14">2:30-3:00</option>
<option value="15">3:00-3:30</option>
<option value="15">3:30-4:00</option>
<option value="16">4:00-4:30</option>
<option value="16">4:30-5:00</option>
<option value="17">5:00-5:30</option>
<option value="17">5:30-6:00</option>
<option value="18">6:00-6:30</option>
<option value="18">6:30-7:00</option>
<option value="19">7:00-7:30</option>
<option value="19">7:30-8:00</option>
<option value="20">8:00-8:30</option>
<option value="20">8:30-9:00</option>
<option value="21">9:00-9:30</option>
<option value="21">9:30-10:00</option>
<option value="22">10:00-10:30</option>
<option value="22">10:30-11:00</option>
<option value="23">11:00-11:30</option>
<option value="23">11:30-12:00</option>
</select>

<!--<input type="number" placeholder="End Time" name="e">-->
<select name="e">
<option value="0">Select End Time</option>
<option value="6">6:00-6:30</option>
<option value="6">6:30-7:00</option>
<option value="7">7:00-7:30</option>
<option value="7">7:30-8:00</option>
<option value="8">8:00-8:30</option>
<option value="8">8:30-9:00</option>
<option value="9">9:00-9:30</option>
<option value="9">9:30-10:00</option>
<option value="10">10:00-10:30</option>
<option value="10">10:30-11:00</option>
<option value="11">11:00-11:30</option>
<option value="11">11:30-12:00</option>
<option value="12">12:00-12:30</option>
<option value="12">12:30-1:00</option>
<option value="13">1:00-1:30</option>
<option value="13">1:30-2:00</option>
<option value="14">2:00-2:30</option>
<option value="14">2:30-3:00</option>
<option value="15">3:00-3:30</option>
<option value="15">3:30-4:00</option>
<option value="16">4:00-4:30</option>
<option value="16">4:30-5:00</option>
<option value="17">5:00-5:30</option>
<option value="17">5:30-6:00</option>
<option value="18">6:00-6:30</option>
<option value="18">6:30-7:00</option>
<option value="19">7:00-7:30</option>
<option value="19">7:30-8:00</option>
<option value="20">8:00-8:30</option>
<option value="20">8:30-9:00</option>
<option value="21">9:00-9:30</option>
<option value="21">9:30-10:00</option>
<option value="22">10:00-10:30</option>
<option value="22">10:30-11:00</option>
<option value="23">11:00-11:30</option>
<option value="23">11:30-12:00</option>
</select>
<input type="submit" value="Set Time" name="btn">
</form>
<?php

include "../conn.php";
if(isset($_POST['btn'])){
	$start = $_POST['s'];
	$end = $_POST['e'];
	$sql = "insert into set_break(doc_id,start_time_d,end_time_d) values (".$id.",".$start.",".$end.")";
	if($conn->query($sql)===true){
		header('location:settiming.php');
	}else{

	}
}

?>
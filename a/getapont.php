<?php
include '../conn.php';
if(isset($_GET['doc_id'])){
	$date = $_GET['date'];
	$month = $_GET['month'];
	$doc_id = $_GET['doc_id'];
	$time = $_POST['check'];
}
session_start();
if(isset($_SESSION['p_id1'])){
	$p_id = $_SESSION['p_id1'];
	$sql= "INSERT into take_apont(doctor_id,patient_id,a_month,a_date,a_time) values(".$doc_id.",".$p_id.",".$month.",".$date.",".$time.")";

	if ($conn->query($sql) === TRUE) {
		echo "Appontment taken";
		header("location:patientmain.php");
	}else{
		echo "error";
	}
}else{
	header('location:plogin.php');
}
?>
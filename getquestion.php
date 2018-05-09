<?php
include "conn.php";

$name= $_POST['username'];
$email= $_POST['email'];
$mob= $_POST['mobno'];
$question= $_POST['question'];
$question = htmlspecialchars($question);
$type= $_POST['type'];
$time= date("H:i:s");

$sql1 = "INSERT INTO free_patient (p_name,p_email,p_mob)
VALUES ('".$name."','".$email."','".$mob."');";

$sql2 = "INSERT INTO questions (qus_question,qus_type,qus_time,qus_date)
VALUES ('".$question."',".$type.",'".$time."','SYSDATE()');";

//////////////////////////
$sql4 = "select max(p_id),max(qus_id) from free_patient,questions;"; 
$result1 = $conn->query($sql4); 
$getresult = $result1->fetch_assoc(); 
$p_id = $getresult["max(p_id)"]+1;
$q_id = $getresult["max(qus_id)"]+1;

/////////////////////
$sql3 = "INSERT INTO p_ques (p_id,q_id)
VALUES (".$p_id.",".$q_id.");";

if ($conn->query($sql1) === TRUE) {
	if ($conn->query($sql2) === TRUE) {
 		if ($conn->query($sql3) === TRUE) {
 		   header("location:showanswers.php");
		}
	}
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>
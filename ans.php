<!DOCTYPE html>
<html>
<head>
	<title>Patients Querys</title>
	<style>
.qus_1 tr td textarea{width: 80%;margin: auto 10%;height: 20%;background-color: #ccc;}
.qus_1 tr td input{margin: auto 50%;width: 20%;padding: 5px;border: 5px solid;font-weight: bold;border-radius: 10px;}
.qus_1 tr td input:hover{color: wheat;background-color: black;border-color: green;cursor: pointer;}

.qus_1 {border: 2px solid;padding: 20px;width:80%;background-color: #eee;margin: auto;}
.qus_1 tr:first-child th:first-child{width: 20%;border: 1px solid;}
.qus_1 tr:first-child th:last-child{width: 80%;text-align: left;padding: 10px;color: blue;font-size: 22px;padding-left: 5%;border: 1px dotted red;}
.qus_1 tr:nth-child(2) th:last-child{text-align: right;padding-right: 10%;}

.qus_1 tr .dpic{border: 2px solid;height: 50px;width: 50px;border-radius: 100px;margin:auto 35%;}
.qus_1 .nam{text-align: center;border: 1px dotted bisque;}
.qus_1  .jwab{border: 2px solid;border-radius: 30px;background-color: skyblue;}
</style>

<style type="text/css">
body{background-image: url('images/backquery.jpg');background-position: cover;background-size: 100%;overflow-x: hidden;}
	.header{border: 2px solid;position: relative;float: left;width:95%;margin-left:2.5%;background-color:#666;}

//.second_div{border: 2px solid;float: left;width: 95%;margin-left:2.5%;height: 100%; }
//.second_div .left{border: 2px solid;float: left;width: 20%;height: 100vh;}
</style>
</head>
<body>



<div class="header">
<?php 
include "menu.php";
?>
</div>
<div class="second_div">
<div class="left"></div>
<div class="right">


<?php
session_start();
$q_id = $_GET['id'];

include "conn.php";
try{
$sql4 = "select qus_id,qus_question,type_name,ans_answer,d_name 
		from questions,q_types,d_answers,s_doctors
		where qus_type=type_id and ques_id=qus_id and qus_id=".$q_id."
		and ans_d_id=d_id;"; 

$result1 = $conn->query($sql4); 
$result2 = $conn->query($sql4); 
$getresult1 = $result2->fetch_assoc();
$qusid = $getresult1["qus_id"];
$qus = $getresult1["qus_question"];
$type = $getresult1["type_name"];
?>
<table class="qus_1">

<tr>
<th>Q No:<?php echo $qusid;?></th>
<th>Question: <?php echo $qus; ?></th>
</tr>

<tr>
<th></th>
<th>Type: <?php echo $type; ?></th>
</tr>

<?php
while($getresult = $result1->fetch_assoc()){ 

$doctor = $getresult["d_name"];
$ans = $getresult["ans_answer"];
?>
<tr>
<td><img src=" " class="dpic"/></td>
<td rowspan="2" class="jwab"><?php echo $ans; ?></td>
</tr>
<tr>
<a herf="docprofile.php?id=<?php echo $doctor; ?>"><td class="nam"><?php echo $doctor; ?></td></a>
</tr>

<?php
//}}}else{
//	    echo "Error: " . $sql4 . "<br>" . $conn->error;
//}

}}catch(excption $d){
	echo $d;
}
?>
<?php 
if(!isset($_SESSION['doc_id'])){}else{
?>

<form method="POST" action="ans.php?id=<?php echo $q_id;?>">
<tr><td colspan="2"><textarea name="ans" col="12" rows="8" required></textarea>
</td></tr><tr><td colspan="2">
	<input type="submit" value="Answer"></td></tr>
	</form>

<?php
if(!isset($_POST['ans'])){}else{
$ans = $_POST['ans'];
	if($ans==null){}else{
		$ans = htmlspecialchars($ans);
$qid = $_GET['id'];
$did = $_SESSION['doc_id'];

$sql3 = "INSERT INTO d_answers(ques_id,ans_answer,ans_d_id)
VALUES (".$qid.",'".$ans."',".$did.");";

if ($conn->query($sql3) === TRUE) {
header("location:ans.php?id=$qid&status=yes");
}else{
	echo "error";
			}
		}
	}
}
?>
</table>
</div>
</div>
</body>
<?php
include "query_logins.php";
?>
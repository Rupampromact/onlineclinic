<!DOCTYPE html>
<html>
<head>
	<title>Patients Querys</title>
<style type="text/css">
body{background-image: url('images/backquer1.jpg');background-position: cover;background-size: 100%;overflow-x: hidden;}
	.header{border: 2px solid;position: relative;float: left;width:95%;margin-left:2.5%;background-color:#666;}
}
.second_div{border: 2px solid;float: left;width: 95%;margin-left:2.5%; }
//.second_div .left{border: 2px solid;float: left;width: 20%;height: 100%;}
	
</style>
<style>
a:hover .qushow{box-shadow: 2px 2px 20px red;}

.qushow{width:75%;background-color:#aaa;padding:1%;border-radius:50px;box-shadow:2px 2px 20px blue;margin:2% auto ;}
.qushow tr:first-child td:last-child{background-color: skyblue;width: 90%;border-radius: 0px 50px 0px 0px;border-top:3px double black;border-right: 3px dotted black;}
.qushow tr td .upic{width: 50px;height: 50px;border-radius: 100px;border: 2px solid;margin: auto 30%;float: right;}
.qushow tr:nth-child(3) td:nth-child(4){text-align: right;width: 20%;}
.qushow tr:nth-child(2) td:nth-child(1){width:15%;text-align:center;text-decoration:underline;color: black ;}
.qushow tr:nth-child(2) td:nth-child(4){text-align: right;width: 20%;}
.qushow tr:nth-child(2) td:nth-child(2){text-align: center;background-color:#ff8080;color: #003380;font-weight: bold;}
.qushow tr:nth-child(2) td:nth-child(3){text-align: right;width: 50%;}
.second_div .right a{text-decoration: none;}


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
include 'conn.php';


$sql1 = "select q_id,p_name,qus_question,type_name,qus_time,qus_date 
from free_patient,questions,q_types,p_ques 
where qus_type=type_id and q_id=qus_id and free_patient.p_id=p_ques.p_id order by q_id Desc;";
$result=$conn->query($sql1);
if ($result->num_rows > 0) 
{
            while($row = $result->fetch_assoc())
            { 
            $qus_id = $row['q_id'];
            $patient_name = $row['p_name'];
            $foo = ucwords($patient_name); 
            $question = $row['qus_question'];
            $type = $row['type_name'];
            $type = ucwords($type); 
            $time = $row['qus_time'];
            $date = $row['qus_date'];
            ?>
            <a href="ans.php?id=<?php echo $qus_id;?>">
					<table class="qushow">
					<tr>
					<td><?php if(($qus_id%2)==0){?>
					<img src="images/pt1.png" class="upic"/>
					<?php }else{?>
					<img src="images/pt3.jpg" class="upic"/><?php }?>
					</td>
					<td class="qus" colspan="3"><?php echo $question;?></td>
					</tr>

					<tr>
					<td><?php echo $foo;?></td>
					<td><?php echo $type;?></td>
					<td></td>
					<td><?php echo $time; ?></td>
					</tr>

					<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $date;?></td>
					</tr>

					</table>      </a>      <?php
            }
}

?>
</div></div>
</body>
<?php
include "query_logins.php";
?>
</html>
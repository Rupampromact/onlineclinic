<!DOCTYPE html>
<html>
<head>
	<title>Patients Registration Form</title>
</head>
<style type="text/css">
	.heading{width: 40%;margin:1% auto;font-size:20px;font-family:arial;color:blue;}
input{padding: 1%;}
.main{border: 2px solid burlywood;width: 40%;margin:3% auto;padding: 2%;border-radius: 20px; }
.titles{float: left;width:50%;padding:3%;padding-left: 10%;font-size: 17px;}
.inputs{padding: 3%;}
.btn{margin: auto;width: 20%;padding: 3%;}
.botn{background-color: lightsteelblue;padding: 6%;border: 2px solid;border-radius: 10px;font-weight: bold;color: black;width:80%;}
body{background-color: #ddd;}
</style>
<body>
<?php
if(isset($_GET['doc_id'])){
	$date = $_GET['date'];
	$month = $_GET['month'];
	$doc_id = $_GET['doc_id'];
	$time =$_POST['check'];

}?>

<h1><a href="plogin.php">Login Here</a></h1>

<form action="#" method="POST">

<div class="main">
 <div class="heading">Patient Registration Form</div>
 
 <div class="titles"> Patient Name:  </div>
 <div class="inputs"> <input type="text" name="name" placeholder="User Name..." required />  </div>
 
 <div class="titles"> Email Address:  </div>
 <div class="inputs"> <input type="text" placeholder="Email..." name="email" required />  </div>
 
 <div class="titles"> Mobile No:  </div>
 <div class="inputs"> <input type="text" placeholder="Mobile No..." name="mob" required />  </div>
 
 <div class="titles"> Password:  </div>
 <div class="inputs">  <input type="text" name="pass" placeholder="Password..." required /> </div>
 <div class="titles"> Address:  </div>
 <div class="inputs">  <input type="text" name="adrs" required /> </div>
 
 <div class="titles">  Gender: </div>
 <div class="inputs"> 
<input type="radio" name="gnd" value="male" checked/>Male
<input type="radio" name="gnd" value="Female" />Female 
 </div>
 
 <div class="titles"> CNIC No:  </div>
 <div class="inputs"> <input type="number" name="cnic" required />  </div>
 
 
 <div class="btn">  <input type="submit" value="Submit" name="btn" class="botn"/> </div>
</div>

</form>
</body>
<?php
include "../conn.php";
if(isset($_POST['btn'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$gender = $_POST['gnd'];
	$cnic = $_POST['cnic'];
	$mob = $_POST['mob'];
	$adrs = $_POST['adrs'];
	$sql = "insert into p_patient1(p_name1,p_email1,p_mob1,p_adrs1,p_gender,p_pass1,p_cnic1) values('".$name."','".$email."','".$mob."','".$adrs."','".$gender."','".$pass."','".$cnic."');";
	if($conn->query($sql)===true){
		header('location:plogin.php');
	}else{echo $conn->error;
		header('location:Patientreg.php?status=error');
	}
}


?>
</html>
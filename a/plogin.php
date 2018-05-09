<!DOCTYPE html>
<html>
<head>
	<title>Patients's Login</title>
<style>
body{background-color:#000d33;}
.login{width: 35%;margin: 15% auto;}
a,input{display:block;padding: 2%;width: 80%;margin: 25px auto;box-shadow: 13px 13px 300px whitesmoke;border-radius: 10px;font-weight:  bold; }
input[type=submit]{display:inline; width:100px; background-color: orange;border: 0px;}
a{text-align: center;text-decoration: none;border-top: 1px solid white;width: 75%;border-radius: 0px;border-bottom: 1px solid wheat; }
</style>
</head>
<body>
<?php
session_start();
$_SESSION['p_id1']=null;
?>
<div class="login">

<form action="#" method="POST">
<h1 style="text-align:center;color:wheat;">Welcome</h1>
<input type="text" placeholder="Email..." name="email">
<input type="Password" placeholder="Password..." name="pass">
<div style=" width:80%;margin-left:15px;padding-left:110px;">
<input type="submit" value="back" name="bt1">
<input type="submit" value="Login" name="bt2">
</div>
<a href="#" >Forget Password?</a>
</form>

</div>
<?php
if(isset($_POST['bt1'])){
	header('location:../index.php');}
?>
<?php
include "../conn.php";
if(isset($_POST['bt2'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$sql = "select p_id1,p_email1,p_pass1 from p_patient1 where p_email1='".$email."' and p_pass1='".$pass."';";
	$result = $conn->query($sql); 
if ($result->num_rows > 0) {

$getresult = $result->fetch_assoc(); 

$p_id1 = $getresult["p_id1"];
session_start();
$_SESSION['p_id1']=$p_id1;
header("location:patientmain.php");
}
$conn->close();
}
?>
</body>
</html>

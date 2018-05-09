<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Login</title>
<style>
body{background-color:#000d33;}
.login{width: 35%;margin: 15% auto;}
a,input{display: block;padding: 2%;width: 80%;margin: 25px auto;box-shadow: 13px 13px 300px whitesmoke;border-radius: 10px;font-weight:  bold; }
input[type=submit],input[type=button]{display:inline;width:100px; background-color: orange;border: 0px;}
a{text-align: center;text-decoration: none;border-top: 1px solid white;width: 75%;border-radius: 0px;border-bottom: 1px solid wheat; }
</style>
</head>
<body>
<?php 
session_start();
$_SESSION['doc_id1']=null;


?>

<div class="login">

<form action="#" method="POST">

	<h1 style="text-align:center;color:wheat;">Welcome</h1>

		<input type="email" placeholder="Email..." name="email" required />
		<input type="Password" placeholder="Password..." name="pass" required />
	<div style=" width:80%; margin-left:15px;padding-left:110px;">
		<input type="button" value="back" onClick="document.location.href='../index.php';">
		<input type="submit" value="Login" name="bt2">
	</div>
	<a href="doctorlogin.php" >Register Here</a>
</form>

</div>
<?php
if(isset($_POST['bt1'])){
	header('location:../index.php');}
?>
<?php
include "../conn.php";
if(isset($_POST['bt2'])){
	if(isset($_POST['email'])){
		if(isset($_POST['pass'])){
			
							$email = $_POST['email'];
							$pass = $_POST['pass'];
							$sql = "select d_id1,d_email1,d_password1 from doctor1 where d_email1='".$email."' and d_password1='".$pass."';";
							$result = $conn->query($sql); 
								if ($result->num_rows > 0) {
												$getresult = $result->fetch_assoc(); 
												$d_id1 = $getresult["d_id1"];
												session_start();
												$_SESSION['doc_id1']=$d_id1;
												header("location:mainpage.php");
								}
								else{header("location:doctorlogin1.php?status=Login Error");}
		}else{header("location:doctorlogin1.php?status=Error in Password");}						
	}else{header("location:doctorlogin1.php?status=Error in Email");}

$conn->close();
}
?>
</body>
</html>
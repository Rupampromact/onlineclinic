<!DOCTYPE html>
<html>
<head>
	<title>Doctors Registration Form</title>
</head>
<style type="text/css">
	table td{padding: 10px;text-align: center;font-size: 22px; }
	.masg{padding: 0px;text-align: left;}
	input,select,textarea,option{padding: 10px;width: 80%;}

	span{font-size: 15px;color: red;}
</style>
<body>
<table style="margin: auto;width: 70%;padding: 2%;border: 0px solid">
<form action="doctorlogin.php" method="POST">
<tr><td colspan="3"><h1>Doctors Registration Form</h1></td></tr>
<tr><td>Name:</td><td><input type="text" placeholder="Name... " name="name" required /></td><td class="masg"><span>*must be larger then 5</span></td></tr>
<tr><td>Email:</td><td><input type="email" placeholder="Email... " name="email" required ></td><td class="masg"><span>*must be in email Formate</span></td></tr>
<tr><td>Password:</td><td><input type="text" placeholder="Password... " name="pass" required ></td><td class="masg"><span>*must be larger then 8</span></td></tr>
<tr><td>Conform Password:</td><td><input type="text" placeholder="Conform Password... " name="pass1" required ></td></tr>
<tr><td>City:</td><td><select name="city">
<option value="Islamabad">Islamabad</option>
<option value="Krachi">Krachi</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="Quatta">Quatta</option>
<option value="Lahore">Lahore</option>
<option value="Taxila">Taxila</option>
<option value="Fasalabad">Fasalabad</option>
<option value="Multan">Multan</option>
</select></td></tr>
<tr><td>Qualification:</td><td><textarea name="qul" placeholder="Qualification..." required ></textarea></td></tr>
<tr><td colspan="3"><input type="submit" value="Submit" name="btn" style="width: 40%;"></td></tr>
</form>
</table>
<?php
include "..\conn.php";
if(isset($_POST['btn'])){
	$pass1 =$_POST['pass1'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$qul = $_POST['qul'];

	$regx_name = "/[A-Za-z0-9]{1,10}/";
	$regx_pass = "/^[A-Za-z0-9\-\.\_]{8,15}$/";

	if($pass!=$pass1){
		header('location:doctorlogin.php?status=Wrong password');
	}else{
			if($name!=" " && !empty($name)){
				if(preg_match($regx_name, $name)==true){
					if(preg_match($regx_pass, $pass)==true){
						if($qul!=" " && !empty($qul)){
							if($pass != " " && !empty($pass)){
												$sql="insert into doctor1(d_name1,d_email1,d_password1,d_qual1,d_city1)
												values('".$name."','".$email."','".$pass."','".$qul."','".$city."');";
												if($conn->query($sql)===true){
													header('location:doctorlogin1.php?status=success');
												}else{
												header('location:doctorlogin.php?status=error');	
												}
							}else{header('location:doctorlogin.php?status=Wrong password');}
						}else{header('location:doctorlogin.php?status=Wrong Qualification');}
					}else{header('location:doctorlogin.php?status=Wrong Password Pattern');}
				}else{header('location:doctorlogin.php?status=Incorect Name Pattern');}
			}else{header('location:doctorlogin.php?status=Wrong Name');}
		}
}


?>
</body>
</html>
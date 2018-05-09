<?php
include "conn.php";
session_start();
$_SESSION['doc_id']=null;
session_unset();
if(isset($_POST['name'])){
	if(isset($_POST['email'])){
		if(isset($_POST['addres'])){

				$name=htmlspecialchars($_POST['name']);
				$email=htmlspecialchars($_POST['email']);
				$cemail=htmlspecialchars($_POST['cemail']);
				$pass=htmlspecialchars($_POST['pass']);
				$cpass=htmlspecialchars($_POST['cpass']);
				$qul= $_POST['qlf'];
				$addrs =htmlspecialchars($_POST['addres']);

				if($email==$cemail){
					if($pass==$cpass){

						$sql1 = "INSERT INTO s_doctors (d_name,d_address,d_qualification,d_email,d_password)
						VALUES ('".$name."','".$addrs."','".$qul."','".$email."','".$pass."');";

						if ($conn->query($sql1) === TRUE) {
									

									header("Location: docsignin.php");
						} else {
						    echo "Error: " . $sql1 . "<br>" . $conn->error;
						}
				}else{header("location:doctorlogin.php?status=pass was not match");}
			}else{header("location:doctorlogin.php?status=email was not match");}
		}else{header("location:doctorlogin.php?status=enter address");}
	}else{header("location:doctorlogin.php?status=enter email");}
}else{header("location:doctorlogin.php?status=enter name");}
$conn->close();

?>
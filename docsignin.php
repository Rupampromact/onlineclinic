<?php
include "conn.php";
session_start();
$_SESSION['doc_id']=null;
session_unset();
	if(isset($_POST['email'])){
		if(isset($_POST['pass'])){
				$email= $_POST['email'];
				$pass= $_POST['pass'];
				if($email != " " && $pass != " "){

					$sql4 = "select d_id,d_email,d_password from s_doctors 
							where d_email='".$email."' and d_password='".$pass."'	;"; 

					$result = $conn->query($sql4); 
					if ($result->num_rows > 0) {

					$getresult = $result->fetch_assoc(); 

					$d_id = $getresult["d_id"];
					session_start();
					$_SESSION['doc_id']=$d_id;
					header("location:showanswers.php");
					}else{header('location:doctorsignin.php?status=login erorr');}
				}else{header('location:doctorsignin.php?status=null email and pass');}
			}else{header('location:doctorsignin.php?status=password not set');}
		}else{header('location:doctorsignin.php?status=email not set');}
$conn->close();


?>
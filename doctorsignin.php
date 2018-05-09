<!DOCTYPE html>
<html>
<head>
	<title>Doctors Login Form</title>
</head>
<body>
<?php
session_start();
$_SESSION['doc_id']=null;
session_unset();
	if(isset($_GET['status'])){
		$status = $_GET['status'];
		echo "<script>alert(\"".$status."\");</script>";

	}

?>
<form method="POST" action="docsignin.php">
<p>	<input type="email" placeholder="Email..." name="email" required></p>
<p>	<input type="password" placeholder="Password" name="pass" required></p>
<p>	<input type="submit" value="LOGIN"></p>

</form>

</body>
</html>
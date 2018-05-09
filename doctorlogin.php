<style type="text/css">
	form{width:50%;margin: auto;border: 3px solid gray;}
	form p,h2{padding: 5px;margin: auto;width:50%;text-align: center;}
	form p input{padding: 5px;margin: auto;width:100%;}
</style>
<?php
session_start();
$_SESSION['doc_id']=null;
session_unset();
?>

<form method="POST" action="doclog.php">
<h2>Doctors Registration Form</h2>
<p><input type="text" name="name" placeholder="Doctores Name...." required>
<p><input type="text" name="addres" placeholder="Address / Location" required>
<p><input type="text" name="qlf" placeholder="Qualification..." required>
<p><input type="email" name="email" placeholder="Email Address" required>
<p><input type="email" name="cemail" placeholder="Confrom email" required>
<p><input type="text" name="pass" placeholder="Select Password" required>
<p><input type="text" name="cpass" placeholder="Conform Password" required>
<p>
<input type="Submit" value="Register Me">

</form>
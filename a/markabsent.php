
<?php
include "mainpage.php";
session_start();
if(isset($_SESSION['doc_id1'])){
	$id = $_SESSION['doc_id1'];
}else{
	header('location:doctorlogin1.php');
}
?>
<form action="#" method="POST">
<table border="3"><tr>
<td>
<select name="s">
<option value="0">Select Start Time</option>
<option value="6">6:00-6:30</option>
<option value="6">6:30-7:00</option>
<option value="7">7:00-7:30</option>
<option value="7">7:30-8:00</option>
<option value="8">8:00-8:30</option>
<option value="8">8:30-9:00</option>
<option value="9">9:00-9:30</option>
<option value="9">9:30-10:00</option>
<option value="10">10:00-10:30</option>
<option value="10">10:30-11:00</option>
<option value="11">11:00-11:30</option>
<option value="11">11:30-12:00</option>
<option value="12">12:00-12:30</option>
<option value="12">12:30-1:00</option>
<option value="13">1:00-1:30</option>
<option value="13">1:30-2:00</option>
<option value="14">2:00-2:30</option>
<option value="14">2:30-3:00</option>
<option value="15">3:00-3:30</option>
<option value="15">3:30-4:00</option>
<option value="16">4:00-4:30</option>
<option value="16">4:30-5:00</option>
<option value="17">5:00-5:30</option>
<option value="17">5:30-6:00</option>
<option value="18">6:00-6:30</option>
<option value="18">6:30-7:00</option>
<option value="19">7:00-7:30</option>
<option value="19">7:30-8:00</option>
<option value="20">8:00-8:30</option>
<option value="20">8:30-9:00</option>
<option value="21">9:00-9:30</option>
<option value="21">9:30-10:00</option>
<option value="22">10:00-10:30</option>
<option value="22">10:30-11:00</option>
<option value="23">11:00-11:30</option>
<option value="23">11:30-12:00</option>
</select>
</td>
<td>
<select name="e">
<option value="0">Select End Time</option>
<option value="6">6:00-6:30</option>
<option value="6">6:30-7:00</option>
<option value="7">7:00-7:30</option>
<option value="7">7:30-8:00</option>
<option value="8">8:00-8:30</option>
<option value="8">8:30-9:00</option>
<option value="9">9:00-9:30</option>
<option value="9">9:30-10:00</option>
<option value="10">10:00-10:30</option>
<option value="10">10:30-11:00</option>
<option value="11">11:00-11:30</option>
<option value="11">11:30-12:00</option>
<option value="12">12:00-12:30</option>
<option value="12">12:30-1:00</option>
<option value="13">1:00-1:30</option>
<option value="13">1:30-2:00</option>
<option value="14">2:00-2:30</option>
<option value="14">2:30-3:00</option>
<option value="15">3:00-3:30</option>
<option value="15">3:30-4:00</option>
<option value="16">4:00-4:30</option>
<option value="16">4:30-5:00</option>
<option value="17">5:00-5:30</option>
<option value="17">5:30-6:00</option>
<option value="18">6:00-6:30</option>
<option value="18">6:30-7:00</option>
<option value="19">7:00-7:30</option>
<option value="19">7:30-8:00</option>
<option value="20">8:00-8:30</option>
<option value="20">8:30-9:00</option>
<option value="21">9:00-9:30</option>
<option value="21">9:30-10:00</option>
<option value="22">10:00-10:30</option>
<option value="22">10:30-11:00</option>
<option value="23">11:00-11:30</option>
<option value="23">11:30-12:00</option>
</select>
</td>
<td>
<div id="month_selector"><select id="mySelect1" name="month" onchange="chngedate()"></select></div>
</td>
<td>
<div id="date_selector"><select id="selectlist" name="date"></select></div></td>
</tr>
<tr>
</body>
<script>
var selectList1 = document.getElementById("selectlist");
var obj=new Date();
	 var date=obj.getDate();
	 
//Create and append the options
for (var i = date; i <=30; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    selectList1.appendChild(option);
}
</script>

<script type="text/javascript">
	function chngedate(){
	var abc = document.getElementById("mySelect1");
	var xyz = document.getElementById("selectlist");
	var object = new Date();
	var month = object.getMonth();
	if(month+1!=abc.value){
		var selectList1 = document.getElementById("selectlist");
	 	selectList1.innerHTML="";
		//Create and append the options
		for (var i = 1; i <=30; i++) {
		    var option = document.createElement("option");
		    option.value = i;
		    option.text = i;
		    selectList1.appendChild(option);
		}
	}else{
			var selectList1 = document.getElementById("selectlist");
			var obj=new Date();
			var date=obj.getDate();
			selectList1.innerHTML="";
			//Create and append the options
			for (var i = date; i <=30; i++) {
			    var option = document.createElement("option");
			    option.value = i;
			    option.text = i;
			    selectList1.appendChild(option);
			}
		}
	}
</script>

<script>
var arr = new Array(" ","Junuary","Febrary","March","April","May","June","July","Agust","September","October","November","December");
var Div1 = document.getElementById("mySelect1");
var obj=new Date();
var Month=obj.getMonth();
	 
//Create and append the options
for (var i = Month+1,j=0; j <=2; i++,j++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = arr[i];
    Div1.appendChild(option);
}
</script>

<td colspan="4">
<input type="submit" value="Set Time" name="btn">
</td></tr></table></form>
<?php

include "../conn.php";
if(isset($_POST['btn'])){
	$start = $_POST['s'];
	$end = $_POST['e'];
	$date = $_POST['date'];
	$month = $_POST['month'];

	$sql = "insert into d_setnot(d_id12,d_date1,d_start1,d_end1,month_s) values (".$id.",".$date.",".$start.",".$end.",".$month.")";
	if($conn->query($sql)===true){

	}else{

	}
}

?>
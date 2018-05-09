<!DOCTYPE html>
<html>
<head>
	<title>Select a Doctor</title>
</head>
<body>

<?php include "patientmain.php"; ?>
<table border="3" cellspacing="10px" cellpadding="10px">
<tr><th>Select a City</th><th>Doctor Name</th><th>Month</th><th>Day</th></tr>
<tr><td>
<select id="city" name="city" onchange="check()">
	<?php

include "../conn.php";
$sql="select distinct d_city1 from doctor1";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {

while($getresult = $result->fetch_assoc()){
$city = $getresult['d_city1'];
?>

	<option value="<?php echo $city; ?>">
		<?php echo $city;?>
	</option>

<?php
}}
?>
</select></td>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


<!--                ddddddddddddddddddddddddddd  -->
<form action="times.php" method="GET">
<td>
<div id="ser">
<select id="doc_select" name="doc_id" >

</select>
</div>
</td>
<td>
<div id="month_selector"><select id="mySelect1" name="month" onchange="chngedate()"></select></div>
</td>
<td>
<div id="date_selector"><select id="selectlist" name="date"></select></div></td>
</tr>
<tr>
<td colspan="3"><input type="submit" value="Select doctor"></td></tr>
</table>
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

<script type="text/javascript">
 
function check(){   
  var data =document.getElementById('city').value;
   obj={
    type:'post',
    data:{'value':data},
    url:'select_doc.php',
    success:function(msg){ 	 document.getElementById('doc_select').innerHTML=msg;     }
    }; 
   jQuery.ajax(obj);
    
 }
</script>

</html>
</body>
</html>
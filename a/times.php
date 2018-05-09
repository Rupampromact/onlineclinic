<style>
.morning{height:30%;}
.morning h3{border:2px solid gray;padding:5px;text-align:center;background-color:#aaa;}

.morning #dov,#dov1,#dov2 {margin:auto;width:90%;}
label {float: left;  width: 15%;border-radius: 3px;  border: 1px solid #D1D3D4;}
input.radio:empty {	margin-left: -9999px;}
/* style label */
input.radio:empty ~ label {	position: relative;	float: left;	line-height: 2.5em;	text-indent: 3.25em;margin-top: 2em;	cursor: pointer;}
input.radio:empty ~ label:before {position: absolute;	display: block;	top: 0;	bottom: 0;left: 0;content: '';width: 2.5em;background: #D1D3D4;
border-radius: 3px 0 0 3px;}
input.radio:hover:not(:checked) ~ label:before {content:'\2714';	text-indent: .9em;	color: black;}
input.radio:hover:not(:checked) ~ label {	color: red;}
input.radio:checked ~ label:before {	content:'\2714';	text-indent: .9em;	color: #9CE2AE;	background-color: #4DCB6D;}
input.radio:checked ~ label {color: red;background-color: #0f0;font-weight: bold;}
input.radio{float: left}

.colors{border:2px solid;height:25%;width:95%;margin:auto;}
.colors table{border: 1px solid;float: right;}
.colors table tr td{border: 1px solid;width: 10%;}
.colors table tr td:first-child{padding: 20px;}
.colors table tr td:last-child{padding: 3px;width: 100%;}
.colors table tr:first-child td:first-child{background-color:lightgreen;}
.colors table tr:nth-child(2) td:nth-child(1){background-color:blue;}
.colors table tr:nth-child(4) td:nth-child(1){background-color:yellowgreen;}
.colors table tr:nth-child(3) td:nth-child(1){background-color:black;}

</style>
<div class="colors">
<table>
	<tr><td></td><td>Your's Appointment</td></tr>
	<tr><td></td><td>Appointment Taken</td></tr>
	<tr><td></td><td>Break Timing</td></tr>
	<tr><td></td><td>Busy State</td></tr>
</table>
</div>








<?php
if(isset($_GET['doc_id'])){
	$date = $_GET['date'];
	$month = $_GET['month'];
	$doc_id = $_GET['doc_id'];

?>

<form action="getapont.php?doc_id=<?php echo $doc_id;?>&month=<?php echo $month;?>&date=<?php echo $date;?>" method="POST">
<div class="morning">
<h3>Morning Shift 06:00 AM To 12:00 PM</h3>
<div id="dov">
</div>
</div>
<div class="morning">
<h3>After Noon Shift 12:00 PM  To 06:00 PM</h3>
<div id="dov1">
</div>
</div>
<div class="morning">
<h3>Evening Shift 06:00 PM To 12:00 AM</h3>
<div id="dov2">
</div>
</div>
<div class="btn" style="border: 2px solid gray;width: 20%;margin: auto;"><input type="submit" value="Take Appointment" name="submit" style="padding: 4px;width: 100%;font-size: 20px;">
</div></form>


<?php
}
$end=null;
$start=null;

if(isset($_GET['doc_id'])){
	$date = $_GET['date'];
	$month = $_GET['month'];
	$doc_id = $_GET['doc_id'];

include "../conn.php";
		
		$sql1="select doc_id,start_time_d,end_time_d from set_break where doc_id=".$doc_id.";";
		$result1 = $conn->query($sql1); 
			if ($result1->num_rows > 0) {
			while($getresult1 = $result1->fetch_assoc())
			{ 
			$start = $getresult1["start_time_d"];
			$end = $getresult1['end_time_d'];
			}
		}
		////////////////////////////////////////////////////////////////////////////////////////////////////
			$sql2="select d_start1,d_end1 from d_setnot where d_id12=".$doc_id." and d_date1=".$date." and month_s=".$month." ;";
			$result2=$conn->query($sql2);
			if ($result2->num_rows > 0) {
			while($getresult2 = $result2->fetch_assoc())
			{ 
			$start2 = $getresult2["d_start1"];
			$end2 = $getresult2['d_end1'];
			}
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////////

}

?>
<script>


var z=document.getElementById("dov2");
var y=document.getElementById("dov1");
var x=document.getElementById("dov");


var timearr = ["06:00-06:30","06:30-07:00","07:00-07:30","07:30-08:00","08:00-08:30","08:30-09:00","09:00-09:30","09:30-10:00","10:00-10:30","10:30-11:00","11:00-11:30","11:30-12:00"];
var time1arr = ["12:00-12:30","12:30-01:00","01:00-01:30","01:30-02:00","02:00-02:30","02:30-03:00","03:00-03:30","03:30-04:00","04:00-04:30","04:30-05:00","05:00-05:30","05:30-06:00"];
var time2arr = ["06:00-06:30","06:30-07:00","07:00-07:30","07:30-08:00","08:00-08:30","08:30-09:00","09:00-09:30","09:30-10:00","10:00-10:30","10:30-11:00","11:00-11:30","11:30-12:00"];

for(var val=0;val<12;val++){
x.innerHTML += "<div><input type=\"radio\" value="+val+" name=\"check\" id=\"radio"+val+"\" class=\"radio\"/ ><label for=\"radio"+val+"\" id=\"rdio"+val+"\">"+timearr[val]+"</label></div>";
}

for(var val=0,val1=12;val<12;val++,val1++){
y.innerHTML += "<div><input type=\"radio\" name=\"check\" value="+val1+" id=\"radio"+val1+"\" class=\"radio\"/><label for=\"radio"+val1+"\" id=\"rdio"+val1+"\">"+time1arr[val]+"</label></div>";
}
for(var val=0,val2=24;val<12;val++,val2++){
z.innerHTML += "<div><input type=\"radio\" name=\"check\" value="+val2+" id=\"radio"+val2+"\" class=\"radio\"/><label for=\"radio"+val2+"\" id=\"rdio"+val2+"\">"+time2arr[val]+"</label></div>";

}

</script>
<!-----------------------------------------For Break set---------------------------------------- -->
<script type="text/javascript">
	   var start = "<?php echo $start; ?>";
	   var end = "<?php echo $end; ?>";
	   var java=0,php=0;
	   
	   if(start<=11){
	   for(i=6;i<=11;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

else  if(start<=18){java=12;
	   for(i=12;i<=18;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

	   else if(start<=24){
	   for(i=19;i<=24;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }else{}
//for finding end
	   if(end<=11){
	   for(i=6;i<=11;i++){
	   	if(i==end){
	   		php=php;
	   		break;
	   	}else{
	   		php=php+2;
	   	}
	   }
	 }

else  if(end<=18){php=12;
	   for(i=12;i<=18;i++){
	   	if(i==end){
	   		php=php;
	   		break;
	   	}else{
	   		php=php+2;
	   	}
	   }
	 }

	   else if(end<=24){php=26;
	   for(i=19;i<=24;i++){
	   	if(i==end){
	   		php=php;
	   		break;
	   	}else{
	   		php=php+2;
	   	}
	   }
	 }else{}
	 
	   for(val=java;val<=php;val++){
	   var block = document.getElementById("radio"+val);
	   block.style.color="red";
	   var s1=document.getElementById("rdio"+val);
		 block.disabled=true;
		 s1.style.color="red";
		 s1.style.backgroundColor="black";
			}
</script>

<!---------------------------------------End for braek------------------------- -->


<script>
	   var start = "<?php echo $start2; ?>";
	   var end = "<?php echo $end2; ?>";
	   var java=0,php=0;
	   
	   if(start<=11){
	   for(i=6;i<=11;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

else  if(start<=18){java=12;
	   for(i=12;i<=18;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

	   else if(start<=24){
	   for(i=19;i<=24;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }else{}
//for finding end
	   if(end<=11){
	   for(i=6;i<=11;i++){
	   	if(i==end){
	   		php=php;
	   		break;
	   	}else{
	   		php=php+2;
	   	}
	   }
	 }

else  if(end<=18){php=12;
	   for(i=12;i<=18;i++){
	   	if(i==end){
	   		php=php;
	   		break;
	   	}else{
	   		php=php+2;
	   	}
	   }
	 }

	   else if(end<=24){php=26;
	   for(i=19;i<=24;i++){
	   	if(i==end){
	   		php=php;
	   		break;
	   	}else{
	   		php=php+2;
	   	}
	   }
	 }else{}
	 
	   for(val=java;val<=php;val++){
	   var block = document.getElementById("radio"+val);
	   block.style.color="red";
	   var s1=document.getElementById("rdio"+val);
		 block.disabled=true;
		 s1.style.color="red";
		 s1.style.backgroundColor="yellowgreen";
			}

</script>
<?php

if(isset($_GET['doc_id'])){
	$date = $_GET['date'];
	$month = $_GET['month'];
	$doc_id = $_GET['doc_id'];

			$sql3="select a_time from take_apont where doctor_id=".$doc_id." and a_month=".$month." and a_date=".$date.";";
			$result3=$conn->query($sql3);
			if ($result3->num_rows > 0) {
			while($getresult3 = $result3->fetch_assoc())
			{ 
			$start3 = $getresult3["a_time"];
			?>

<script>
	   var start = "<?php echo $start3; ?>";
	   var java=0,php=0;
	   
	   if(start<=11){
	   for(i=6;i<=11;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

else  if(start<=18){java=12;
	   for(i=12;i<=18;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

	   else if(start<=24){
	   for(i=19;i<=24;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }else{}
	   val=java;
	   var block = document.getElementById("radio"+val);
	   block.style.color="red";
	   var s1=document.getElementById("rdio"+val);
		 block.disabled=true;
		 s1.style.color="red";
		 s1.style.backgroundColor="blue";
			
</script>
			<?php 
			}
		}

	}
?>

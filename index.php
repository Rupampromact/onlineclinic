<html>
<title>Get Life || Online Doctors Appointment</title>
<link rel="stylesheet" type="text/css" href="style/quspopout.css">
<script src="script/quspopjs.js"></script>
<style>
.about_us h1{color: black;font-family:Arial;}
.about_us p{color: black;font-size: 18px;}
.question_panel{margin-top:6%;}
h1,h2,p{text-align: center;color:#eee;}
.top h1{font-size: 800%;}
.logos{margin:3% auto;}
.logos td:first-child{background-image: url("images/fb.png");background-position: cover;background-repeat: no-repeat;background-size: 100%;}
.logos td:last-child{background-image: url("images/google.png");background-position: cover;background-size: 100%;background-repeat: no-repeat;}
.logos td:nth-child(2){background-image:url("images/twiter.jpg");background-size: 100%;background-position: cover;background-repeat: no-repeat;}
.top .top_left table td{padding: 20px;background-color: #b3b3b3;}
*{margin:0px;padding:0px;}
body{background-color: #cce6ff;background-image:url("images/bak.jpg");overflow-x: hidden;}
.top{border: 2px solid;width: 95%;margin: auto;height: 45%;}
.top .top_left{border: 0px solid;width: 25%;height: 100%;float: left;background-color: #404040}
.top .top_right{border: 1px solid;width: 75%;height: 100%;margin: 0% 25%;background-color: #4f404f;}
.top .top_left .logo{width: 40%;margin:3% auto;height: 50%;border-radius: 100%;
background-color:#b3b3b3;background-image:url("images/doc.jpg");background-size:100% 100%;background-position:cover;background-repeat:no-repeat;}
.menu{border: 2px solid;width: 95%;margin:auto 2.3%;height: 10%;border-radius: 0px 0px 20px  20px; background-color: #737373;position:relative;float:left;}
.mid{width: 95%;margin: auto;}
.mid .link_item{border: 2px solid olive;width: 100%;height:;margin: 1% 1% 1% 0%;float: left;background-color: #eee;border-radius: 10px; }
.footer{width: 95%;margin: auto;height: 10%;float:left;margin-left: 2.5%;background-color: skyblue;}
</style>
<body>
<div class="top">
	<div class="top_left">
		<div class="logo">
		</div>
		<h2>Get Life.com</h2><p>Some info about site</p>
		<table class="logos"><tr><td></td><td></td><td></td></tr></table>
	</div>
	<div class="top_right">
	<?php include "slider.php"; ?>
	</div>
</div>
<div class="menu">
<?php include "menu.php";?>
</div>
<!------------------------------popout-------------- -->
<div class="question_panel">
<div class="main_one">

<div>
<form action="getquestion.php" method="POST">
<h2 style="color: black;padding: 0px;margin: 0px;">Ask a Doctor Online 24/7 - Get your medical questions answered.</h2>
<textarea placeholder="Please type Your Madical Question here to get them answer... !" name="question" rows="8" cols="8" required> 
</textarea>
<input type="button" onclick="popup()" value="Ask Doctor">
</div>
</div>
<div class="popout" id="full_screen">
</div>	<div class="pop_form" id="pop_form">
       <div>
			<input type="button" value="Close:: X" onclick="clos()" class="close" />
			<input type="text" placeholder="Your name..." name="username"/>
			<input type="email" placeholder="Email Address..." name="email"/>
			<input type="text" placeholder="Mobile No..." name="mobno"/>
			<select name="type">
			<option value="1">Skin specialist </option>
			<option value="2">Dentist</option>
			<option value="3">Bone specialist</option>
			<option value="4">Eyes specialist</option>
			<option value="5">Heart surgeon</option>
			<option value="6">Ears specialist</option>
			</select>
			<input type="submit" value="Submit"/>
			</form>
		</div>
	</div>
<script>
var x=document.getElementById("full_screen");
var y=document.getElementById("pop_form");
function popup(){
	x.style.width="100%";
	x.style.height="100%";
x.style.display="block";
y.style.display="block";
}
function clos(){
x.style.display="none";
y.style.display="none";
}
</script>
</div>
<!---------------------------END-----popout -->

<div class="mid">
	<div class="link_item">
<br>
<?php include "menu2.php"; ?>
<br>
<div class="about_us">
<h1>
	About GetLife.com
</h1>
<br>
<p>
	GetLife is a novel online Doctor consultation platform where you can get your medical questions answered by leading Doctors.<br>
 Just Submit your question and rest assured that you will consult a Doctor easily. Once you submit the question, the Doctor from the
 concerned <br>specialty will reply within hours. You can always ask more questions or add details with follow-up question options and make
 it an online doctor chat. <br>You may use this service to consult a specialty or for getting medical second opinion. <br>All paid services
 come with a MEDNET quality assurance and 100% money back guarantee.
</p>
</div>
<br>
<?php include "menu1.php"; ?>
</div>
</div>
<div class="footer">
</div>
</body>
</html>
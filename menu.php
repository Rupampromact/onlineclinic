<style>
.menu_bar table a{text-decoration: none;}
.menu_bar{border: 0px solid gray;float: left;width: 100%;margin: auto 4%;}
.right1{float: right;}
.left1,.right1 td{text-align: center;font-weight: bold;font-family: Georgia, serif}
.left1,.right1{float: left;padding: 0px;margin-top:6px;}
.left1,.right1 tr{cursor: pointer;}
.left1 td{width: 130px;padding: 10px;color:whitesmoke;}
.left1 td:first-child{width: 50px;background-color: #777;color: white;}
.left1 tr td:hover{background-color: #bbb;border: 1px double blue;color:black;}
.right1{display: none;}
.right1 td{width: 120px;padding: 10px;}
.right1 td:first-child{border-right: 2px solid;background-color: #9999ff;}
.right1 td:last-child{border-left: 2px solid; background-color: #ccccff;}
.right1 td:hover{background-color: #99b3ff;}
</style>
<div class="menu_bar">
<table class="left1">
  <tr>
  <td><a href="index.php">Home  </a></td>
  <td onclick="p()">Take Appointment  </td>
  <td onclick="d()">Get Appointment  </td>
  
  <td onClick="document.location.href='showanswers.php';">Querys  </td>
  
  </tr>
</table>

<table class="right1" id="p"> 
  <tr>
  <td onClick="document.location.href='a/patientreg.php';">Patient Sign Up</td>
  <td onClick="document.location.href='a/plogin.php';">Patient Sign In  </td>
  </tr>
</table>

<table class="right1" id="d">
  <tr>
  <td onClick="document.location.href='a/doctorlogin.php';">Doctors Sign Up </td>
  <td onClick="document.location.href='a/doctorlogin1.php';">Doctors Sign In   </td>
  </tr>
</table>
</div>
<script type="text/javascript">
  function p(){
var x = document.getElementById("p");
var y = document.getElementById("d");
if(x.style.display="none"){
  y.style.display="none";
  x.style.display="block";
  }else{x.style.display="none";}
}
 function d(){
var x = document.getElementById("d");
var y = document.getElementById("p");
if(x.style.display="none"){y.style.display="none";
  x.style.display="block";
  }else{x.style.display="none";}
}
</script>
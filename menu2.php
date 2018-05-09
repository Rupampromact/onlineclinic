<html>
    <head>
        <title>comments</title>
        <style>
        .menu2 table{margin:auto;}
.menu2 table tr:first-child td:last-child{color:green;font-weight:bold;font-size:20px;}
.menu2 table tr:last-child td:last-child{color:blue;font-weight:bold;font-size:px;}
.menu2 table td img{height: 80px;width: 230px;}
.menu2 #h2_id2{text-align: center;margin: auto;}
.menu2 #p_id2{text-align: left;font-family: arial;margin-left: 15%;}
.menu2{background-color: #e6ffff;padding: 1%;}
            .scrol{ 
                   width: 70%; height: 20%;
                   margin: auto;display: none;}
            .scrol img{width: 100%;height: 100%;}
        .h2_id1{color: black;text-align: left;}
        .class_p2{color: blue;font-size: 20px;font-weight: bold;text-align: left;}
        </style>
    </head>
    <body>
    <div class="menu2">
        <table>
            <tr>
            <td rowspan="2"><img src="images/doc.jpg"></td>
            <td>Best Doctor Consultations-Telemedicine services in the world</td>
            </tr>
            <tr>
            <td>Get Life was judged as the best online Doctor consults provider in an independent review by Healthline</td>
            </tr>
        </table>
        <h2 id="h2_id2" style="color: black;"><u>Patient's Comments for consult by: </u></h2>
        <div  class="main_com">
            <div class="scrol"><h1 class="h2_id1">My Name is Usman</h1>
            <p class="class_p2">My name is khan and i am not a pathan</p>
            </div>

            <div class="scrol"><h1 class="h2_id1">I my a Student</h1>
            <p class="class_p2">My name is khan and i am not a pathan</p>
            </div>
            
            <div class="scrol"><h1 class="h2_id1">I live in taxile cantt</h1>
            <p class="class_p2">My name is khan and i am not a pathan</p>
            
            </div>
            
            <div class="scrol"><h1 class="h2_id1">I'm doing software enginering</h1>
            <p class="class_p2">My name is khan and i am not a pathan</p>
            
            </div>
            
            <div class="scrol"><h1 class="h2_id1">My life goes owsome</h1>
            <p class="class_p2">My name is khan and i am not a pathan</p>
            
            </div>          
            
            <div class="scrol"><h1 class="h2_id1">I love what i am</h1>
            <p class="class_p2">My name is khan and i am not a pathan</p>
            
            </div>          

        </div>
        <p id="p_id2" style="color: black;"><br>
        In 2016 alone, our 200+ online Doctors in 40+ specialties helped 48000+ people with their medical worries; answers & opinions on their symptoms,<br> reports and next steps. Ask a doctor today and get answers to your medical questions. We have online OBGYNs, Dermatologists, STD specialists,<br> Pediatricians, Psychiatrists, Cardiologists, Neurologists and Doctors in 40+ specialties.
        </p>
        </div>
           </body>
    
    <script>
    var b=0;
    var arr2 = document.getElementsByClassName("scrol");

    function scrolbar(){
        if(b>5){b=0;
                arr2[5].style.display="none";}
        if(b!=0)
        arr2[b-1].style.display="none";
        arr2[b].style.display="block";
        b++;
        setTimeout(scrolbar,3000);
    }
        scrolbar();
    </script>
</html>
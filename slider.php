<html>
    <head>
        <title>Simple Slider</title>
        <style>
            .slid{ 
                   width: 100%; height: 100%;
                   margin: auto;display: none;}
            .slid img{width: 100%;height: 100%;}
        </style>
    </head>
    <body>
        <div  class="main">
            <div class="slid"><img src="images/a1.png" /></div>
            <div class="slid"><img src="images/a2.jpg" /></div>
            <div class="slid"><img src="images/a3.jpg" /></div>
            <div class="slid"><img src="images/a4.jpg" /></div>
            <div class="slid"><img src="images/a5.jpg" /></div>          
            <div class="slid"><img src="images/a6.png" /></div>          

        </div>
           </body>
    
    <script>
    var a=0;
    var arr1 = document.getElementsByClassName("slid");

    function sliderbar(){
        if(a>5){a=0;
                arr1[5].style.display="none";}
        if(a!=0)
        arr1[a-1].style.display="none";
        arr1[a].style.display="block";
        a++;
        setTimeout(sliderbar,3000);
    }
        sliderbar();
    </script>
</html>
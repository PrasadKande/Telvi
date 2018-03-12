<!doctype html>
<?php $path = '/templates/template1/'?>
<html>
<head>
   <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $('.sub-menu').click(function(){
		$(this).toggleClass('tab');
    });
	$(".side-bar").mouseover(function(){
        $(".menu1").addClass("menu1-show");
    });
	$(".side-bar").mouseout(function(){
		$(".menu1").removeClass("menu1-show");
	});
});
</script>	
</head>
<body>
<div class="wrapper">
	<img class="img1" src="images/hagxvci.jpg">
	<img class="img1" src="images/23th-toilet (2).jpg">
<div class="side-bar">
	<div class="menu1">    
		<img  class="img4"  src="images/white_circle_logo.png"> 
		<p>MENU</p>
	</div>
	<div class="menu">
			 <ul>
				 <li ><a href='<?php echo $path ?>'>HOME</a></li>
				 <li ><a href="">MESSAGES</a></li>
				 
				 <li class="sub-menu"><a>ABOUT<span class="sub-arrow"></span></a>
					<ul >
						<li ><a href='#'>Who We Are</a></li>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="#">Our Staff &#038; Elders</a></li>
						<li ><a href="#">Giving/Financial</a></li>
						<li ><a href="#">Prayer</a></li>
						<li ><a href="#">Internships</a></li>
					</ul>
				 </li>
				 
				 <li class="sub-menu"><a>GET INVLOVED <span class="sub-arrow"></span></a>
					  <ul>
						 <li><a href="">VOLUNTEER</a></li>
						 <li><a href="">GET IN A GROUP</a></li>
					 </ul>
				 </li>
				 <li><a>EVENTS</a></li>
				 
				<li class="sub-menu"><a>OTHERS <span class="sub-arrow"></span></a>
				<ul>
					 <li><a href="">link 1</a></li>
					 <li><a href="">link2</a></li>
					  <li><a href="">link3</a></li>
				 </ul>
				</li>
				<li><a class="locate"><span>LOCATION</a></li>					 
			</ul>
    </div>
    </div>        
        <img class="img2" src="images/downloadlogo.png">
</div>
        <div class="center">
            <h1> welcome to </h1>
            <h11> flatirons </h11>
            <h1>community church</h1>
        </div>        
       <div class="center2">
           <a href="">SERVICETIMES/LOCATION</a>
           <a href="">WATCH/LISTEN</a>
           <a href="">GIVEONLINE</a>
           
        </div>
                    
             
     <div class="footer">
         <div class="footer-logo">
             <img src="images/white_circle_logo.png">
        </div>
        <div class="footer-logos">
             <img class="img3"src="images/downloadsk.jpg">
            <img class="img3" src="images/downloafbd.png">
            <img class="img3" src="images/downloawa.png">
            <img  class="img3"src="images/downloatwd.jpg">
            <img  class="img3"src="images/downloaytd.png">
        </div>
    </div>

                         
        
        <div class="location" >
            <img class="img5"src="images/Denver-Campus.png">
             <img class="img5"src="images/location-lafayette.png">
             <img class="img5"class="img5" src="images/location-west.png">
            <img class="img5"src="images/Longmont_Icon.png">
        </div>  
        

<script>
/*   $(document).ready(function(){
           
     $(".locate").click(function(){
        $(".location").toggleClass("show");
         });
           
     $(".side-bar").mouseover(function(){
        $(".menu1").addClass("menu1-show");
       });
     $(".side-bar").mouseout(function(){
        $(".menu1").removeClass("menu1-show");
       });
     $(".sub-menu").click(function(){
        $(this).toggleClass("tab");
      });       
          
});      
*/
       
    </script>
        </body>
</html>

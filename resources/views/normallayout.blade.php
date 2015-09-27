<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CCBOL 2015</title>
    <meta charset="utf-8">
    
    <link rel="shortcut icon" href="img/login.png" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>    
    <script type="text/javascript" src="js/touchTouch.jquery.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}  </script>
    <script src="js/site.js"></script>
    <script>    
       jQuery(window).load(function() { 
       $x = $(window).width();    
    if($x > 1024)
    {     
      jQuery("#content .row").preloader();    } 
         
      jQuery('.magnifier').touchTouch();     
      
      jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});  
    }); 
            
    </script>

  </head>

  <body>
    <div class="spinner"></div> 
<!--============================== header =================================-->
    <header>
      <div class="container clearfix">
        <div class="row">
          <div class="span12">
            @include("mainmenu")
          </div>
        </div>
      </div>
    </header>

<div class="bg-content"> 
      
      <!--============================== content =================================-->
      @yield("content")
</div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
        <ul class="list-social pull-right">
              <li><a class="icon-1" href="https://www.facebook.com/universidadtomasfrias?rf=444698038908672"></a></li>
              <li><a class="" href="http://www.uatf.edu.bo/"><img src="img/uatf.png">UATF</a></li>
              <!--<li><a class="icon-3" href="#"></a></li>
              <li><a class="icon-4" href="#"></a></li>-->
        </ul>
        
        <div class="privacy pull-left">Website designed by <a href="" target="_blank" rel="nofollow">Vivi</a> </div>

      </div>
    </footer>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
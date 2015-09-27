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

    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    

    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />

  </head>

  <body>
    <div class="spinner"></div> 
<!--============================== header =================================-->
    <header>
      <div class="container clearfix">
        <div class="row">
          <div class="span12">
            <!--============ MENU PRINCIPAL ARCHIVO mainmenu.blade.php ====-->
            @include("mainmenu")
          </div>
        </div>
      </div>
    </header>
<!--============================== contenido =================================-->    

  

<div class="bg-content">
  <!--============================== reservas =================================-->    
    <a href="reservas.html"><img class="btn_lateral" style="top: 136px" src="img/lateral.png"></a>
    
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->

    <!-- Start WOWSlider.com BODY section -->
      <div id="wowslider-container1">
      <div class="ws_images"><ul>
          <li><img src="data1/images/sistemas_img.jpg" alt="XXI CONGRESO NACIONAL DE CIENCIAS DE LA COMPUTACION" title="XXI CONGRESO NACIONAL DE CIENCIAS DE LA COMPUTACION" id="wows1_0"/></li>
          <li><img src="data1/images/uatf.jpg" alt="DEL 16 AL 20 DE NOVIEMBRE" title="DEL 16 AL 20 DE NOVIEMBRE" id="wows1_1"/></li>
          <li><img src="data1/images/uatf4.jpg" alt="CCBOL 2015" title="CCBOL 2015" id="wows1_2"/></li>
          <li><a href="#"><img src="data1/images/uatf5.jpg" alt="jquery carousel" title="" id="wows1_3"/></a></li>
          <li><img src="data1/images/slide3.jpg" alt="POTOSI - BOLIVIA" title="POTOSI - BOLIVIA" id="wows1_4"/></li>
        </ul></div>
        <div class="ws_bullets"><div>
          <a href="#" title="XXI CONGRESO NACIONAL DE CIENCIAS DE LA COMPUTACION"><span><img src="data1/tooltips/sistemas_img.jpg" alt="XXI CONGRESO NACIONAL DE CIENCIAS DE LA COMPUTACION"/>1</span></a>
          <a href="#" title="DEL 16 AL 20 DE NOVIEMBRE"><span><img src="data1/tooltips/uatf.jpg" alt="DEL 16 AL 20 DE NOVIEMBRE"/>2</span></a>
          <a href="#" title="CCBOL 2015"><span><img src="data1/tooltips/uatf4.jpg" alt="CCBOL 2015"/>3</span></a>
          <a href="#" title=""><span><img src="data1/tooltips/uatf5.jpg" alt=""/>4</span></a>
          <a href="#" title="POTOSI - BOLIVIA"><span><img src="data1/tooltips/slide3.jpg" alt="POTOSI - BOLIVIA"/>5</span></a>
        </div></div>
        <!--<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wow slider</a> by WOWSlider.com v8.5</div>-->
      <div class="ws_shadow"></div>
      </div>  
      <script type="text/javascript" src="engine1/wowslider.js"></script>
      <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->

        <!--============================== fin slider =================================-->
        <div class="block-slogan">
              <h2>CCBOL 2015 </h2>
              <div><br>
            <p> Potosi - Bolivia
            </p>
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra">

      <div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="row-1">
          <div class="container"> 
            @yield('content')
          </div>
    </div>


<!--============================== footer =================================-->
    <footer>
      <div class="container clearfix">
        <ul class="list-social pull-right">
              <li><a class="icon-1" href="https://www.facebook.com/universidadtomasfrias?rf=444698038908672"></a></li>
              <li><a class="" href="http://www.uatf.edu.bo/"><img src="img/uatf.png">UATF</a></li>
              
        </ul>
        
        <div class="privacy pull-left">Website designed by <a href="" target="_blank" rel="nofollow">Vivi</a> </div>

      </div>
    </footer>

    

  </body>
</html>
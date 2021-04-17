<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>D.U.B.E.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Beca, Educación, umss" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<?php $raiz = base_url('resources/web/'); ?>
<link href="<?php echo $raiz;?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $raiz;?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $raiz;?>css/chromagallery.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $raiz;?>css/AdminLTE.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $raiz;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<!-- /fonts -->
<!-- js files -->
<script src="<?php echo $raiz;?>js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body id="index.html" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Top Bar -->
<section class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="http://www.umss.edu.bo/" class="logo" target="_blank">
                    <img src="<?php echo $raiz;?>images/logoumss.png" width="50%" height="50%">
                    <!--<h1>Collegiate</h1>-->
                </a>
            </div>
            <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <ul class="social-icons1">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>-->
        </div>
    </div>
</section>
<!-- /Top Bar -->
<!-- Navigation Bar -->

<!-- /Navigation Bar -->
<!-- Banner Section -->

<!-- /Banner Section -->
<!-- About Section -->
<section class="about-us" id="about">
    <h3 class="text-center slideanim">Convocatorias</h3>
    <p class="text-center slideanim"><!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--></p>
    <div class="container">
        <div class="col-md-12">
            <?php
            $cont= 0;
            foreach ($mas_convocatorias as $convocatoria) {
                if($cont%2 == 0){
                    $color = "bg-aqua";
                }else{
                    $color = "bg-red";
                }
            ?>
            <div class="col-md-12">
                <!-- small box -->
                <div class="small-box <?php echo $color; ?>">
                    <div class="inner" >
                        <h3><b><fa class="fa fa-file-text-o"></fa></b></h3>
                        <h5><b><p><?php echo $convocatoria['convocatoria_descripcion']; ?></p><sup style="font-size: 20px"></sup></b></h5>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file-text-o"></i>              
                    </div>
                    <!--<a href="<?php //echo site_url('/resources/images/convocatoria/'.$convocatoria['convocatoria_dcto']) ?>" target="_blank"><?php echo $convocatoria['convocatoria_dcto']; ?></a>-->
                    <a href="<?php echo site_url('/resources/images/convocatoria/'.$convocatoria['convocatoria_dcto']); ?>" target="_blank" class="small-box-footer"><?php echo $convocatoria['convocatoria_dcto']; ?> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--<div class="col-md-6">
                <div class=" text-justify">
                    <p><?php /*echo $convocatoria['convocatoria_descripcion']; ?></p>
                    <a href="<?php echo site_url('/resources/images/convocatoria/'.$convocatoria['convocatoria_dcto']) ?>" target="_blank"><?php echo $convocatoria['convocatoria_dcto'];*/ ?></a>
                </div>
            </div>-->
            <?php
            $cont++;
            }
            ?>
        </div>
            
    </div>
</section>

<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->
<!-- js files -->
<script src="<?php echo $raiz;?>js/jquery.min.js"></script>
<script src="<?php echo $raiz;?>js/bootstrap.min.js"></script>
<script src="<?php echo $raiz;?>js/SmoothScroll.min.js"></script>
<!-- js files for gallery -->
<script src="<?php echo $raiz;?>js/chromagallery.pkgd.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
		    $(".mygallery").chromaGallery();
		});
	</script>
<!-- /js files for gallery -->	
<!-- Back To Top -->
<script src="<?php echo $raiz;?>js/backtotop.js"></script>
<!-- /Back To Top -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js files -->
</body>
</html>
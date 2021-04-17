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
<div class="navbar-wrapper" style="margin-top: 100px">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top cl-effect-21">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="#">Inicio</a></li>-->
                        <li class="active"><a href="#about">Convocatorias</a></li>
                        <li><a href="#services">Becas</a></li>
                        <li><a href="#curriculum">Publicaciones</a></li>
                        <li><a href="#gallery">D.U.B.E.</a></li>
                        <li><a href="#contact">Contactos</a></li>
                        <li><a href="<?php echo base_url("login"); ?>">Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- /Navigation Bar -->
<!-- Banner Section -->
 <!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?php echo $raiz;?>images/banner1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="<?php echo $raiz;?>images/banner2.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="<?php echo $raiz;?>images/banner3.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<!-- /Banner Section -->
<!-- About Section -->
<section class="about-us" id="about">
    <h3 class="text-center slideanim">Convocatorias</h3>
    <p class="text-center slideanim"><!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--></p>
    <div class="container">
        <?php
        if(count($las_convocatorias) > 0){ ?>
        <div class="row">
        <?php
        //foreach($las_convocatorias as $convocatoria){
            $cont = 0;
            while($cont <=1 && count($las_convocatorias) >$cont){
        ?>
        
            <?php if($cont == 0){ ?>
            <div class="col-lg-6 col-md-6">
                <div class="about-details">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <!--<img src="<?php //echo $raiz;?>images/about-img1.png" class="img-responsive slideanim" alt="about-img">-->
                        </div>
                        <div class="col-sm-10 col-xs-12">						
                            <div class="about-info slideanim text-justify">
                                <p><?php echo $las_convocatorias[$cont]['convocatoria_descripcion']; ?></p>
                                <a href="<?php echo site_url('/resources/images/convocatoria/'.$las_convocatorias[$cont]['convocatoria_dcto']) ?>" target="_blank"><?php echo $las_convocatorias[$cont]['convocatoria_dcto']; ?></a>
                            </div>
                        </div>
                    </div>						
                </div>
            </div>
            <?php }
            if($cont == 1){?>
            <div class="col-lg-6 col-md-6">
                <div class="about-details">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <!--<img src="<?php //echo $raiz;?>images/about-img2.png" class="img-responsive slideanim" alt="about-img">-->
                        </div>	
                        <div class="col-sm-10 col-xs-12">
                            <div class="about-info slideanim">
                                <p><?php echo $las_convocatorias[$cont]['convocatoria_descripcion']; ?></p>
                                <a href="<?php echo site_url('/resources/images/convocatoria/'.$las_convocatorias[$cont]['convocatoria_dcto']) ?>" target="_blank"><?php echo $las_convocatorias[$cont]['convocatoria_dcto']; ?></a>
                            </div>
                        </div>
                    </div>		
                </div>
            </div>
            <?php
            break;
            } ?>
        
        <?php
        $cont ++;
            }
        ?>
        </div>
        <div class="row below">
            <?php
            if(count($las_convocatorias) > 1){ ?>
            <?php
        //foreach($las_convocatorias as $convocatoria){
            $cont = 2;
            while($cont <=3 && count($las_convocatorias) >$cont){
            ?>
            <?php if($cont == 2){ ?>
            <div class="col-lg-6 col-md-6">
                <div class="about-details">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <!--<img src="<?php //echo $raiz;?>images/about-img3.png" class="img-responsive slideanim" alt="about-img">-->
                        </div>
                        <div class="col-sm-10 col-xs-12">
                            <div class="about-info slideanim">
                                <p><?php echo $las_convocatorias[$cont]['convocatoria_descripcion']; ?></p>
                                <a href="<?php echo site_url('/resources/images/convocatoria/'.$las_convocatorias[$cont]['convocatoria_dcto']) ?>" target="_blank"><?php echo $las_convocatorias[$cont]['convocatoria_dcto']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if($cont == 3){ ?>
            <div class="col-lg-6 col-md-6">
                <div class="about-details">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <!--<img src="<?php //echo $raiz;?>images/about-img4.png" class="img-responsive slideanim" alt="about-img">-->
                        </div>
                        <div class="col-sm-10 col-xs-12">
                            <div class="about-info slideanim">
                                <p><?php echo $las_convocatorias[$cont]['convocatoria_descripcion']; ?></p>
                                <a href="<?php echo site_url('/resources/images/convocatoria/'.$las_convocatorias[$cont]['convocatoria_dcto']) ?>" target="_blank"><?php echo $las_convocatorias[$cont]['convocatoria_dcto']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                break;
            } ?>
            <?php $cont++;
            } ?>
            <?php } ?>
        </div>
        <?php
        if(count($num_convocatorias)> 4){ ?>
            
            <div class="row below">
            <div class="col-lg-6 col-md-6">
                <div class="about-details">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <!--<img src="<?php //echo $raiz;?>images/about-img3.png" class="img-responsive slideanim" alt="about-img">-->
                        </div>
                        <div class="col-sm-10 col-xs-12">
                            <div class="about-info slideanim">
                                <a href="<?php echo site_url('/website/masconvocatoria/') ?>" target="_blank">Mas convocatorias...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <?php
        }
        }
        ?>
    </div>
</section>
<!-- /About Section -->	
<!-- Our Services -->
<section class="our-services" id="services">
	<h3 class="text-center slideanim">BECAS</h3>
	<p class="text-center slideanim"><!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--></p>
        <div class="container">
            <div class="row">
                <?php
                foreach ($las_becas as $beca) {
                ?>
                <div class="col-md-6">
                    <div class="serv-details">
                        <div class="serv-img-details slideanim">
                            <h4><?php echo $beca['beca_nombre']; ?></h4>
                            <!--<p>Lorem Ipsum</p>-->
                        </div>
                        <div class="serv-info slideanim text-justify">
                            <p><?php echo $beca['beca_descripcion']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
	<!--<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="<?php //echo $raiz;?>images/serv-img1.jpg" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum</p>
							</div>
						</div>	
					</div>	
				</div>
				<div class="serv-info slideanim">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="<?php //echo $raiz;?>images/serv-img2.jpg" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum</p>
							</div>
						</div>
					</div>
				</div>	
				<div class="serv-info slideanim">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="<?php //echo $raiz;?>images/serv-img3.jpg" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">		
							<div class="serv-img-details slideanim">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum</p>
							</div>
						</div>
					</div>
				</div>		
				<div class="serv-info slideanim">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="serv-details">
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<img src="<?php //echo $raiz;?>images/serv-img4.jpg" alt="" class="img-responsive slideanim">
						</div>
						<div class="col-sm-6 col-xs-6">
							<div class="serv-img-details slideanim">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum</p>
							</div>
						</div>
					</div>
				</div>		
				<div class="serv-info slideanim">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
	</div>-->
</section>
<!-- /Our Services -->
<!-- Our Curriculum -->
<section class="curriculum" id="curriculum">
    <h3 class="text-center slideanim">Publicaciones</h3>
    <p class="text-center slideanim"><!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--></p>
    <div class="container">
        <div class="row">
            <?php foreach ($las_publicaciones as $publicacion) {
            ?>
            <div class="col-md-6">
                <div class="cur-details slideanim">
                    <h4><?php echo $publicacion['beca_nombre']; ?></h4>
                    <h5>
                        <?php
                        echo date("d/m/Y H:i:s", strtotime($publicacion['publicacion_fecha']));
                        if($publicacion['publicacion_autor'] !="" || $publicacion['publicacion_autor'] !=null){
                            echo "  Autor:".$publicacion['publicacion_autor'];
                        }
                        ?>
                    </h5>
                    <p class="cur1" style="padding-bottom: 1px !important"><?php echo $publicacion['publicacion_texto']; ?></p>
                    <h5>
                        <?php
                        if($publicacion['publicacion_enlace'] !="" || $publicacion['publicacion_enlace'] !=null){
                        ?>
                        <a href="<?php echo $publicacion['publicacion_enlace']; ?>" target="_blank"><?php echo $publicacion['publicacion_enlace']; ?></a>
                        <?php
                        }
                        if($publicacion['publicacion_dcto'] !="" || $publicacion['publicacion_dcto'] !=null){
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('/resources/images/publicacion/'.$publicacion['publicacion_dcto']) ?>" target="_blank"><?php echo "Dcto: ".$publicacion['publicacion_dcto']; ?></a>
                        <?php
                        }
                        ?>
                    </h5>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
	<!--<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="cur-details slideanim">
					<h4>Our Important Aspects</h4>
					<p class="cur1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<div class="curriculum-info">
						<div>	
							<i class="fa fa-fort-awesome"></i>
							<h5>Collegiate Stays On Track</h5> 
							<p class="cur2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						</div>
						<div>
							<i class="fa fa-book"></i>
							<h5>Bigger, Better Education</h5>
							<p class="cur2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						</div>
						<div>
							<i class="fa fa-graduation-cap"></i>
							<h5>Step Into Graduation</h5> 
							<p class="cur2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-6 col-md-6 slideanim">
				<div class="video"> 
					<iframe src="https://player.vimeo.com/video/15428374?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	
			</div>
		</div>
	</div>-->
</section>
<!-- /Our Curriculum -->

<!-- Our Gallery -->
<section class="our-gallery" id="gallery">
	<h3 class="text-center slideanim">D.U.B.E.</h3>
	<p class="text-center slideanim"><!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--></p> 
	<div class="container">
            <div class="row" style="color: white !important">
                <?php
                if($dube['dube_mision'] != "" || $dube['dube_mision'] != null) {
                ?>
                <div class="col-md-12 text-center" style="padding-bottom: 20px">
                    <h4 class="text-center">MISION</h4>
                    <p class="text-justify"><?php echo $dube['dube_mision']; ?></p>
                </div>
                <?php } ?>
                <?php
                if($dube['dube_vision'] != "" || $dube['dube_vision'] != null) {
                ?>
                <div class="col-md-12" style="padding-bottom: 20px">
                    <h4 class="text-center">VISION</h4>
                    <p class="text-justify"><?php echo $dube['dube_vision']; ?></p>
                </div>
                <?php } ?>
                <?php
                if($dube['dube_objetivo'] != "" || $dube['dube_objetivo'] != null) {
                ?>
                <div class="col-md-12" style="padding-bottom: 20px">
                    <h4 class="text-center">OBJETIVO</h4>
                    <p class="text-justify"><?php echo $dube['dube_objetivo']; ?></p>
                </div>
                <?php } ?>
                <?php
                if($dube['dube_organigrama'] != "" || $dube['dube_organigrama'] != null) {
                ?>
                <div class="col-md-12" style="padding-bottom: 20px">
                    <h4 class="text-center">ORGANIGRAMA</h4>
                    <p class="text-justify"><?php echo $dube['dube_organigrama']; ?></p>
                </div>
                <?php } ?>
                <?php
                if($dube['dube_autoridadades'] != "" || $dube['dube_autoridadades'] != null) {
                ?>
                <div class="col-md-12">
                    <h4 class="text-center">AUTORIDADES</h4>
                    <p class="text-justify"><?php echo $dube['dube_autoridadades']; ?></p>
                </div>
                <?php } ?>
            </div>
		<!--<div class="content slideanim">
			<div class="chroma-gallery mygallery">
				<img src="<?php /*echo $raiz;?>images/gallery-img1.jpg" alt="Click" data-largesrc="images/gallery-img1-1.jpg">
				<img src="<?php echo $raiz;?>images/gallery-img2.jpg" alt="Click" data-largesrc="images/gallery-img2-2.jpg">
				<img src="<?php echo $raiz;?>images/gallery-img3.jpg" alt="Click" data-largesrc="images/gallery-img3-3.jpg">
				<img src="<?php echo $raiz;?>images/gallery-img4.jpg" alt="Click" data-largesrc="images/gallery-img4-4.jpg">
				<img src="<?php echo $raiz;?>images/gallery-img5.jpg" alt="Click" data-largesrc="images/gallery-img5-5.jpg">
				<img src="<?php echo $raiz;?>images/gallery-img6.jpg" alt="Click" data-largesrc="images/gallery-img6-6.jpg">
				<img src="<?php echo $raiz;?>images/gallery-img7.jpg" alt="Click" data-largesrc="images/gallery-img7-7.jpg">
				<img src="<?php echo $raiz;*/?>images/gallery-img8.jpg" alt="Click" data-largesrc="images/gallery-img8-8.jpg">
			</div>
		</div>-->
	</div>
</section>
<!-- /Our Gallery -->
<!-- Google Map -->
<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<!--<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" frameborder="0" style="border:0" allowfullscreen></iframe>-->
			</div>	
		</div>
	</div>
</section>
<!-- /Google Map -->

<!-- Footer Section -->
<section class="footer" id="contact">
	<h2 class="text-center">THANKS FOR VISITING US</h2>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 footer-left">
				<h4>Contact Information</h4>
				<div class="contact-info">
					<div class="address">	
						<i class="glyphicon glyphicon-globe"></i>
						<p class="p3">77 Jack Street</p>
						<p class="p3">Chicago, USA</p>
					</div>
					<div class="phone">
						<i class="glyphicon glyphicon-phone-alt"></i>
						<p class="p4">+591 4 4233926</p>
					</div>
					<div class="email-info">
						<i class="glyphicon glyphicon-envelope"></i>
						<p class="p4"><a href="mailto:email2@example.com">email2@example.com</a></p>
					</div>
				</div>
			</div><!-- col -->
			<div class="col-lg-4 footer-center">
				<h4>Newsletter</h4>
				<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputEmail1" class="col-lg-4 control-label"></label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="inputEmail1" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group">
						<label for="text1" class="col-lg-4 control-label"></label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="text1" placeholder="Your Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10">
							<button type="submit" class="btn-outline">Sign in</button>
						</div>
					</div>
				</form><!-- form -->
			</div><!-- col -->
			<div class="col-lg-4 footer-right">
				<h4>Support Us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<ul class="social-icons2">
                                    <li><a href="https://www.facebook.com/UmssDube/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
	<hr>
	<div class="copyright">
		<p>© 2016 Collegiate. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
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
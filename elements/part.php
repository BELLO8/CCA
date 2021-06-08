<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?= $title ?? ' mon site' ?></title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="<?= $meta_content ?? ' ' ?>">
		 
	<!-- CSS
	================================================== -->
	<link rel="icon" href="../assets/images/logo.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="../assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="../assets/css/colorbox.css">

	
</head>
       
<style type="text/css">
	.ts-facts-title{
		font-size: 18px;
	    color: #ffb600;
	    font-weight: bold;
	    margin-bottom: 10px;
	}


	.item{
		background-image: url(image/team/4.jpg);
	}

	
	.latest-post-media img{

		border-radius: 8px;
		box-shadow: 2px 1px 2px grey;
		
	}


	.latest-post-media img:hover{

		border-radius: 8px;
		transition: 2s;
		box-shadow: 10px 10px 8px grey;
	}
	.bord{
		padding-top: 20px;padding: 50px;border-radius: 45px;
		background: #f9f9f9;
	}
	
#main-slide1 .item {
    min-height: 500px;
    color: #fff;
    background-position: 50% 50%;
    -webkit-background-size: cover;
    background-size: cover;
    -webkit-backface-visibility: hidden;
}

#main-slide1 .item img {
    width: 100%;
   
}

.btn-primary{
	background-color:#ffb600;
}

#main-slide1 .item .slider-content {
    z-index: 1;
    opacity: 0;
    -webkit-transition: opacity 500ms;
    -moz-transition: opacity 500ms;
    -o-transition: opacity 500ms;
    transition: opacity 500ms;
}

#main-slide1 .item.active .slider-content {
    opacity: 1;
    -webkit-transition: opacity 100ms;
    -moz-transition: opacity 100ms;
    -o-transition: opacity 100ms;
    transition: opacity 100ms;
}

#main-slide1 .slider-content {
    top: 50%;
    padding: 0;
    position: absolute;
    width: 100%;
    color: #fff;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

#main-slide1 .slider-content.text-left {
    left: 10%;
}

#main-slide1 .slider-content.text-right {
    right: 10%;
}

#main-slide1 .carousel-indicators li.active,
#main-slide1 .carousel-indicators li:hover {
    background: #ffb600;
    -moz-transition: all 300ms ease;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

#main-slide1 .carousel-control.left,
#main-slide1 .carousel-control.right,
#main-slide1 .carousel-indicators {
    opacity: 0;
    filter: alpha(opacity=0);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
    -webkit-transition: all .25s ease;
    -moz-transition: all .25s ease;
    -ms-transition: all .25s ease;
    -o-transition: all .25s ease;
    transition: all .25s ease;
}

#main-slide1:hover .carousel-control.left,
#main-slide1:hover .carousel-control.right,
#main-slide1:hover .carousel-indicators {
    opacity: 1;
    filter: alpha(opacity=100);
}

#main-slide1 .carousel-control .fa-angle-left,
#main-slide1 .carousel-control .fa-angle-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

#main-slide1 .carousel-control .fa-angle-left {
    left: 20px;
}

#main-slide1 .carousel-control .fa-angle-right {
    right: 20px;
}

#main-slide1 .carousel-control i {
    background: rgba(0, 0, 0, .3);
    color: #fff;
    line-height: 58px;
    width: 60px;
    height: 60px;
    font-size: 36px;
    border-radius: 0;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}

#main-slide1 .carousel-control i:hover {
    background: #ffb600;
    color: #fff;
}

</style>
<body>

	<div class="body-inner">
           <header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="../">
								<img src="../assets/images/logo.png" alt="">
								<h5 class="police" >COMPAGNIE DE CONSTRUCTION 
								   AMOUZOU.sarl
								   <h4 style="color:red;text-align:center;margin-top:-10px;font-weight: 900;">C.C.A</h4>
								</h5>
								   <hr class="logobas">								
							</a>
						</div><!-- logo end -->

						<div class="col-xs-12 col-md-9 header-right">
						<ul class="top-info-box">
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Telephone</p>
											<p class="info-box-subtitle">(+225) 97 05 43 82 / (+225) 73 50 79 74</p>
										</div>
									</div>
								</li>
								<li>
									<div class="info-box">
										<div class="info-box-content">
											<p class="info-box-title">Email</p>
											<p class="info-box-subtitle">infos.amouzou@gmail.com</p>
										</div>
									</div>
								</li>
							
								
							</ul><!-- Ul end -->
						</div><!-- header right end -->
					</div><!-- logo area end -->

				</div><!-- Row end -->
			</div><!-- Container end -->

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<div class="collapse navbar-collapse navbar-responsive-collapse">
									<ul class="nav navbar-nav">
										<li class="<?= ($_SERVER['REQUEST_URI'] === '/') ? 'active': '' ?>"><a href="<?= $router->generate('home') ?>">Accueil </a></li>

										<li class="dropdown <?= (in_array($_SERVER['REQUEST_URI'],array())) ? 'active': '' ?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos offres <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
											    <li><a href="">Entretien Bâtiments</a></li>
												<li><a href="">Gestions immobilieres</a></li>
												<li><a href="">Nettoyage de bâtiments</a></li>
												<li><a href="">Lotissement</a></li>
												<li><a href="">Expertise et Conseil</a></li>
												<li><a href="">Paysagiste</a></li>
											</ul>
										</li>

										<li class="dropdown <?= ( in_array($_SERVER['REQUEST_URI'],array('/Service/Construction-de-maison','/Service/Amenagement','/Service/Confection-de-plan','/Service/Renovation-de-maison','/Service/Nos-service','/Service/Travaux-publics')) ) ? 'active' : '' ?>">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Services <i
													class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
											    <li><a href="<?= $router->generate('construction') ?>">Construction de bâtiment</a></li>
												<li><a href="<?= $router->generate('amenagement') ?>">Amenagement Exterieur</a></li>
												<li><a href="<?= $router->generate('renovation') ?>">Renovation</a></li>
												<li><a href="<?= $router->generate('plan') ?>"> Confection de plan et Devis</a></li>
												<li><a href="<?= $router->generate('tp') ?>">Travaux publics</a></li>
											</ul>
										</li>

										<li class=" <?= ($_SERVER['REQUEST_URI'] === '/Notre-equipe') ? 'active' : '' ?> "><a href="<?= $router->generate('equipe')  ?>">Notre equipe</a></li>

										<li class=" <?= ($_SERVER['REQUEST_URI'] === '/contact') ? 'active' : '' ?> "><a href="<?= $router->generate('contact')  ?>">Contactez-Nous</a></li>
									</ul>
									<!--/ Nav ul end -->
								</div>
								<!--/ Collapse end -->

							</div><!-- Site Navbar inner end -->

						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->

					<!-- Site search end -->
				</div>
				<!--/ Container end -->

			</nav>
			<!--/ Navigation end -->
		   </header>
             
          <?= $pagecontent ?>

           
<footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 footer-widget footer-about">
							<h3 class="widget-title">A Propos</h3>
							
							<p>La compagnie de construction AMOUZOU est une entreprise privilegié de la promotion immobiliere de la region du grand pont.</p>
							<div class="footer-social">
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-instagram"></i></a></li>
									
								</ul>
							</div><!-- Footer social end -->
						</div><!-- Col end -->

						<div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">Heure d'ouverture</h3>
							<div class="working-hours">
								Nous travaillons du Lundi au Samedi. Contactez nous si vous avez des preocupations ou des projets 
								<br><br>lundi - Vendredi: <span class="text-right">08:00 - 19:00 </span>
								<br> Samedi: <span class="text-right">08:00 - 17:00</span>
								<br> Dimanche <span class="text-right">Fermé</span>
							</div>
						</div><!-- Col end -->

						<div class="col-md-4 col-sm-12 footer-widget">
							<h3 class="widget-title">Services</h3>
							<ul class="list-arrow">
								
							    <li><a href="../Service/construction.php">Construction de bâtiments</a></li>
								<li><a href="../Service/gestion.php">Gestions immobilieres</a></li>
								<li><a href="../Service/renovation.php">Renovation</a></li>
								<li><a href="../Service/tp.php">Travaux publics</a></li>
								<li><a href="../Service/plan.php">Confection de Plan</a></li>
								
							</ul>
						</div><!-- Col end -->


					</div><!-- Row end -->
				</div><!-- Container end -->
			</div><!-- Footer main end -->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="copyright-info">
								<span>Copyright © 2019 </a></span>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6">
							<div class="footer-menu">
								<ul class="nav unstyled">
									<li><a href="../index.php#apropos">A propos</a></li>
									<li><a href="../index.php#Outils">Outils</a></li>
									<li><a href="../index.php#realisation">Nos realisations</a></li>
									<li><a href="../index.php#special">Ce que nous faisons</a></li>
									<li><a href="../index.php#service">services</a></li>
									
								</ul>
							</div>
						</div>
					</div><!-- Row end -->
					<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
						<button class="btn btn-primary" title="Back to Top">
						  <i class="fa fa-angle-double-up"></i>
						</button>
					  </div>

				</div><!-- Container end -->
			</div><!-- Copyright end -->

</footer><!-- Footer end -->
<script>
		filterSelection("all") // Execute the function and show all
	columns
	function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName("column");
	if (c == "all") c = "";
	// Add the "show" class (display:block) to the filteredelements, and remove the "show" class from the elements thatare not selected
	for (i = 0; i < x.length; i++) {
	w3RemoveClass(x[i], "show");
	if (x[i].className.indexOf(c) > -1) w3AddClass(x[i],
	"show");
	}
	}
	// Show filtered elements
	function w3AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
	if (arr1.indexOf(arr2[i]) == -1) {
	element.className += " " + arr2[i];
	}
	}
	}
	// Hide elements that are not selected
	function w3RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
	while (arr1.indexOf(arr2[i]) > -1) {
	arr1.splice(arr1.indexOf(arr2[i]), 1);
	}
	}
	element.className = arr1.join(" ");
	}
	// Add active class to the current button (highlight it)
	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
	var current = document.getElementsByClassName("active");
	current[0].className = current[0].className.replace("active", "");
	this.className += " active";
	});
	}
	</script>
<script type="text/javascript" src="<?php if ($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
	assets/js/jquery.js<?php else :?> 
		../assets/js/jquery.js <?php endif ; ?>">
	</script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="<?php if ($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
			assets/js/bootstrap.min.js
			<?php else :?> 
				../assets/js/bootstrap.min.js
				 <?php endif ; ?>
		">
	</script>
		<!-- Owl Carousel--> 
		<script type="text/javascript" src="<?php if ($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
			assets/js/owl.carousel.min.js
			<?php else :?>
				 ../assets/js/owl.carousel.min.js
				 <?php endif ; ?>
			">
		</script>
		<!-- Color box -->
		<script type="text/javascript" src="<?php if($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
			assets/js/jquery.colorbox.js
			<?php else :?> 
				../assets/js/jquery.colorbox.js
				 <?php endif ; ?>
			">
		</script>
		<!-- Isotope -->
		<script type="text/javascript" src="<?php if ($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
			assets/js/isotope.js
			<?php else :?> 
				../assets/js/isotope.js
				<?php endif ; ?>
				">
			</script>
		<script type="text/javascript" src="<?php if ($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
													assets/js/ini.isotope.js
													<?php else :?> 
														../assets/js/ini.isotope.js
														<?php endif ; ?>
				">
			</script>
		<script type="text/javascript" src="<?php if ($_SERVER['SCRIPT_NAME'] === '/cca/index.php') : ?>
													assets/js/custom.js
													<?php else :?> 
														../assets/js/custom.js
														<?php endif ; ?>">
			</script>
</body>

</html>

					
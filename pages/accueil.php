<?php 
$meta_content = 'La compagnie de construction AMOUZOU est une entreprise privilegié de la promotion immobiliere de la region du grand pont.';
$title="Bienvenue - Chez Amouzou Construction Dabou";

?>
		<div id="main-slide" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators visible-lg visible-md">
				<li data-target="#main-slide" data-slide-to="0" class="active"></li>
				<li data-target="#main-slide" data-slide-to="1"></li>
				<li data-target="#main-slide" data-slide-to="2"></li>
			</ol>
			<!--/ Indicators end-->

			<!-- Carousel inner -->
			<div class="carousel-inner">

				<div class="item active" style="background-image:url(assets/images/slider-main/bg1.jpg)">
					<div class="slider-content">
						<div class="col-md-12 text-center">
							<h2 class="slide-title animated4">La qualite au service de nos clients</h2>
							<h3 class="slide-sub-title animated5">Compagnie de construction </h3>
							<h3 class="slide-sub-title animated5">Amouzou </h3>
							
							<p>
								<a href="<?= $router->generate('service') ?>" class="slider btn btn-primary animated5">Nos Services</a>
								<a href="<?= $router->generate('contact') ?>" class="slider btn btn-primary border animated2">Contactez-Nous</a>
							</p>
						</div>
					</div>
				</div>
				<!--/ Carousel item 1 end -->

				<div class="item" style="background-image:url(assets/images/slider-main/bg5.jpg)">
					<div class="slider-content text-left">
						<div class="col-md-12">
							<h2 class="slide-title-box animated2"> Service fiable et de qualite</h2>
							<h3 class="slide-title animated3"style="color:#111; font-weight:bold;">AMOUZOU Construction</h3>
							<h3 class="slide-sub-title animated3" style="color:#111;">La qualite au service de nos clients</h3>
							<p class="animated3">
								<a href="Services/services.php" class="slider btn btn-primary border animated6" style="color:#111;">Nos Services</a>
							</p>
						</div>
					</div>
				</div>
				<!--/ Carousel item 2 end -->

				<div class="item" style="background-image:url(assets/images/slider-main/3.png)">
					<div class="slider-content text-right">
						<div class="col-md-12">
							<h2 class="slide-title animated6" style="color:#ffb600;">qualite fiabilite et assurance</h2>
							<h3 class="slide-sub-title animated7" style="color:#ffb600;">Le plaisir de bien vous lotis!</h3>
							<p class="slider-description lead animated7" style="color:#111; font-weight:bold; ">Une ingenierie respectant les normes du changement climatique pour votre bien être</p>
							
						</div>
					</div>
				</div>
				<!--/ Carousel item 3 end -->

			</div><!-- Carousel inner end-->

			<!-- Controllers -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
				<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
				<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div>
		<!--/ Carousel end -->

	   <section id="apropos" class="main-container" style="background-color:#eed3a6;margin-top:-10px;">
		<section class="call-to-action-box no-padding"  >
			<div class="container">
				<div class="action-style-box" style="border-radius:20px;">
					<div class="row">
						<div class="col-md-10">
							<div class="call-to-action-text">
								<h3 class="action-title">Vous recherchez une entreprise pour la realisation de votre projet immobilier</h3>
							</div>
						</div><!-- Col end -->
						<div class="col-md-2">
							<div class="call-to-action-btn">
								<a class="btn btn-primary" href="<?= $router->generate('contact') ?> ">Contactez-nous</a>
							</div>
						</div><!-- col end -->
					</div><!-- row end -->
				</div><!-- Action style box -->
			</div><!-- Container end -->
		</section><!-- Action end -->
         <div class="container">
          <div class="row">
            <div class="col-md-6">
               <h3 class="column-title" style="text-decoration:underline;">qui sommes-nous ?</h3>
			   <p style="font-weight:bold;">Crée le <mark style="background-color:#ffb600;">29 Octobre 2019</mark> sous le numéro de registre de commerce CI <mark style="background-color:#ffb600;">-ABJ-2019-B-21063 </mark>
										   LA COMPAGNIE DE CONSTRUCTION AMOUZOU est une entreprise multisectorielle exerçant dans 
										  le domaine du bâtiment,travaux publics et dans la prestation de services divers.
			    </p>
			   <blockquote><p style="font-weight:bold;">Porté par notre esprit d'emergence d'entreprise modèle et leaders dans le BTP,
			                                            nous accompagnons nos clients dans leurs projets du debut à la fin.
			   </p></blockquote>
			   <p style="font-weight:bold;">En tant que constructeur, nous pouvons nous occuper de l'édification de votre logement neuf mais
				aussi de la rénovation d'un bien ancien. Et tout au long de notre prestation, nos experts sont à votre écoute 
				afin de vous conseiller et répondre à vos exigences. De même, après la réalisation de votre projet, nous restons à votre disposition 
				puisque nos demeures bénéficient de la garantie de parfait achèvement, de bon fonctionnement,décennale, de livraison à prix et 
				delais convenus.</p>

            </div><!-- Col end -->
			<div class="col-md-6">
               
				<div class="item " style="background:url(assets/images/team/6.jpg) no-repeat center;
				                           background-size: cover;
										   height:500px;
										   border-radius:50px;
									      ">
					<div class="slider-content">
						<div class="col-md-12 text-center">
							
						</div>
					</div>
				</div>
 
			 </div><!-- Col end -->
            
         </div><!-- Content row end -->

          </div><!-- Container end -->
       </section><!-- Main container end -->

		<section id="Outils" class="facts-area dark-bg">
			<div class="container">
				<div class="row">
					<div class="facts-wrapper">
						<h3 class="">nos outils</h3>						
						<p class="ts-facts-title" style="font-size:20px;">Pour la realisation des travaux </p>
						<p class="ts-facts-title" style="font-size: 20px;">La Companie de Construction Amouzou s'est doté de 
							materiels et outillages de pointe notament :
						</p>
						<div class="col-sm-4 ts-facts">
							<div class="ts-facts-img" style="margin-bottom:12px; ">
								<img src="assets/images/icon-image/3.png" height='60' width='60' alt="" />
							</div>
							<div class="ts-facts-content">
								
								<h3 class="ts-facts-title">Les betonniere modernes</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-sm-4 ts-facts">
							<div class="ts-facts-img" style="margin-bottom: 12px;">
								<img src="assets/images/icon-image/2.png" height='60' width='60' alt="" />
							</div>
							<div class="ts-facts-content">
							
								<h3 class="ts-facts-title">Des martaux piqueurs</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-sm-4 ts-facts">
							<div class="ts-facts-img" style="margin-bottom: 12px;">
								<img src="assets/images/icon-image/1.png" height='60' width='60' alt="" />
							</div>
							<div class="ts-facts-content">
								<h3 class="ts-facts-title">Des camions bennes</h3>
							</div>
						</div><!-- Col end -->

					</div> <!-- Facts end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Facts end -->

		<section id="special" class="ts-service-area">
			<div class="container">
				<div class="row text-center">
					<h3 class="section-sub-title">Ce que nous faisons</h3>
					<h2 class="section-title">Nous sommes specialiste en</h2>
				</div>
				<!--/ Title row end -->

				<div class="row bord" style="margin-top:7%;">

					<div class="col-md-4 " >
						<div class="ts-service-box">
							<div class="ts-service-box-img pull-left">
								<img src="assets/images/icon-image/service-icon1.png" alt="" />
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="<?= $router->generate('construction')?>">Construction de maison</a></h3>
								<p> Nous construisons tout types de maisons a savoir les maisons basses,les hautstandings etc.. </p>
							</div>
							
						</div><!-- Service 1 end -->
					</div>

					<div class="col-md-4 ">
						<div class="ts-service-box">
							<div class="ts-service-box-img pull-left">
								<img src="assets/images/icon-image/service-icon2.png" alt="" />
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="<?= $router->generate('renovation')?>">renovation</h3></a>
								<p>Nous nous occupons de tout ce qui concerne l'entretien d'un bâtiment et la rénovation </p>
							</div>
						</div><!-- Service 2 end -->
					</div>

					<div class="col-md-4 ">
						<div class="ts-service-box">
							<div class="ts-service-box-img pull-left">
								<img src="assets/images/icon-image/service-icon3.png" alt="" />
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="<?= $router->generate('plan')?>">confection de plan</a></h3>
								<p>Nos experts vous accompagnent pour élaborer des plans, maquette et devis  </p>
							</div>
						</div><!-- Service 3 end -->
					</div><!-- Col end -->

				</div>

					 <!--<div class="col-md-4 text-center">
						<img class="service-center-img img-responsive" src="images/.jpg" alt="" />
					</div>--><!-- Col end -->

				<div class="row bord" style="margin-top:2%;">

					<div class="col-md-4">
						<div class="ts-service-box">
							<div class="ts-service-box-img pull-left">
								<img src="assets/images/icon-image/service-icon4.png" alt="" />
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="Offres/gestion.php">Gestions immobilieres </a></h3>
								<p>Nous gérons vos biens immobilier que ce soit la location ou la vente de maison</p>
							</div>
						</div><!-- Service 4 end -->
					</div>

					<div class="col-md-4">
						<div class="ts-service-box">
							<div class="ts-service-box-img pull-left">
								<img src="assets/images/icon-image/service-icon5.png" alt="" />
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="<?= $router->generate('tp')?>">travaux publics</a></h3>
								<p>TRAVAUX PUBLICS
		                          Le secteur économique du bâtiment et des travaux publics, ou BTP, regroupe toutes les activités</p>
							</div>
						</div><!-- Service 5 end -->
					</div>

					<div class="col-md-4">
						<div class="ts-service-box">
							<div class="ts-service-box-img pull-left">
								<img src="assets/images/icon-image/service-icon6.png" alt="" />
							</div>
							<div class="ts-service-box-info">
								<h3 class="service-box-title"><a href="Offres/expertise.php">Expertise et conseil</a></h3>
								<p>Notre équipes d'expert vous suivent dans la realisation et l'élaboration de votre projets immobilers</p>
							</div>
						</div><!-- Service 6 end -->
					</div><!-- Col end -->
				</div><!-- Content row end -->

			</div>
			<!--/ Container end -->
		</section><!-- Service end -->

		<section id="realisation" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<h3 class="section-sub-title">Realisations</h3>
					<h2 class="section-title" style="margin-top:-3%;margin-bottom:12px;">Nous realisons tout types de projet en construction tels que :</h2>
				</div>
				<!--/ Title row end -->

			    <div class="row">
						<div id="main-slide1" class="carousel slide" data-ride="carousel">

								<!-- Indicators -->
								<ol class="carousel-indicators visible-lg visible-md">
									<li data-target="#main-slide1" data-slide-to="0" class="active"></li>
									<li data-target="#main-slide1" data-slide-to="1"></li>
									<li data-target="#main-slide1" data-slide-to="2"></li>
									<li data-target="#main-slide1" data-slide-to="3"></li>
									<li data-target="#main-slide1" data-slide-to="4"></li>
									<li data-target="#main-slide1" data-slide-to="5"></li>
									<li data-target="#main-slide1" data-slide-to="6"></li>
								</ol>
								<!--/ Indicators end-->
					
								<!-- Carousel inner -->
								<div class="carousel-inner">
					
									<div class="item active" style="background:url(assets/images/projects/1.jpg) no-repeat center;">
										<div class="slider-content">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated3"> les maisons basses</h2>																
											</div>
										</div>
									</div>
									<!--/ Carousel item 1 end -->
					
									<div class="item" style="background:url(assets/images/projects/5.jpg) no-repeat center;">
										<div class="slider-content ">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated4"> Les duplex R+</h2>												
											</div>
										</div>
									</div>

									<div class="item" style="background:url(assets/images/projects/10.jpg) no-repeat center;">
										<div class="slider-content ">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated4"> Les duplex R+</h2>												
											</div>
										</div>
									</div>
									<!--/ Carousel item 2 end -->
					
									<div class="item" style="background:url(assets/images/projects/4.jpg) no-repeat center;">
										<div class="slider-content">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated6">Les Haut standings </h2>
											
											</div>
										</div>
									</div>
									<!--/ Carousel item 3 end -->

									<div class="item" style="background:url(assets/images/projects/13.jpg) no-repeat center;">
										<div class="slider-content">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated6">Les Haut standings </h2>
											
											</div>
										</div>
									</div>
									<div class="item" style="background:url(assets/images/projects/6.jpg) no-repeat center;">
										<div class="slider-content ">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated4">La Vitrerie</h2>												
											</div>
										</div>
									</div>
									<div class="item" style="background:url(assets/images/projects/8.jpg) no-repeat center;">
										<div class="slider-content ">
											<div class="col-md-12 text-center">
												<h2 class="slide-title-box animated4">La Vitreries</h2>												
											</div>
										</div>
									</div>
								</div><!-- Carousel inner end-->
							
					
								<!-- Controllers -->
								<a class="left carousel-control" href="#main-slide1" data-slide="prev">
									<span><i class="fa fa-angle-left"></i></span>
								</a>
								<a class="right carousel-control" href="#main-slide1" data-slide="next">
									<span><i class="fa fa-angle-right"></i></span>
								</a>
							</div>
					
				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Project area end -->

		<section class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="column-title">nos Partenaires</h3>

						<div id="testimonial-slide" class=" testimonial-slide">
							<div class="item">
								<div class="quote-item">
									<!--<span class="quote-text">
										Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
										view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
										subline of her own road.
									</span> --->
								</div><!-- Quote item end -->
							</div>
							<!--/ Item 1 end -->
						</div>
						<!--/ Testimonial carousel end-->
					</div><!-- Col end -->

					<div class="col-md-6">

						<div class="row all-clients">
							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="assets/images/1.jpg" alt="" /></a>
								</figure>
							</div><!-- Client 1 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="assets/images/2.jpg" alt="" /></a>
								</figure>
							</div><!-- Client 2 end -->

							<div class="col-sm-4">
								<figure class="clients-logo">
									<a href="#"><img class="img-responsive" src="assets/images/4.png" alt="" /></a>
								</figure>
							</div><!-- Client 3 end -->

							


						</div><!-- Clients row end -->

					</div><!-- Col end -->

				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Content end -->

		
		<section id="service" class="news">
			<div class="container">
				<div class="row text-center">
					
					<h3 class="section-sub-title">Nos services</h3>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-md-4 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
								<a href="<?= $router->generate('tp')?>" class="latest-post-img">
									<img class="img-responsive" src="assets/images/services/service1.jpg" alt="img">
								</a>
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a href="<?= $router->generate('tp')?>">Travaux publics</a>
								</h4>
								
							</div>
						</div><!-- Latest post end -->
					</div><!-- 1st post col end -->

					<div class="col-md-4 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
								<a href="<?= $router->generate('construction')?>" class="latest-post-img">
									<img class="img-responsive" src="assets/images/services/service4.jpg" alt="img">
								</a>
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a href="<?= $router->generate('construction')?>"> Construction generale</a>
								</h4>
								
							</div>
						</div><!-- Latest post end -->
					</div><!-- 2nd post col end -->

					<div class="col-md-4 col-xs-12">
						<div class="latest-post">
							<div class="latest-post-media">
								<a href="<?= $router->generate('plan')?>" class="latest-post-img">
									<img class="img-responsive" src="assets/images/services/5.jpg" alt="img">
								</a>
							</div>
							<div class="post-body">
								<h4 class="post-title">
									<a href="<?= $router->generate('plan')?>">Confection de plan et devis de maison</a>
								</h4>
								
							</div>
						</div><!-- Latest post end -->
					</div><!-- 3rd post col end -->
				</div>
				<!--/ Content row end -->

				<div class="general-btn text-center">
					<a class="btn btn-primary" href="<?= $router->generate('service')?>">Nos services</a>
				</div>

			</div>
			<!--/ Container end -->
		</section>
		<!--/ News end -->
      
</div><!-- Body inner end -->



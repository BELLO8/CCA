<?php 
     
     $meta_content=' ';
     $title='Services - Amouzou Construction';


?>

   <div id="banner-area" class="banner-area" style="background-image:url(../assets/images/banner/2.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
               <div class="col-md-12 text-center" >							
							<h3 class="slide-sub-title animated8" style="color:#111;">Services</h3>
						</div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">

            <div class="col-md-4">
               <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                     <img class="img-responsive" src="../assets/images/services/service4.jpg" alt="">
                  </div>
                  <div class="ts-service-box-img pull-left">
                     <img src="../../assets/images/icon-image/service-icon1.png" alt="" />
                  </div>
                  <div class="ts-service-info">
                     <h3 class="service-box-title"><a href="<?= $router->generate('construction')?>">Construction de bâtiment</a></h3>
                     <p>Pour la realisation de tout vos projets de construction  </p>
                     <p><a class=" btn btn-primary" href="<?= $router->generate('construction')?>"><i class="fa fa-caret-right"></i> Savoir plus</a></p>  
                  </div>
               </div><!-- Service1 end -->
            </div><!-- Col 1 end -->

            <div class="col-md-4">
               <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                        <img class="img-responsive" src="../assets/images/services/service1.jpg" alt="">
                  </div>
                  <div class="ts-service-box-img pull-left">
                     <img src="../assets/images/icon-image/service-icon2.png" alt="" />
                  </div>
                  <div class="ts-service-info">
                     <h3 class="service-box-title"><a href="<?= $router->generate('tp')?>">Travax publics</a></h3>
                     <p>TRAVAUX PUBLICS Le secteur économique du bâtiment et des travaux publics, ou BTP, regroupe toutes les activités de conception et de ..</p>
                     <p><a class=" btn btn-primary" href="<?= $router->generate('tp')?>"><i class="fa fa-caret-right"></i> Savoir plus</a></p>  
                  </div>
               </div><!-- Service2 end -->
            </div><!-- Col 2 end -->

            <div class="col-md-4">
               <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                        <img class="img-responsive" src="../assets/images/services/service3.jpg" alt="">
                  </div>
                  <div class="ts-service-box-img pull-left">
                     <img src="../assets/images/icon-image/service-icon3.png" alt="" />
                  </div>
                  <div class="ts-service-info">
                     <h3 class="service-box-title"><a href="<?= $router->generate('plan')?>">Confection de plan</a></h3>
                     <p>Portez-vous un projet, contactez-nous pour la réalisation de votre projet selon votre budget et en respectant vos idées.</p>
                     <p><a class=" btn btn-primary" href="<?= $router->generate('plan')?>"><i class="fa fa-caret-right"></i> Savoir plus</a></p>  
                  </div>
               </div><!-- Service3 end -->
            </div><!-- Col 3 end -->

            <div class="gap-30"></div>

            
         </div><!-- Main row end -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->
  
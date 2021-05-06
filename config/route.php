<?php

$router = new AltoRouter();

$router->map('GET','/', 'accueil','home');
$router->map('GET','/Notre-equipe','equipe','equipe');
$router->map('GET','/contact','contact','contact');

$router->map('GET','/Service/Amenagement','Service/amenagement','amenagement');
$router->map('GET','/Service/Construction-de-maison','Service/construction','construction');
$router->map('GET','/Service/Confection-de-plan','Service/plan','plan');
$router->map('GET','/Service/Renovation-de-maison','Service/renovation','renovation');
$router->map('GET','/Service/Nos-service','Service/services','service');
$router->map('GET','/Service/Travaux-publics','Service/tp','tp');

/**$router->map('GET','/Offres/Entretien-des-sites','Offres/entretien','amenagement');
$router->map('GET','/Offres/Expertise-et-conseils','Offres/expertise','construction');
$router->map('GET','/Offres/Lotissement-de-terrain','Offres/lotissement','plan');
$router->map('GET','/Offres/Nettoyages','Offres/nettoyage','renovation');
$router->map('GET','/Offres/Paysagistes','Offres/paysagiste','service');*/






?>
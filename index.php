<?php 

require 'vendor/autoload.php';
require 'config/route.php';

$match = $router->match();

if (is_array($match)){
	
     ob_start();
	require "pages/{$match['target']}.php";
	$pagecontent = ob_get_clean();
	require 'elements/part.php';
}else{
	echo 404 ;
}


?>
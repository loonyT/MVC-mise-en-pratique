<?php 

define('WEBROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME'])); 
define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME'])); 


//now we have to include all the files of our core 


require(ROOT. 'core/model.php');
require(ROOT.'core.controler.php');

//recupérer les paramètres en explosant lachaine 

$param = explode('/', $_GET['p']); 
$controler = $params[0];
$action = $params[1];

require ('controllers/'.$controler.'.php');
$controler = new $controler();

//now we have to call the action within the controleur 

$controller->$ction(); 




?>


<?php
require __DIR__.'/vendor/autoload.php';
use src\session\Login;
use src\controller\util\Render;


Login::requireLoginAdmin();

$render= Render::listAirport();


include __DIR__.'/include/head.php'; ///Script e bootstrap
include __DIR__.'/include/toolbarAdm.php'; /// Menu Viajando dropdown, sanduiche
include __DIR__.'/include/listagemAirport.php'; ///Front








?>

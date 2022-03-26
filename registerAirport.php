<?php
require __DIR__.'/vendor/autoload.php';
use src\session\Login;
use src\controller\util\Render;


Login::requireLoginAdmin();

$render= Render::registerAirport();


include __DIR__.'/include/head.php';
include __DIR__.'/include/toolbarAdm.php';
include __DIR__.'/include/formAirport.php';
include __DIR__.'/include/footer.php';
?>

<?php
require __DIR__.'/vendor/autoload.php';
use src\session\Login;
use src\controller\util\Render;


$render= Render::index();


include __DIR__.'/include/head.php';
if(Login::requireLoginAdminBool()){
  include __DIR__.'/include/toolbarHomeAdmin.php';
}
else{
  include __DIR__.'/include/toolbarHome.php'; /// Menu Viajando dropdown, sanduiche//sobre a agencia
}
include __DIR__.'/include/home.php';
include __DIR__.'/include/footer.php';


?>

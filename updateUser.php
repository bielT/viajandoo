<?php
require __DIR__.'/vendor/autoload.php';

use src\session\Login;
use src\controller\util\Render;

Login::requireLogin();


$render= Render::updateUser();



include __DIR__.'/include/head.php';
if(Login::requireLoginAdminBool()){
  include __DIR__.'/include/toolbarAdm.php';
}
else{
  include __DIR__.'/include/toolbarUser.php';
}
include __DIR__.'/include/formUser.php';
include __DIR__.'/include/footer.php';




?>

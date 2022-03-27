<?php
require __DIR__.'/vendor/autoload.php';
use src\session\Login;
use src\controller\util\Render;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header("location: index.php?status=error");
  exit;
}

$render= Render::ticket(filter_input(INPUT_GET, 'id',
                              FILTER_SANITIZE_ENCODED));


include __DIR__.'/include/head.php';
if(Login::requireLoginAdminBool()){
  include __DIR__.'/include/toolbarHomeAdmin.php';
}
else{
  include __DIR__.'/include/toolbarHome.php';
}
include __DIR__.'/include/ticket.php';
include __DIR__.'/include/footer.php';




?>

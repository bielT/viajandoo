<?php
require __DIR__.'/vendor/autoload.php';
use src\session\Login;
use src\controller\util\Render;


Login::requireLoginAdmin();

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header("location: index.php?status=error");
  exit;
}
 $render= Render::updateFlight(filter_input(INPUT_GET, 'id',
                               FILTER_SANITIZE_ENCODED));
$_POST["id"] = filter_input(INPUT_GET, 'id',
                              FILTER_SANITIZE_ENCODED);

include __DIR__.'/include/head.php';
include __DIR__.'/include/toolbarAdm.php';
include __DIR__.'/include/formFlight.php';
include __DIR__.'/include/footer.php';




?>

<?php
require __DIR__.'/vendor/autoload.php';

use src\session\Login;
use src\controller\util\Render;


Login::requireLoginAdmin();

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header("location: index.php?status=error");
  exit;
}
$render= Render::deleteFlight(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_ENCODED));

if(isset($_POST['excluir'])){

  $render['obj']->delete();

  header('location: listFlight.php?status=success');
  exit;
}
include __DIR__.'/include/head.php'; ///Script e bootstrap
include __DIR__.'/include/toolbarAdm.php'; /// Menu Viajando dropdown, sanduiche
include __DIR__.'/include/confirmar_exclusao.php'; ///Front







?>

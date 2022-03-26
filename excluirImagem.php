<?php
require __DIR__.'/vendor/autoload.php';
use src\session\Login;
use src\controller\util\Render;


Login::requireLoginAdmin();

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header("location: index.php?status=error");
  exit;
}
$render= Render::deleteImagem(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_ENCODED));

if(isset($_POST['excluir'])){

  $render['obj']->delete();
  $id = $render['obj']->getAirportByPage($render["obj"]->id_page);  
  header('location: updateAirport.php?id='.$id->idairport.'&status=success');
  exit;
}
include __DIR__.'/include/head.php';
include __DIR__.'/include/toolbarAdm.php';
include __DIR__.'/include/confirmar_exclusao.php';







?>

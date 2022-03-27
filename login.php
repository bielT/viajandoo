<?php
require __DIR__.'/vendor/autoload.php';

use src\session\Login;
use src\Entity\User;
use src\controller\util\Render;

Login::requireLogout();
$render= Render::login();

$alertLogin="";

if($_POST){
  $usuario = User::getUserByEmail($_POST['formEmail']);

  if(!$usuario || !password_verify($_POST['formPassword'],$usuario->password))
    $alertLogin="Senha ou email invalido";
 else {
   Login::login($usuario);
 }
}



include __DIR__.'/include/head.php';  ///Script e bootstrap
include __DIR__.'/include/toolbarUser.php';
include __DIR__.'/include/login.php'; ///Front
?>

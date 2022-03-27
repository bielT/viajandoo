<?php
namespace src\session;


class Login
{

  private static function init(){

    if(session_status() !== PHP_SESSION_ACTIVE){

      session_start();
    }
  }

  public static function getUsuarioLogado()
  {
    self::init();
    return self::isLogged() ? $_SESSION["usuario"] : null;
  }

  public static function login($usuario){
    self::init();


    $_SESSION['usuario'] = [
      'id'    =>  $usuario->iduser,
      'nome'  =>  $usuario->name,
      'email' =>  $usuario->email,
      'pefil' =>  $usuario->profile
    ];


    header('location: index.php');
    exit;
  }

  public static function logout(){
    self::init();

    print_r('asdf');
    unset($_SESSION['usuario']);
    header('location: login.php');
    exit;
  }

  public static function loginSem($usuario){
    self::init();


    $_SESSION['usuario'] = [
      'id'    =>  $usuario->iduser,
      'nome'  =>  $usuario->name,
      'email' =>  $usuario->email,
      'pefil' =>  $usuario->profile
    ];
    exit;
  }
  public static function isLogged(){
    self::init();
    return isset($_SESSION['usuario']);

  }

  public static function requireLogin()
  {
    if(!self::isLogged()){
      header('location: login.php');
      exit;
    }
  }
  public static function requireLogout()
  {
    if(self::isLogged()){
      header('location: index.php');
      exit;
    }
  }
  public static function requireLoginAdmin()
  {
    self::init();
    if(self::isLogged()  ){
      if($_SESSION['usuario']['pefil']==="0"){

        return true;
      }
    }

     header('location: index.php');
     exit;
  }
  public static function requireLoginAdminBool()
  {
    self::init();
    if(self::isLogged()  ){
      if($_SESSION['usuario']['pefil']==="0"){

        return true;
      }

    }
    return false;

  }

}




?>

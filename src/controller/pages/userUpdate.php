<?php
namespace src\controller\pages;


require __DIR__.'/../../../vendor/autoload.php';



use  src\Entity\User;
use  src\Entity\Address;
use  src\session\Login;





if (!empty( $_POST ) ) {
  // print_r($_POST);


  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  $session =Login::getUsuarioLogado();
  $use   = User::getUser($session['id']);

  function registerAddresses($id,$dados2){
    Address::deleteUser($id);
    $number = count($dados2['cep']);
    if($number > 0)
    {
      for($i=0; $i<$number; $i++)
      {
        $address[$i]=  new Address(
          $dados2['endereco'][$i],
          $dados2['cidade'][$i],
          $dados2['estado'][$i],
          $dados2['numero'][$i],
          $dados2['cep'][$i],
          $dados2['complemento'][$i],
          $id
        );
        $address[$i]->register();
      }
    }
  }
  if( !password_verify($dados['password'],$use->password))
  print_r("Senha invalida");
  else {

    $id = $session['id'];
    try {
      $user1  = new User($dados['Nome'],
      $session['email'],
      $dados['telefone'],
      $dados['cpf'],
      $use->password,
      $id,
      $session['pefil']);
      $user1->update();
      registerAddresses($id,$dados);
      echo "Atualizado com SUCESSO";
      Login::loginSem(User::getUser($id));
    } catch (\Exception $e) {
      echo "Erro de conexão BD";
    }
  }


}else {
  echo "Operação invalidade";

}

?>

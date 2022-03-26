<?php
namespace src\controller\pages;


require __DIR__.'/../../../vendor/autoload.php';



use  src\Entity\User;
use  src\Entity\Address;


if ( ! empty( $_POST ) ) {


  $dados  = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $senha =  password_hash($dados['password'], PASSWORD_DEFAULT);



  function registerAddresses($id,$dados2){
    $number = count($dados2['cep']);
    if($number > 0)
    {for($i=0; $i<$number; $i++)
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

  if(!User::getUsers("email='".$dados['email']."'")){

    try {
      $user1  = new User($dados['Nome'],
      $dados['email'],
      $dados['telefone'],
      $dados['cpf'],
      $senha);
      registerAddresses($user1->register(),$dados);
      echo "Cadratrado com SUCESSO";
    } catch (\Exception $e) {
      echo "Erro de conexão BD";
    }



  }else {
    echo "Erro no envio do e-mail.";
  }
}else {
  echo "Operação invalidade";

}

?>

<?php
namespace src\controller\pages;


require __DIR__.'/../../../vendor/autoload.php';



use  src\Entity\Flight;



if ( ! empty( $_POST ) ) {


  $dados  = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  try {
    $flight  = new Flight($dados['opAirIn'],
    $dados['opAirOut'],
    $dados['datepickerin'].','.$dados['hourin'],
    $dados['datepickerout'].','.$dados['hourout']
  );
  $flight->register();
  echo "Cadratrado com SUCESSO";
} catch (\Exception $e) {
  echo "Erro de conexão BD";
}




}else {
  echo "Operação invalidade";

}

?>

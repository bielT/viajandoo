<?php
namespace src\controller\pages;


require __DIR__.'/../../../vendor/autoload.php';



use  src\Entity\ImagemCarousel;
use  src\Entity\AirportPageContent;
use  src\Entity\Airport;




if ( ! empty( $_POST ) ) {
  $dados =  filter_input_array(INPUT_POST, FILTER_DEFAULT);
  if($dados["submit"]==="0"){
    if (isset( $_FILES['imagemcarrocel'] ) ) {
      Cadastrar($dados);
    }else {
      echo "Erro no envio.";
      header('location: registerAirport.php');
      exit;
    }
  }elseif($dados["submit"]==="1"){


    try {
      $imagemdescricao = null;
      if($_FILES['imagemdescricao']['size']>0){
        if (file_exists($dados["path_description"])){
          unlink($dados["path_description"]);
        }
        $imagemdescricao =$_FILES['imagemdescricao'];
      }
      $imagemminiatura = null;
      if($_FILES['imagemminiatura']['size']>0){
        if (file_exists($dados["path_miniature"])){
          unlink($dados["path_miniature"]);
        }
        $imagemminiatura=$_FILES['imagemminiatura'];
      }
      updateAirport($dados);
      updatePageConteudo($imagemdescricao,$imagemminiatura,$dados );
      if ( $_FILES['imagemcarrocel']['size'][0]>0 ) {
        enviarImagemCarousel($_FILES['imagemcarrocel'],$dados["id_page"]);
      }
      echo "Cadratrado com SUCESSO";
      header('location: ../../../ticket.php?id='.$dados["id"].'');

    } catch (\Exception $e) {
      echo "Erro de conexão BD";
      header('location: ../../../registerAirport.php');
      exit;

    }


  }
}else {
  echo "Operação invalidade";
  header('location: ../../../registerAirport.php');
  exit;
}

function Cadastrar($dados)
{

  $arquivos = [
    $_FILES['imagemcarrocel'],
    $_FILES['imagemdescricao'],
    $_FILES['imagemminiatura']
  ];

  try {

    $id =enviarAirport($dados);
    enviarImagemCarousel($arquivos[0],
    enviarPageConteudo( $arquivos[1],
    $arquivos[2],$dados,$id));
    echo "Cadratrado com SUCESSO";
    header('location: ../../../ticket.php?id='.$id.'');
    exit;
  } catch (\Exception $e) {
    echo "Erro de conexão BD";
    header('location: ../../../registerAirport.php');
    exit;
  }
}

function enviarArquivo($error,$size, $name, $tmp_name )
{
  if($error)
  die("Falha ao enviar arquivo");
  if($size>5097125)
  die("Aquivo muito grande!! MAX:5MB");
  $pasta = "../../../imagens/pages/";
  $nomeDoArquivo = $name;
  $novoNomeDoArquivo = uniqid();
  $exentensao= strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
  if($exentensao  != "jpg"&& $exentensao  != "png" )
  die("tipo de arquivo não aceito");

  $path = $pasta . $novoNomeDoArquivo .".".$exentensao;
  $path1 ="imagens/pages/". $novoNomeDoArquivo .".".$exentensao;
  return move_uploaded_file($tmp_name,$path) ? $path1 : false;
}


function enviarImagemCarousel($arquivos,$air){
  foreach ($arquivos["error"] as $key => $value) {
    $path = enviarArquivo($arquivos["error"][$key],$arquivos["size"][$key], $arquivos["name"][$key], $arquivos["tmp_name"][$key]);
    $carousel = new ImagemCarousel($path, $air);
    $carousel->register();
  }
}



function enviarPageConteudo($arquivosDes,$arquivosMin,$dados,$air){
  $apc =new AirportPageContent(
    $dados["resumo"],
    $dados["descricao"],
    $dados["preco"],
    enviarArquivo($arquivosDes["error"],$arquivosDes["size"], $arquivosDes["name"], $arquivosDes["tmp_name"]),
    enviarArquivo($arquivosMin["error"],$arquivosMin["size"], $arquivosMin["name"], $arquivosMin["tmp_name"]),
    $air
  );
  return $apc->register();

}

function updatePageConteudo($arquivosDes=null,$arquivosMin=null,$dados){
  $apc =new AirportPageContent(
    $dados["resumo"],
    $dados["descricao"],
    $dados["preco"],
    $arquivosDes ?enviarArquivo($arquivosDes["error"],$arquivosDes["size"], $arquivosDes["name"], $arquivosDes["tmp_name"]): $dados["path_description"],
    $arquivosMin ?enviarArquivo($arquivosMin["error"],$arquivosMin["size"], $arquivosMin["name"], $arquivosMin["tmp_name"]): $dados["path_miniature"],
    $dados["id"],
    $dados["id_page"]
  );
  return $apc->update();

}

function enviarAirport($dados)
{
  $air = new Airport(
    $dados["Nome"],
    $dados["cidade"],
    $dados["estado"],
    $dados["pais"]
  );
  return $air->register();

}
function updateAirport($dados)
{
  $air = new Airport(
    $dados["Nome"],
    $dados["cidade"],
    $dados["estado"],
    $dados["pais"],
    $dados["id"]
  );
  return $air->update();
}


?>

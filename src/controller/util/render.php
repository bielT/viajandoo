<?php

namespace src\controller\util;

use src\session\Login;
use src\Entity\User;
use src\Entity\Address;
use src\Entity\Airport;
use src\Entity\AirportPageContent;
use src\Entity\ImagemCarousel;
use src\Entity\Flight;
use src\controller\pages\FormAddress;

/**
*
*/
class Render
{



  public static function ticket($id){
    $air = Airport::getAirport($id);
    $airf  = Flight::getFlightsByAirport($id);
    $apc = AirportPageContent::getPageByAirport($id);
    $ca  = ImagemCarousel::getImagemCarouselByPage($apc->idairport_page_content);
    print_r($air);

    $card ='';
    $li ='';
    $localdepart ="";
    foreach ($airf as $key => $value) {
      $fl = Airport::getAirport($value->id_outbound_airport);
      $localdepart = $localdepart.'<option value="'.$value->id_outbound_airport.'">'.$fl->name.','.$fl->city.'
        </option>';
    }
    foreach ($ca as $key=>$value) {
      $li = $key == 0? $li.'<li data-target="#mainSlider" data-slide-to="'.$key.'" class="active"></li>':'<li data-target="#mainSlider" data-slide-to="'.$key.'"></li>';
      $card = $key == 0?$card.'<div class="carousel-item active">':$card.'<div class="carousel-item">';
      $card = $card.'
      <img src="'.$value->path.'" class="d-block w-100"
      alt="viajar pelo mundo" />
      </div>';
    }
    return  [
      'dataehora'=>"",
      "localdepart"=>$localdepart,
      'li' => $li,
      "item"  => $card,
      "local"     => $air->city,
      "descricao" => $apc->description,
      "resumo"    => $apc->resume ,
      "preco"     => $apc->price,
      "title"     => $air->name,
      "imagemdescricao" => $apc->path_image_description,
      "carousel" => $apc->path_image_description,
      "links"     => '',
      "script"  => '<script src="js/ticket.js"></script>'];
    }

    public static function index(){
      $air = Airport::getAirports();
      $grupoair = array_chunk($air, 4);
      $card ='';
      $li ='';
      foreach ($grupoair as $key=>$value) {

        $card = $key == 0?$card.'<div class="carousel-item active">':$card.'<div class="carousel-item">';
        $card = $card.'<div class="row">';
        $li = $key == 0? $li.'<li data-target="#mainSlider" data-slide-to="'.$key.'" class="active"></li>':'<li data-target="#mainSlider" data-slide-to="'.$key.'"></li>';
        foreach ($value as  $val) {
          $pg = AirportPageContent::getPageByAirport($val->idairport);
          $card = $card.'<div class="col-md-3">
          <a href="ticket.php?id='.$val->idairport.'">
          <div class="card">

          <img src="'.$pg->path_miniature.'" class="rounded card-img-top" id="im-card"
          alt="'.$pg->description.'">

          <div class="card-body  card-carousel">
          <h5 class="card-title">'.$val->name.'</h5>
          <p class="card-text">'.$pg->price.'</p>
          </div>
          </div>
          </a>
          </div>';
        }
        $card=$card.'</div></div>';
      }

      return  [
        'li' => $li,
        "cards"  => $card,
        "title"   =>'Home',
        "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
        "script"  => '<script src="js/scripts.js"></script>
        '];
      }



      // Feito

      public static function deleteAirport($id){
        $air = Airport::getAirport($id);
        if(!$air instanceof Airport){
          header("location: index.php?status=error");
          exit;}

          return [
            "item"=> $air->name,
            "obj"=>$air,
            "title"   =>'delete',
            "a_link"=> 'listFlight.php',
            "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
            <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
            "script"  => '<script src="js/scripts.js"></script>'];
          }
          public static function deleteFlight($id){
            $air = Flight::getFlight($id);
            if(!$air instanceof Flight){
              header("location: index.php?status=error");
              exit;}

              return [
                "item"=> $id,
                "obj"=>$air,
                "a_link"=> 'listFlight.php',
                "title"   =>'delete',
                "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                "script"  => '<script src="js/scripts.js"></script>'];
              }

              public static function deleteImagem($id){
                $air = ImagemCarousel::getImagemCarousel($id);
                if(!$air instanceof ImagemCarousel){
                  header("location: index.php?status=error");
                  exit;}

                  return ["obj"=>$air,
                  "title"   =>'delete',
                  "a_link"=> 'listAirport.php',
                  "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                  <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                  "script"  => '<script src="js/scripts.js"></script>'];
                }

                public static function updateUser(){
                  $i=1;

                  $us =Login::getUsuarioLogado();
                  $user = User::getUser($us['id']);
                  $ad    =Address::getAddressByUser($us['id']);
                  $render =  array(
                    "nome"=>$user->name,
                    "cpf"=> $user->cpf,
                    "telefone"=> $user->telefone,
                    "email"=>$user->email,
                    "disabled"=>"disabled",
                    "endereco"   => array(0 => $ad[0]->address),
                    "numero"    => array(0 => $ad[0]->number),
                    "complemento"=> array(0 => $ad[0]->complete),
                    "cep"      => array(0 => $ad[0]->cep),
                    "cidade"    => array(0 => $ad[0]->city),
                    "estado"    => array(0 => $ad[0]->state),
                    "rowAddress"    =>" ",
                    "title"         => 'Atualizar Usuário',
                    "type"          =>"1",
                    "links"         => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                    <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                    "script"        => '<script  src="js/formUser.js"></script> '
                  );

                  $tam = count($ad);
                  if($tam >1){
                    for ($i=1; $i < $tam ; $i++) {
                      $render["endereco"][$i] =  $ad[$i]->address;
                      $render["numero"][$i] =  $ad[$i]->number;
                      $render["complemento"][$i] =  $ad[$i]->complete;
                      $render["cep"][$i] =  $ad[$i]->cep;
                      $render["cidade"][$i] =  $ad[$i]->city;
                      $render["estado"][$i] =  $ad[$i]->state;
                      $htmlAddres =FormAddress::Form($i,$render);
                      $render["rowAddress"] = $render["rowAddress"]." ".$htmlAddres;
                    }
                  }
                  return $render;
                }


                public static function updateAirport($id){
                  $air = Airport::getAirport($id);
                  $apc = AirportPageContent::getPageByAirport($id);

                  $ca  = ImagemCarousel::getImagemCarouselByPage($apc->idairport_page_content);
                  $table = '<table class="table bg-light mt-3">
                  <tr>
                  <th>Imagem</th>
                  <th>Ação</th>
                  </tr>';
                  foreach($ca as  $value) {
                    $table.= '<tr>
                    <td><img height="50" src="'.$value->path.'"></td>
                    <td>


                    <a href="excluirImagem.php?id='.$value->idimagem.' ">
                    <button class="btn btn-danger" type="button">Excluir</button>
                    </a>
                    </td>
                    </tr>';
                  }
                  $table.='</table>';

                  return  [
                    "nome"   => $air->name,
                    "cidade" => $air->city,
                    "estado" => $air->state,
                    "pais"   => $air->country,
                    "resumo" => $apc->resume,
                    "preco"  => $apc->price,
                    "imagemdescricao" => '<span><img height="100" src="'.$apc->path_image_description.'"></span>
                    <input type="hidden" name="path_description" value="'.$apc->path_image_description.'">',
                    "imagemminiatura" => '<span><img height="100" src="'.$apc->path_miniature.'"></span>
                    <input type="hidden" name="path_miniature" value="'.$apc->path_miniature.'">
                    <input type="hidden" name="id_page" value="'.$apc->idairport_page_content.'">
                    <input type="hidden" name="id" value="'.$id.'">',
                    "required"=>  "",
                    "descricao" => $apc->description,
                    "type"    => '1',
                    "title"   =>'Atualizar Aeroporto',
                    "table"   => $table,
                    "mesagem" => "",
                    "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                    <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                    "script"  => ''];
                  }

                  public static function updateFlight($id){
                    $fli = Flight::getFlight($id);
                    $out    = explode(",", $fli->check_out_date_hour);
                    $in    = explode(",", $fli->check_in_date_hour);
                    $air = Airport::getAirports();
                    $opAirIn = "";
                    $opAirOut = "";
                    foreach ($air as  $value) {
                      $opAirIn.= '<option value="'.$value->idairport.'" '.($value->idairport==$fli->id_outbound_airport?"selected":"").'>'
                      .$value->name .','.$value->city.'</option>';
                      $opAirOut.= '<option value="'.$value->idairport.'" '.($value->idairport==$fli->id_arrival_airport?"selected":"").'>'
                      .$value->name .','.$value->city.'</option>';
                    }
                    return  [
                      "opAirIn" => $opAirIn,
                      "opAirOut" => $opAirOut,
                      "hourout" => $out[1],
                      "hourin" => "$in[1]",
                      "datepickerout" => $out[0],
                      "datepickerin" => "$in[0]",
                      "hidde"   =>'<input type="hidden" name="id" value="'.$id.'">',
                      "type"   => "1",
                      "title"  => 'Atualizar Vôo',
                      "links"  => '<link rel="stylesheet" type="text/css" href="css/picker.css" media="screen">
                      <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                      <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">
                      <script src="js/picker.js"></script>
                      <script>
                      $( function() {
                        $( "#datepickerin" ).datepicker();
                      });
                      $( function() {
                        $( "#datepickerout" ).datepicker();
                      });

                      </script>',
                      "script"  => ' <script  src="js/formFlight.js"></script> '];
                    }


                    public static function registerFlight(){
                      $air = Airport::getAirports();
                      $opAir = "";
                      foreach ($air as  $value) {
                        $opAir.= '<option value="'.$value->idairport.'">'.$value->name .','.$value->city.'</option>';
                      }
                      return  [
                        "opAirIn" => $opAir,
                        "opAirOut" => $opAir,
                        "hourout" => "",
                        "hourin" => "",
                        "datepickerout" => "",
                        "datepickerin" => "",
                        "hidde"   =>'',
                        "type"   => "0",
                        "title"  => 'Cadastrar Vôo',
                        "links"  => '<link rel="stylesheet" type="text/css" href="css/picker.css" media="screen">
                        <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                        <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">
                        <script src="js/picker.js"></script>
                        <script>
                        $( function() {
                          $( "#datepickerin" ).datepicker();
                        });
                        $( function() {
                          $( "#datepickerout" ).datepicker();
                        });

                        </script>',
                        "script"  => ' <script  src="js/formFlight.js"></script> '];
                      }
                      public static function registerUser(){
                        return  [
                          "type" => 0,
                          "nome" => "",
                          "cpf"  => "",
                          "telefone" => "",
                          "email" =>"",
                          "disabled"=>"",
                          "endereco"   => array(0 => ""),
                          "numero"    => array(0 => ""),
                          "complemento"=> array(0 => ""),
                          "cep"      => array(0 => ""),
                          "cidade"    => array(0 => ""),
                          "estado"    => array(0 =>""),
                          "rowAddress"=>" ",
                          "nome"=> "",
                          "title"   => 'Cadastrar Usuário',
                          "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                          <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                          "script"  => '<script  src="js/formUser.js"></script>'];
                        }
                        
                        public static function buy_ticket(){
                          return["title"   => 'Comprar Ticket',
                          "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                          <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                          "script"  => '<script  src="js/formUser.js"></script>'];
                        
                        }
                        public static function registerAirport(){
                          return  [
                            "nome"   => "",
                            "cidade" => "",
                            "estado" => "",
                            "pais"   => "",
                            "resumo" => "",
                            "preco" =>"",
                            "required"=>"required",
                            "imagemdescricao" => "",
                            "imagemminiatura"=> "",
                            "descricao" => "",
                            "type"    => '0',
                            "title"   =>'Cadrastrar Aeroporto',
                            "table"   => "",
                            "mesagem" => "",
                            "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                            <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                            "script"  => '<script  src="js/formAirport.js"></script> '];
                          }

                          public static function listFlight(){
                            $air = Flight::getFlights();
                            $resultados = "";
                            foreach($air as  $value) {
                              $resultados.= '<tr>
                              <td>'.$value->idflight.'</td>
                              <td>'.$value->id_outbound_airport.'</td>
                              <td>'.$value->id_arrival_airport.'</td>
                              <td>'.$value->check_out_date_hour.'</td>
                              <td>'.$value->check_in_date_hour.'</td>

                              <td>
                              <a href="updateFlight.php?id='.$value->idflight.'">
                              <button type"button" class="btn btn-primary">Editar</button>
                              </a>
                              <a href="excluirFlight.php?id='.$value->idflight.'">
                              <button type"button" class="btn btn-danger">Excluir</button>
                              </a>
                              </td>
                              </tr>';

                            }

                            $resultados = strlen($resultados)?$resultados : '<tr>
                            <td colspan="6" class"text-center> Nenhum Aeroporto encontrada</td>
                            </tr>';
                            return  [
                              "mensagem"=> "",
                              "resultados"=> $resultados,
                              "title"   =>'Listagem  Voo',
                              "links"   => '
                              <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                              <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                              "script"  => ''];
                            }
                            public static function listAirport(){
                              $air = Airport::getAirports();
                              $resultados = "";
                              foreach($air as  $value) {
                                $resultados.= '<tr>
                                <td>'.$value->idairport.'</td>
                                <td>'.$value->name.'</td>
                                <td>'.$value->city.'</td>
                                <td>'.$value->country.'</td>
                                <td>'.$value->state.'</td>
                                <td>
                                <a href="updateAirport.php?id='.$value->idairport.'">
                                <button type"button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="excluirAirport.php?id='.$value->idairport.'">
                                <button type"button" class="btn btn-danger">Excluir</button>
                                </a>
                                </td>
                                </tr>';

                              }

                              $resultados = strlen($resultados)?$resultados : '<tr>
                              <td colspan="6" class"text-center> Nenhum Aeroporto encontrada</td>
                              </tr>';
                              return  [
                                "mensagem"=> "",
                                "resultados"=> $resultados,
                                "title"   =>'Listagem de Aeroporto',
                                "links"   => '<link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">
                                <link rel="stylesheet" type="text/css" href="css/cadrastrar.css" media="screen">',
                                "script"  => ''];
                              }

                              public static function login(){
                                return  [  "title"   => 'Login',
                                "links"   => '
                                <link rel="stylesheet" type="text/css" href="css/login.css" media="screen">
                                ' ];
                              }

                            }





                            ?>

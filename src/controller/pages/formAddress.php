<?php
namespace src\controller\pages;

/**
*
*/
class FormAddress
{
  public static function form($i,$render)
  {
    // var add = {prop'.$i .':function name(){
    return  '<script>
$(".form_field_outer").append(`
    <div class=" row col-12 form_field_outer_row">
    <div class="  col-11"  style="padding: 0px;">
    <div class="form-group row" style="padding: 30px 0px 15px 0px;">
    <div class="col-6">
    <label class="input-group-addon">Endereço <h11>*</h11></label>
    <div class="input-group">
    <input id="endereco_'.($i+1) .'" name="endereco[]" value="'.$render["endereco"][$i].'"class="form-control"
    type="text" required >
    </div>
    </div>

    <div class="col-3">
    <label class="input-group-addon">Nº <h11>*</h11> </label>
    <div class="input-group">

    <input id="numero_'.($i+1).'" name="numero[]" class="form-control"
    placeholder"Apenas numeros" value="'.$render["numero"][$i].'"  type="number" pattern="[0-9]+$" required >
    </div>

    </div>

    <div class="col-3">
    <label class="input-group-addon">Complemento </label>
    <div class="input-group">
    <input id="complemento_'.($i+1).'" name="complemento[]" class="form-control"
    placeholder="Ex:Apt-123"value="'.$render["complemento"][$i].'"  type="text">
    </div>

    </div>
    </div>


    <div class="form-group row" style="padding: 30px 0px 0px 0px;">

    <div class="col-4" >
    <label class="input-group-addon col=4">CEP <h11>*</h11></label>
    <div class="input-group">
    <input id="cep_'.($i+1).'" name="cep[]" placeholder="Apenas números" value="'.$render["cep"][$i].'" class="form-control
    input-md" value="" type="search" maxlength="8" pattern="[0-9]+$" required>
    </div>

    </div>

    <div class="col-4">
    <div class="form-group ">

    <label class="input-group-addon">Cidade <h11>*</h11></label>
    <div class="input-group">
    <input id="cidade_'.($i+1).'" name="cidade[]" class="form-control" value="'.$render["cidade"][$i].'"type="text"  required >
    </div>

    </div>
    </div>

    <div class="col-4">
    <div class="form-group">
    <label class="input-group-addon">Estado <h11>*</h11></label>
    <div class="input-group">
    <input id="estado_'.($i+1).'" name="estado[]" value="'.$render["estado"][$i].'"class="form-control"
    type="text" required   >
    </div>

    </div>
    </div>

    </div>
    </div>

    <div class="col-1 " style="padding: 40px 0px;">
    <div class="form-group col-md-2 add_del_btn_outer">

    <button class="btn_round remove_node_btn_frm_field" disabled>
    <i class="fas fa-trash-alt"></i>
    </button>
    </div>
    </div>

    </div> `);
    $(".form_field_outer").find(".remove_node_btn_frm_field").prop("disabled", false);


</script>
  ';


}

}


?>

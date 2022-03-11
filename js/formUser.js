
$(document).ready(function(){
  $("body").on("click", ".add_node_btn_frm_field", function (e) {
    console.log("clicked");
    var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
    $(".form_field_outer").append(`
      <div class=" row col-12 form_field_outer_row">
      <div class="col-11"  style="padding: 0px;">
      <div class="form-group row" style="padding: 30px 0px 15px 0px;">
      <div class="col-6">
      <label class="input-group-addon">Endereço <h11>*</h11></label>
      <div class="input-group">
      <input id="endereco" name="endereco" class="form-control"
      type="text" required >
      </div>
      </div>

      <div class="col-3">
      <label class="input-group-addon">Nº <h11>*</h11> </label>
      <div class="input-group">

      <input id="numero" name="numero" class="form-control"
      placeholder="Apenas numeros" type="number"   pattern="[0-9]+$" required >
      </div>

      </div>

      <div class="col-3">
      <label class="input-group-addon">Complemento </label>
      <div class="input-group">
      <input id="complemento" name="complemento" class="form-control"
      placeholder="Ex:Apt-123"  type="text">
      </div>

      </div>
      </div>


      <div class="form-group row" style="padding: 30px 0px 0px 0px;">

      <div class="col-4" >
      <label class="input-group-addon col=4">CEP <h11>*</h11></label>
      <div class="input-group">
      <input id="cep" name="cep" placeholder="Apenas números" class="form-control
      input-md" value="" type="search" maxlength="8" pattern="[0-9]+$" required>
      </div>

      </div>

      <div class="col-4">
      <div class="form-group ">

      <label class="input-group-addon">Cidade <h11>*</h11></label>
      <div class="input-group">
      <input id="cidade" name="cidade" class="form-control" type="text"  required >
      </div>

      </div>
      </div>

      <div class="col-4">
      <div class="form-group">
      <label class="input-group-addon">Estado <h11>*</h11></label>
      <div class="input-group">
      <input id="estado" name="estado" class="form-control"
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
      </div>
      `);
      $(".form_field_outer").find(".remove_node_btn_frm_field").prop("disabled", false);

    });
  });





  $(document).ready(function(){
    //===== delete the form fieed row
    $("body").on("click", ".remove_node_btn_frm_field", function () {
      $(this).closest(".form_field_outer_row").remove();
      console.log("success");
    });
  });

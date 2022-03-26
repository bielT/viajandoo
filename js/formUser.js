$(document).ready(function(){
  var i=1;

  $('#add').click(function(){
    i++;
    $(".form_field_outer").append(`
      <div class=" row col-12 form_field_outer_row">
      <div class="col-11"  style="padding: 0px;">
      <div class="form-group row" style="padding: 30px 0px 15px 0px;">
      <div class="col-6">
      <label class="input-group-addon">Endereço <h11>*</h11></label>
      <div class="input-group">
      <input id="endereco_${i}'" name="endereco[]" class="form-control"
      type="text" required >
      </div>
      </div>

      <div class="col-3">
      <label class="input-group-addon">Nº <h11>*</h11> </label>
      <div class="input-group">

      <input id="numero_${i}'" name="numero[]" class="form-control"
      placeholder="Apenas numeros" type="number"   pattern="[0-9]+$" required >
      </div>

      </div>

      <div class="col-3">
      <label class="input-group-addon">Complemento </label>
      <div class="input-group">
      <input id="complemento_${i}'" name="complemento[]" class="form-control"
      placeholder="Ex:Apt-123"  type="text">
      </div>

      </div>
      </div>


      <div class="form-group row" style="padding: 30px 0px 0px 0px;">

      <div class="col-4" >
      <label class="input-group-addon col=4">CEP <h11>*</h11></label>
      <div class="input-group">
      <input id="cep_${i}'" name="cep[]" placeholder="Apenas números" class="form-control
      input-md" value="" type="search" maxlength="8" pattern="[0-9]+$" required>
      </div>

      </div>

      <div class="col-4">
      <div class="form-group ">

      <label class="input-group-addon">Cidade <h11>*</h11></label>
      <div class="input-group">
      <input id="cidade_${i}'" name="cidade[]" class="form-control" type="text"  required >
      </div>

      </div>
      </div>

      <div class="col-4">
      <div class="form-group">
      <label class="input-group-addon">Estado <h11>*</h11></label>
      <div class="input-group">
      <input id="estado_${i}'" name="estado[]" class="form-control"
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

    //===== delete the form fieed row
    $("body").on("click", ".remove_node_btn_frm_field", function () {
      $(this).closest(".form_field_outer_row").remove();
    });



  });

  let form = document.querySelector('#form_user');



  form.addEventListener("submit",function(event){
    event.preventDefault();
    var  type = $('#submit').val() ;
    if(type == "0") {
      $.ajax({
        url:"./src/controller/pages/userRegister.php",
        method:"POST",
        data:$('#form_user').serialize(),
        success:function(data1)
        {
          alert(data1);
        }
      });
    }else if(type == "1") {
      $.ajax({
        url:"./src/controller/pages/userUpdate.php",
        method:"POST",
        data:$('#form_user').serialize(),
        success:function(data1)
        {
          alert(data1);
        }
      });
    }

  });

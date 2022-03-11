
<main>

  <div id="form1">
    <form class="form-horizontal col-12">

      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="form-group">
            <div class="col-12 control-label" style="padding: 15px 0px 0px 0px;">
              <h1><?=$title ?></h1>
            </div>
          </div>

          <div class="col-12 control-label">
            <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
          </div>

        </div>
        <hr class="my-4">


        <div class="dados-pessoas">
          <!-- Text input-->

          <div class="form-group col-12" style="padding: 0px">
            <label class="col-12 control-label" for="Nome">Nome <h11>*</h11></label>
            <div class="col-12">
              <input id="Nome" name="Nome" placeholder="" class="form-control input-md"
              required="" type="text">
            </div>
          </div>

          <div class="form-group row" style="padding: 30px 0px 0px 0px;">

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

            <div class="col-4">
              <div class="form-group">
                <label class="input-group-addon">País <h11>*</h11></label>
                <div class="input-group">
                  <input id="estado" name="estado" class="form-control"
                  type="text" required   >
                </div>

              </div>
            </div>

          </div>


        </div>

        
        <hr class="my-4">
        <div class="arquivo row" style="padding: 0px;">

          <div class="col-11"  style="padding: 0px;">
            <div class="form-group row" style="padding: 30px 0px 15px 0px;">
              <div class="col-6">
                <label class="input-group-addon">Arquivo <h11>*</h11></label>
                <div class="input-group">
                  <input id="endereco" name="endereco" class="form-control"
                  type="file" required >
                </div>
              </div>



            </div>
          </div>

          <div class="col-1 " style="padding: 40px 0px;">
            <div class="form-group col-12 add_del_btn_outer  ">
              <button class="btn_round add_node_btn_frm_field"  style="margin-bottom: 10px;" title="Copy or clone this row">
                <i class="fas fa-copy"></i>
              </button>

              <button class="btn_round remove_node_btn_frm_field" disabled="">
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
        </div>





        <hr class="my-4">
      </div>





      <!-- Button (Double) -->
      <div class="row">
        <div class="col-6">
          <div class="form-group ">
            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group float-right ">
            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>

</main>
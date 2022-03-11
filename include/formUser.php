
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
              <input id="Nome" name="Nome" placeholder="" class="form-control input-md "
              required="" type="text">
            </div>
          </div>

          <div class="row">
            <!-- Text input-->
            <div class="form-group col-6">
              <label class="control-label" for="Nome">CPF <h11>*</h11></label>
              <div class="col-12"  style="padding: 0px 0px;">
                <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md  "
                type="text" maxlength="11" pattern="[0-9]+$" required>
              </div>


            </div>
            <!-- Prepended text-->
            <div class="form-group col-6" style="padding: 0px 0px;">
              <label class="col-12 control-label" for="prependedtext">Telefone<h11>*</h11></label>
              <div class="col-12">
                <div class="input-group">

                  <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX"
                  required="" type="text" maxlength="13"
                  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                  OnKeyPress="formatar('## #####-####', this)">
                </div>
              </div>

            </div>
          </div>
          <!-- Prepended text-->
          <div class="row">
            <div class="form-group col-6" style="padding: 0px 0px;">
              <label class="col-12 control-label" for="prependedtext">Email <h11>*</h11></label>
              <div class="form-group col-12">
                <div class="input-group">
                  <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                </div>
              </div>
            </div>

            <div class="form-group col-6">
              <label class="form-label" for="typePasswordX-2">Password<h11>*</h11></label>
              <input type="password" id="formPassword"  name="formPassword" class="form-control form-control" required />
            </div>


          </div>

        </div>


        <hr class="my-4">
        <div class="form_field_outer row" style="padding: 0px;">


          <div class="  col-11"  style="padding: 0px;">
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
            <div class="form-group col-12 add_del_btn_outer  ">
              <button class="btn_round add_node_btn_frm_field" type="button"  style="margin-bottom: 10px;" title="add row">
                <i class="fas fa-plus add_icon"></i>
              </button>

            </div>
          </div>

        </div>

      </div>


      <hr class="my-4">

      <!-- Button (Double) -->
      <div class="row">
        <div class="col-6">
          <div class="form-group ">
            <button id="Cancelar" name="Cancelar" class="btn btn-danger"
              type="Reset">Cancelar</button>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group float-right ">
            <button id="Cadastrar" name="Cadastrar" class="btn btn-success"
              type="Submit">Cadastrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>

</main>

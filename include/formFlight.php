
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

          <div class="form-group row" style="padding: 30px 0px 0px 0px;">

            <div class="col-6">
              <label class="input-group-addon">Aeroporto de Saída <h11>*</h11></label>
              <select class="form-control"  id="areoportoS"required >
                <option>Select padrão</option>
              </select>
            </div>

            <div class="col-6">
              <label class="input-group-addon">Aeroporto de Destino <h11>*</h11></label>
              <select class="form-control" id="areoportoD"required >
                <option></option>
              </select>
            </div>



          </div>

          <div class="form-group row" style="padding: 30px 0px 0px 0px;">

            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Data<h11>*</h11></label>
                <input type="text" id="datepickerin"  class="form-control" required>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Horário <h11>*</h11></label>
                <div class="input-group">
                  <input id="hourin" name="hourin" class="form-control" type="time"  required >
                </div>

              </div>
            </div>


            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Data<h11>*</h11></label>
                <input type="text" id="datepickerout"  class="form-control" required>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Horário <h11>*</h11></label>
                <div class="input-group">
                  <input id="hourout" name="hourout" class="form-control" type="time"  required >
                </div>

              </div>
            </div>


          </div>

        </div>


      </div>






      <hr class="my-4">





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


<main>

<div id="form1">
  <form class="form-horizontal col-12" id="form_user" method="POST">

    <div class="panel panel-primary">

      <div class="panel-body">
        <div class="form-group">
          <div class="col-12 control-label" style="padding: 15px 0px 0px 0px;">
            <h1><?=$render['title'] ?></h1>
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
            <label class="input-group-addon">Cidade Origem <h11>*</h11></label>
            <select class="form-control"  id="origem" required >
              <option>Cidade Origem</option>
            </select>
          </div>

        <div class="col-6">
            <label class="input-group-addon">Cidade Destino <h11>*</h11></label>
            <select class="form-control"  id="destino"required >
              <option>Cidade Destino</option>
            </select>
          </div>

          <div class="col-6">
            <label class="input-group-addon">Aeroporto de Origem <h11>*</h11></label>
            <select class="form-control"  id="areoportoS"required >
              <option>Aeroporto de Origem</option>
            </select>
          </div>

          <div class="col-6">
            <label class="input-group-addon">Aeroporto de Destino <h11>*</h11></label>
            <select class="form-control" id="areoportoD"required >
            <option>Aeroporto De Destino</option>
          
            </select>
          </div>



        </div>

        <div class="form-group row" style="padding: 30px 0px 0px 0px;">

          <div class="col-3">
            <div class="form-group ">

              <label class="input-group-addon">Data Ida<h11> *</h11></label>
              <input type="text" id="datepickerin"  class="form-control" required>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group ">

              <label class="input-group-addon">Horário Ida<h11> *</h11></label>
              <div class="input-group">
                <input id="hourin" name="hourin" class="form-control" type="time"  required >
              </div>

            </div>
          </div>


          <div class="col-3">
            <div class="form-group ">

              <label class="input-group-addon">Data Volta<h11> *</h11></label>
              <input type="text" id="datepickerout"  class="form-control" required>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group ">

              <label class="input-group-addon">Horário Volta<h11> *</h11></label>
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
          <button id="Comprar" name="Comprar" class="btn btn-success" type="Submit">Comprar</button>
        </div>
      </div>
    </div>
  </form>
</div>

</main>

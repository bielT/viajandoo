
<main>

  <div id="form1">
    <form class="form-horizontal col-12" action="./src/controller/pages/flightUpdate.php" method="post"  id="form_Flight">

      <div class="panel panel-primary">




        <div class="panel-body">
          <div class="form-group">
            <div class="col-12 control-label" style="padding: 15px 0px 0px 0px;">
              <h1><?=$render["title"] ?></h1>
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
              <select class="form-control"  name="opAirIn" id="areoportoS"required >
                 <?=$render["opAirIn"] ?>
              </select>
            </div>

            <div class="col-6">
              <label class="input-group-addon">Aeroporto de Destino <h11>*</h11></label>
              <select class="form-control" name="opAirOut" id="areoportoD"required >
                <?=$render["opAirOut"] ?>
              </select>
            </div>



          </div>

          <div class="form-group row" style="padding: 30px 0px 0px 0px;">

            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Data<h11>*</h11></label>
                <input type="text" id="datepickerin" name="datepickerin" value="<?=$render["datepickerin"] ?>"  class="form-control" required>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group ">
                <label class="input-group-addon">Horário <h11>*</h11></label>
                <div class="input-group">
                  <input id="hourin" name="hourin"   value="<?=$render["hourin"]?>" class="form-control" type="time"  required >
                </div>

              </div>
            </div>

            <?=$render['hidde']?>

            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Data<h11>*</h11></label>
                <input type="text" id="datepickerout" name="datepickerout"  value="<?=$render["datepickerout"] ?>"class="form-control" required>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group ">

                <label class="input-group-addon">Horário <h11>*</h11></label>
                <div class="input-group">
                  <input id="hourout" name="hourout" value="<?=$render["hourout"]?>" class="form-control" type="time"  required >
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
            <a href="listFlight.php">
              <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="button">Cancelar</button>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group float-right ">
            <button id="submit" name="submit" class="btn btn-success" value="<?=$render['type']?>" type="Submit">Cadastrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>

</main>

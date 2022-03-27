
<main>

  <div id="form1">
    <!-- -->
    <form enctype="multipart/form-data" class="form-horizontal col-12" id="form_airport" method="POST" action="\viajandoo\src\controller\pages\airports.php" >

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

          <div class="form-group col-12" style="padding: 0px">
            <label class="col-12 control-label" for="Nome">Nome <h11>*</h11></label>
            <div class="col-12">
              <input id="Nome" name="Nome" placeholder="" value="<?=$render['nome'] ?>" class="form-control input-md"
              required="" type="text">
            </div>
          </div>

          <div class="form-group row" style="padding: 30px 0px 0px 0px;">

            <div class="col-4">
              <div class="form-group ">

                <label class="input-group-addon">Cidade <h11>*</h11></label>
                <div class="input-group">
                  <input id="cidade" name="cidade" value="<?=$render['cidade'] ?>" class="form-control" type="text"  required >
                </div>

              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                <label class="input-group-addon">Estado <h11>*</h11></label>
                <div class="input-group">
                  <input id="estado" name="estado"  value="<?=$render['estado'] ?>" class="form-control"
                  type="text" required   >
                </div>

              </div>
            </div>

            <div class="col-4">
              <div class="form-group">
                <label class="input-group-addon">País <h11>*</h11></label>
                <div class="input-group">
                  <input id="pais" name="pais"  value="<?=$render['pais']?>" class="form-control"
                  type="text" required>
                </div>

              </div>
            </div>

          </div>




        </div>
        <div class="form-group row" style="padding: 30px 0px 0px 0px;">

          <div class="col-4">
            <div class="form-group ">

              <label class="input-group-addon">Resumo <h11>*</h11></label>
              <div class="input-group">
                <textarea class="form-control" rows="3"  placeholder="Seu Resumo" name="resumo"><?=$render['resumo']?></textarea>
              </div>

            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label class="input-group-addon">Descrição <h11>*</h11></label>
              <div class="input-group">
                <textarea class="form-control" rows="3"  placeholder="Sua Descrição" name="descricao"><?=$render['descricao'] ?></textarea>

              </div>

            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label class="input-group-addon">Preço <h11>*</h11></label>
              <div class="input-group">
                <input id="preco" name="preco" value="<?=$render['preco']?>" class="form-control"
                type="number" required   >
              </div>

            </div>
          </div>

        </div>




      </div>

      <hr class="my-4">

      <div class="arquivo row" style="padding: 0px;">

        <div class="col-6"  style="padding: 0px;">
          <div class="form-group row" style="padding: 30px 0px 15px 0px;">
            <div class="col-12">
              <label class="input-group-addon">Imagem da Descrição <h11>*</h11></label>
              <div class="input-group">
                <input id="imagemdescricao"  name="imagemdescricao" class="form-control"
                type="file" <?=$render['required']?>><?=$render['imagemdescricao']?>
              </div>
            </div>

          </div>

        </div>
        <div class="col-6"  style="padding: 0px;">
          <div class="form-group row" style="padding: 30px 0px 15px 0px;">
            <div class="col-12">
              <label class="input-group-addon">Imagem de Miniatura <h11>*</h11></label>
              <div class="input-group">
                <input id="imagemminiatura"  name="imagemminiatura" class="form-control"
                type="file"  <?=$render['required']?>><?=$render['imagemminiatura']?>
              </div>
            </div>

          </div>

        </div>


      </div>


      <hr class="my-4">
      <div class="form_field_outer row" style="padding:  30px 0px;">
        <div class="col-6">
          <label class="input-group-addon">Arquivo Carrosel <h11>*</h11></label>
          <div class="input-group">
            <input multiple id="imagemcarrocel_1"  name="imagemcarrocel[]" class="form-control"
            type="file" <?=$render['required']?> >
          </div>
        </div>
        <div class="col-6">
          <?=$render['table'] ?>
        </div>

        <hr class="my-4">
      </div>





      <!-- Button (Double) -->
      <div class="row">
        <div class="col-6">
          <div class="form-group ">
            <a href="listAirport.php ">
              <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="button">Cancelar</button>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group float-right ">
            <button  name="submit" id="submit" class="btn btn-success"
            type="Submit" value="<?=$render['type']?>">Cadastrar</button>
          </div>
        </div>
      </div>

    </form>
  </div>

</main>

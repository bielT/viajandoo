<main>

  <h2 class="mt-3">Excluir</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir ? <strong><?=isset($render['item'])? $render['item']:
                            '<img height="100" src="'.$render['obj']->path.'">' ?></strong></p>
    </div>

    <div class="form-group">
      <a href="<?=$render['a_link']?>">
        <button type="button" class="btn btn-success">Cancelar</button>
      </a>

      <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</main>




<main style="background-color: = #460D7A;">
  <div class="container" >
    <div class="jumbotron">
      <h1>Vôo</h1>
    </div>
    <?=$render["mensagem"]?>

     <section>
      <a href="registerFlight.php">
        <button class="btn btn-success">Novo vôo</button>
      </a>
    </section>

    <section>

      <table class="table bg-light mt-3">
        <thead>
          <tr>

            <th>ID</th>
            <th>ID do Aeroporto de Saída </th>
            <th>ID do Aeroporto de Chegada </th>
            <th>Data e Hora de Saída</th>
            <th>Data e Hora de Chegada</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?=$render["resultados"]?>
        </tbody>
      </table>

    </section>


  </div>
</main>

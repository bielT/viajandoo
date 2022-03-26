


<main style="background-color: = #460D7A;">
  <div class="container" >
    <div class="jumbotron">
      <h1>Aeroporto</h1>
    </div>
     <?=$render["mensagem"]?>

    <section>
      <a href="registerAirport.php">
        <button class="btn btn-success">Nova Page</button>
      </a>
    </section>

    <section>

      <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
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

<section id="home"></section>
<main>
  <!-- slider -->
  <div class="container-fluid">

    <div id="mainSlider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
        <li data-target="#mainSlider" data-slide-to="1"></li>
        <li data-target="#mainSlider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/img-1.jpg" class="d-block w-100" alt="viajar pelo mundo">

          <div class="carousel-caption  d-md-block">
            <h2>Quer viajar pelo mundo?</h2>
            <p>Conheça os lugares mais incríveis.</p>
            <a href="#passagem1" class="main-btn">Veja as Opções</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imagens/img-2.jpg" class="d-block  w-100" alt="Realizar o seu sonhos">
          <div class="carousel-caption d-md-block">
            <h2>Está querendo realizar o seu sonho?</h2>
            <p>Nossa equipe está pronta para lhe atender.</p>
            <a href="#contato" class="main-btn">Entre em contato</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imagens/img-3.jpg" class="d-block  w-100" alt="Buscando novas experiências">
          <div class="carousel-caption d-md-block">
            <h2>Está buscando novas experiências?</h2>
            <p>A Viajandoo conta com um equipe altamente qualificada para te ajudar</p>
            <a href="#contato" class="main-btn">Entre em contato</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container-fluid mt-5">
    <!-- slider -->
    <div id="team-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="main-title">Escolha Lugares Incríveis</h3>
          </div>
        </div>
        <div id="mainSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?=$render["li"]?>
          </ol>
          <div class="carousel-inner">
            <?=$render["cards"]?>
          </div>
          <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span  class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <!-- Passagem-->


  
    <!-- Dados da empresa -->
    <div id="data-area">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-xs-6 circle-box">
            <div id="circleA"></div>
            <p>Pacotes de Viagens</p>
          </div>
          <div class="col-md-3 col-xs-6 circle-box">
            <div id="circleB"></div>
            <p>Colaboradores</p>
          </div>
          <div class="col-md-3 col-xs-6 circle-box">
            <div id="circleC"></div>
            <p>Vôos</p>
          </div>
          <div class="col-md-3 col-xs-6 circle-box">
            <div id="circleD"></div>
            <p>Clientes</p>
          </div>
        </div>
      </div>
    </div>

    <section id="sobre"></section>
    <!-- Sobre a empresa -->
    <div id="about-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="main-title">Sobre a Viajandoo</h3>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="imagens/empresa.jpg" alt="Agência Viajandoo">
          </div>
          <div class="col-md-6">
            <h3 class="about-title">Uma agência que pensa no futuro</h3>
            <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
            <p>Visamos sempre o melhor fazer você</p>
            <p>E nossos colaboradores trabalharão na sua interface/layout para facilitar sua viagem.</p>
            <p>Veja outros diferenciais:</p>
            <ul id="about-list">
              <li> Menor preço</li>
              <li> Mais qualidade</li>
              <li> Priorizamos sempre você</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<section id="contato"></section>

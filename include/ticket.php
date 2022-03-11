
<main>
	<div class="container-fluid">
		<!-- slider -->
		<div class="container col-12" id="page_venda">
			<div class="row">
				<div class="col-md-8">
					<div id="mainSlider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#mainSlider" data-slide-to="0" class="active"></li>
							<li data-target="#mainSlider" data-slide-to="1"></li>
							<li data-target="#mainSlider" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="imagens/davi-costa-VtecdSFlXsI-unsplash.jpg" class="d-block w-100"
								alt="viajar pelo mundo" />
							</div>
							<div class="carousel-item">
								<img src="imagens/krys-amon-8tTh9isJoos-unsplash.jpg" class="d-block w-100"
								alt="Realizar o seu sonhos" />
							</div>
							<div class="carousel-item">
								<iframe width="800" height="500" src="https://www.youtube.com/embed/gYy1RITRN9s"
								title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
								encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
				<div class="col-md-4" id="venda">
					<h3 class="main-title">	<?=$local?></h3>
						<?=$resumo?>
						<h3>R$ <?=$preco?></h3>
						<a href="#" class="main-btn" id="botao_venda"><i class="fa fa-cart-plus"></i>| Compra </a>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<!-- Sobre a empresa -->
			<div id="about-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h3 class="main-title">Sobre a Viagem</h3>
						</div>
						<div class="col-md-6">
							<img class="img-fluid" src="imagens/hotel.jpg" alt="Agência Viajandoo" />
						</div>
						<div class="col-md-6">

							<?=$descricao?>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>


</main>

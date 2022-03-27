
<main>
	<div class="container-fluid">
		<!-- slider -->
		<div class="container col-12 " id="page_venda">
			<div class="row">
				<div class="col-md-8 co-pg">
					<div id="mainSlider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<?=$render["li"]?>
						</ol>
						<div class="carousel-inner">
							<?=$render["item"]?>
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
				<div class="col-md-4 vd-pg" id="venda">
					<div class="row">
						<h3 class="main-title ">	<?=$render["local"]?></h3>
					</div>
					<p><?=$render["resumo"]?></p>
					<div class="row">
						<div class="col-6">
							<select  name="localdepart" id="localdepart"class="form-control">
								<?=$render["localdepart"] ?>
							</select >
						</div>
						<div class="col-6">
							<select name="dataehora" id="dataehora" class="form-control">
									<?=$render["dataehora"] ?>
							</select>
						</div>
					</div>

					<h3>R$ <?=$render["preco"]?></h3>

					<hr class="my-4 align-bottom">
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
						<img class="img-fluid" src="<?=$render['imagemdescricao']?>" alt="Agência Viajandoo" />
					</div>
					<div class="col-md-6">

						<?=$render["descricao"]?>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


</main>

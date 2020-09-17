
<?php include 'header.php'; ?>
<?php //get_header(); ?>
<div w3-include-html="header.html"></div> 

	<section class="box-section box-header-home" style="background-color: #e4e7f2; background-image: url(assets/images/bg-banner-eduavallone.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-6 align-self-center">

					<div class="text-banner">
						 <h1 class="text-clip clip cor-cor1">
							<div class="text-clip-wrapper">
								<span class="is-visible">Humano!</span>
								<span class="is-hidden">Atuante!</span>
								<span class="is-hidden">Coerente!</span>
								<span class="is-hidden">Presente!</span>
							</div>

							<p class="text-subtitulo">It is a long established fact that a reader will be distracted</p>
						 </h1>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-8">
					
					<div class="text-destaque">
						<h3 class="text-destaque-item align-center cor-cor1">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
						</h3>
						<span class="text-destaque-legenda">- Edu Avallone</span>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-6 align-self-center">
					<div class="img-destaque">
						<img src="assets/images/img-sobre.jpg" alt="Edu Avallone">
					</div>
				</div>
				<div class="col-6 align-self-center">
					
					<div class="content-txt">
						<p><strong>Edu Avallone,</strong> é natural de Bauru e filho do advogado  e ex-procurador do DER Jayr Avallone Nogueira e da ex-professora, diretora, supervisora e delegada de ensino Elizabeth Janzon Nogueira. É casado com Fernanda Franciscato, pai de Bianca (14 anos) e Eduardinho (9 anos)</p>
						<p>Formado em Direito pela ITE-Bauru, é presidente da <strong>Avallone Advogados</strong> (empresa com mais de 20 anos de  atuação).</p>
						<p>Em 2018 foi candidato a deputado federal, sendo o segundo mais bem votado para o cargo em Bauru.</p>
						<p><strong>Avallone</strong>  foi escolhido o novo coordenador regional do Partido Republicano Brasileiro (PRB). Ele assume a gerência de 39 municípios, incluindo Bauru, e passa a integrar a Comissão Participativa do PRB, uma frente que será responsável por orientar as executivas municipais do Estado de São Paulo.</p>

						<a href="#" class="btn btn-bg-cor1 cor-branco">conheça sua trajetória</a>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<div class="depoimentos" id="depoimentos">
						<?php for ($i=0; $i < 5; $i++) { ?>						
							
							<div class="item-slide">
								<div class="item-depoimentos">
									<div class="content-item">
										<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.”</p>
										<span class="titulo-item">Cássia Fernandes</span>
										<span class="subtitulo-item">Vereadora</span>
									</div>
									<div class="image-item">
										<img src="assets/images/img-depoimentos.jpg" alt="">
									</div>
								</div>
							</div>

						<?php } ?>
					</div>

				</div>
			</div>
		</div>
	</section>

<?php //get_footer(); ?>
<?php include 'footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

<script src="assets/js/plugins/text-clip/text-clip.js"></script>

<script src="assets/js/plugins/slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#depoimentos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		slide = 0;
		$('#depoimentos .slick-dots li').each(function() {
			imagem = $('#depoimentos .slick-slide[data-slick-index="'+ slide +'"] img').attr('src');
			$('button', this).css('background-image','url('+ imagem +')');
			slide = slide+1;
		});
	});
</script>
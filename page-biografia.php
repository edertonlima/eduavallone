
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="align-center"><?php the_title(); ?></h2>
							<p class="text-subtitulo align-center"><?php echo get_the_excerpt(); ?></p>
						</div>
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-6 align-self-center">
							<div class="img-destaque">
								<img src="<?php the_field('foto-biografia'); ?>" alt="<?php the_title(); echo ', ' . get_bloginfo( 'name' ); ?>">
							</div>
						</div>
						<div class="col-6 align-self-center">
							
							<div class="content-txt">								
								<?php the_field('texto-biografia'); ?>
							</div>

						</div>
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">

						<div class="col-12">
							<div class="content-txt">
								<?php the_content(); ?>
							</div>
						</div>

					</div>
				</div>
			</section>

			<?php if( have_rows('depoimentos',129) ): ?>		    
				<section class="box-section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								
								<div class="depoimentos" id="depoimentos">
									<?php while( have_rows('depoimentos',129) ): the_row(); ?>				
										
										<div class="item-slide">
											<div class="item-depoimentos">
												<div class="content-item">
													<p><?php the_sub_field('texto'); ?></p>
													<span class="titulo-item"><?php the_sub_field('titulo'); ?></span>
													<span class="subtitulo-item"><?php the_sub_field('subtitulo'); ?></span>
												</div>
												<div class="image-item">
													<img src="<?php echo get_sub_field('foto')['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('titulo'); ?>">
												</div>
											</div>
										</div>

									<?php endwhile; ?>
								</div>

							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="align-center">Minha Trajetória</h2>
							<?php if(get_field('descricao-projetos')){ ?>
								<p class="text-subtitulo destaque align-center"><?php the_field('descricao-projetos'); ?></p>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php if( have_rows('trajetoria') ): ?>
				<div class="trajetoria">
					<?php while( have_rows('trajetoria') ): the_row(); ?>

						<section class="box-section">
							<div class="container">
								<div class="row">

									<div class="col-6">
										<img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-block">
									</div>							
									<div class="col-6">
										<span class="data"><?php the_sub_field('data'); ?></span>
										<h3 class=""><?php the_sub_field('titulo'); ?></h3>
										
										<div class="scrollbar-dynamic">
											<p><?php the_sub_field('texto'); ?></p> 
										</div>
									</div>

								</div>
							</div>
						</section>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-2"></div>
						<div class="col-8">
							
							<div class="text-destaque">
								<i class="fas fa-quote-left cor-cinza-claro"></i>
								<h3 class="text-destaque-item align-center cor-cor1">
									<?php the_field('frase'); ?>
								</h3>
								<span class="text-destaque-legenda"><?php the_field('nome-frase'); ?></span>
							</div>

						</div>
					</div>
				</div>
			</section>

		<?php endwhile;
	} ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/slick/slick.js"></script>
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/scrollbar/scrollbar.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.scrollbar-dynamic').scrollbar();
	});
</script>

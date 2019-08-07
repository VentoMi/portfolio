<?php /* Template Name: home */ ?>
<?php get_header(); ?>
<title>
    Portfolio - Vento Michael
</title>
	<main>
		<section class="align-center">
			<h2 class="hidden">
				Avis des clients
			</h2>
			<div class="section0 div_presentation_img">
				<?php 
				$image = get_field('banner');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" 
				srcset="http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/premiere_380.jpg 380w,
				http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/premiere_680.jpg 680w,
				http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/premiere_1024.jpg 1040w,
				http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/premiere.jpg 1280w" 

             	class="img_back background-bottom" alt="<?php echo $image['alt']; ?> " />
				<?php endif; ?>

				<div class="marg div_presentation">
					<p class="margin no-justify">
						<span class="border-blue white"><?php the_field('presentation-text1'); ?>
						</span>

						<span class="orange"><?php the_field('presentation-text1-orange'); ?>
						</span>
					</p>
					<div class="container">
						<p class="typewriter no-justify">
						Mes sites sont <span id="messageIndex">
						</span>

						<span class="cursor">
						</span>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="grid section_presentation no_marg" id="me">
			<div class="marg">
				<h2 class="bold">
					<span class="border-blue margin"><?php the_field('about-title'); ?>
					</span>

					<span class="blue"><?php the_field('about-title-blue'); ?>
					</span>
				</h2>
				<p>
					<?php the_field('about-text'); ?>
				</p>
				<?php 
					$file = get_field('cv-file');
					if( $file ): ?>
						<a href="<?php echo $file['url']; ?>" class="button white right button_visit_hair">Voir le cv de Vento Michael</a>
				<?php endif; ?>
			</div>
			<?php 
				$image = get_field('about-image');
				if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" 
				srcset="
             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/imac_me_550.jpg 1280w" width="650" class="img_about img imac imachair" alt="<?php echo $image['alt']; ?> " />
			<?php endif; ?>
		</section>
		<section id="project" class="section_projets">
			<div class="second_section">
				<div class="flex marg-">
					<div class="marg section2">
						<h2 class="bold">
							<span class="border-blue margin white color"><?php the_field('title-second'); ?>
							</span>

							<span class="orange"><?php the_field('title-second-orange'); ?>
							</span>
						</h2>
						<p class="white text_out"><?php the_field('text-second'); ?>
							
						</p>
					</div>
					<div class="row-img">
						<div>
							<?php 
								$image = get_field('image1-cta');
								if( !empty($image) ): ?>
								<a href="http://hepl01.cblue.be/~user18/portfolio/#acad"><img 
									srcset="
					             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/acad-logo_324.jpg 1040w,
					             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/acad-logo.jpg 1280w"
             						src="<?php echo $image['url']; ?>" width="650" class="img imac imachair img_back" 
             						alt="<?php echo $image['alt']; ?>" /></a>
							<?php endif; ?>
						
							<?php 
								$link = get_field('link1-cta');
								if( $link ): ?>
								<a class="button_second_section button white right button_visit_hair" href="<?php echo $link; ?>">Vers le projet Acadexchange</a>
							<?php endif; ?>
						</div>
						<div>
							<?php 
								$image = get_field('image2-cta');
								if( !empty($image) ): ?>
								<a href="http://hepl01.cblue.be/~user18/portfolio/#hair"><img src="<?php echo $image['url']; ?>" class="img imac imachair" 
									srcset="
					             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/acad-hair_324.jpg 1040w,
					             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/acad-hair.jpg 1280w"

					             	class="img_back" width="650" alt="<?php echo $image['alt']; ?>" /></a>
							<?php endif; ?>
							<?php 
								$link = get_field('link2-cta');
								if( $link ): ?>
								<a class="button_second_section button white right button_visit_hair" href="<?php echo $link; ?>">Vers le projet Hairlessness</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>		
		</section>
		<div id="projets" class="projets">
			<div class="marg">
				<section class="gridtwo marginLess first-section" id="acad">
					<div class="flex__start div_img_hairlessness">
						<?php 
							$image = get_field('image-first-project');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" 
							srcset="
							http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_acad_550.jpg 1280w,
							http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_acad.jpg 1500w"
							width="650" class="img imac imachair" class="img_back" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="flex div_hairlessness">
						<h3 class="title border-blue blue">
							<?php the_field('title-first-project'); ?>
						</h3>
						<p>
							<?php the_field('text-first-project'); ?>
						</p>

						<?php 
							$link = get_field('link-first-project');
							if( $link ): ?>
							<a class="button white right button_visit_hair" href="<?php echo $link; ?>">Plus d&rsquo;informations</a>
						<?php endif; ?>
					</div>
				</section>

				<section class="gridtwo marginLess section_hairlessness" id="hair">
					<div class="flex__start div_img_hairlessness">
						<?php 
							$image = get_field('image-second-project');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" 
							srcset="
			             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_hair_550.jpg 1280w,
			             	http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_hair.jpg 1500w"
			             	width="650"

             				class="img imac imachair" class="img_back" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="flex div_hairlessness">
						<h3 class="title border-blue blue">
							<?php the_field('title-second-project'); ?>
						</h3>
						<p>
							<?php the_field('text-second-project'); ?>
						</p>

						<?php 
							$link = get_field('link-second-project');
							if( $link ): ?>
							<a class="button white right button_visit_hair" href="<?php echo $link; ?>">Plus d&rsquo;informations</a>
						<?php endif; ?>
					</div>
				</section>
			</div>
		</div>
		<section class="section_contact" id="contact"> 
			<div class="frame">
				<div class="plane-container">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="1131.53px" height="379.304px" viewBox="0 0 1131.53 379.304" enable-background="new 0 0 1131.53 379.304"
					xml:space="preserve" class="plane">
					<polygon fill="#D8D8D8" points="72.008,0 274.113,140.173 274.113,301.804 390.796,221.102 601.682,367.302 1131.53,0.223  "/>
					<polygon fill="#C4C4C3" points="1131.53,0.223 274.113,140.173 274.113,301.804 390.796,221.102"/>
					</svg>
				</div>
			</div>
			<div class="align-center div_p_text_contact">
				<div class="margin-topp">
					<h2 class="center__bloc">
						<span class="border-blue margin white min-width no-index"><?php the_field('title-contact'); ?>
						</span>

						<span class="orange">
							<?php the_field('title-contact-orange'); ?>
						</span>
					</h2>
					<p class="white marginLess">
						<?php the_field('text-contact'); ?>
					</p>
					<?php echo do_shortcode( '[contact-form-7 id="13" title="Contact form 1"]' ); ?>
				</div>
			</div>
		</section>
	</main>
	<script src="http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/js/typewriterIndex.js">
	</script>
<?php get_footer(); ?>
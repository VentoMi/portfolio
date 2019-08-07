<?php /* Template Name: acadexchange */ ?>
<?php get_header(); ?>
<title>
	Portfolio - Acadexchange
</title>
<main>
	<section class="align-center">
		<h2 class="hidden">
			Acadexchange pr&eacute;sentation
		</h2>
		<div class="section0 div_presentation_img">
			<?php 
			$image = get_field('banner');
			if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" 
                srcset="http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/net_background_380.jpg 380w,
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/net_background_680.jpg 680w,
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/net_background_1024.jpg 1040w,
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/net_background.jpg 1280w"
                class="background-bottom img_back" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
			<div class="marg div_presentation">
				<div class="container">
					<p class="margin no-justify">
						<span class="border-blue orange">
							<?php the_field('title-page'); ?>
						</span>
					</p>
					<div class="container">
					  <p class="typewriter no-justify">
					    Sites web <span id="messageAcad">
					    </span>

					    <span class="cursor">
					    </span>
					  </p>
					</div>
				</div>
			</div>
		</div>
	</section><div id="projets" class="projets">
    <section class="marg">
        <h2 class="hidden">Mes 2 derniers projets</h2>
        <section class="gridtwo marginLess first-section between-section" id="acad">
            <div class="flex__start div_img_hairlessness">
                <?php 
                    $image = get_field('image-history');
                    if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" 
                    srcset="
                    http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_acad_550.jpg 1280w,
                    http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_acad.jpg 1500w" width="650" class="img imac imachair img_back" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="flex div_hairlessness">
                <h3 class="title border-blue blue">
                   <?php the_field('title-history'); ?>
                </h3>
                <p>
                   <?php the_field('text-history'); ?>
                </p>

                <?php 
                    $link = get_field('link-history');
                    if( $link ): ?>
                    <a class="button white right button_visit_hair" href="<?php echo $link; ?>">Plus d&rsquo;informations</a>
                <?php endif; ?>
            </div>
        </section>
        <section class="gridtwo marginLess section_hairlessness between-section" id="hair">
            <div class="flex__start div_img_hairlessness">
                <?php 
                    $image = get_field('image-objectif');
                    if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" 
                    srcset="
                    http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/objetctif_net_550.jpg 1280w,
                    http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/objetctif_net.jpg 1500w" width="650" class="img imac imachair img_back" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="flex div_hairlessness">
                <h3 class="title border-blue blue">
                    <?php the_field('title-objectif'); ?>
                </h3>
                <p>
                   <?php the_field('text-objectif'); ?>
                </p>

                <?php 
                    $link = get_field('link-objectif');
                    if( $link ): ?>
                    <a class="button white right button_visit_hair" href="<?php echo $link; ?>">Plus d&rsquo;informations</a>
                <?php endif; ?>
            </div>
        </section>
    </section>
</div>
    <div class="margin-top margin-bottom">
        <section class="gridtwo marginLess section_hairlessness sectionback between-section">
            <h2 class="hidden">Aller à l'accueil ou visiter l'autre projet ?</h2>
            <div class="flex__start div_img_hairlessness div_go_back div_baseline">
                <?php 
                $image = get_field('img-add-to-action1');
                if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" 
                srcset="
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/imac_back_550.jpg 1280w,
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/imac_back.jpg 1500w"
                class="baseline img imac imachair" width="650" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>

                <?php 
                $link = get_field('link-add-to-action1');
                if( $link ): ?>
                <a class="button white button_visit_hair button_visit_back" href="<?php echo $link; ?>">Revenir à la page d'accueil</a>
                <?php endif; ?>
            </div>
            <div class="flex div_hairlessness div_go_back div_cta1">
                <?php 
                $image = get_field('img-add-to-action2');
                if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" 
                srcset="
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_hair_550.jpg 1280w,
                http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/img/Imac_hair.jpg 1500w"
                class="img imac imacnet flex_end" width="650" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>

                <?php 
                $link = get_field('link-add-to-action2');
                if( $link ): ?>
                <a class="button white right button_visit_other flex_end" href="<?php echo $link; ?>">Visiter Hairlessness</a>
                <?php endif; ?>
            </div>
        </section>
    </div>
		<script src="http://hepl01.cblue.be/~user18/portfolio/wp-content/themes/mv-portfolio/ressources/js/typewriteAcad.js">
    </script>
</main>
<?php get_footer(); ?>
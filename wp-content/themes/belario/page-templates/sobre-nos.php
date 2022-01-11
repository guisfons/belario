<?php

/**
 * Template Name: Sobre nós
 * Template Post Type: page
 *
 * @package UAU
 * @since 1.0.0
 */

get_header();

?>
	<main class="wrapper sobre">
		<h2><?php the_title(); ?></h2>
		<article>
			<p><?php the_content(); ?></p>
		</article>

		<section class="faleconosco">
			<h3 id="fale-conosco">Fale Conosco</h3>
			<?php echo do_shortcode('[contact-form-7 id="114" title="Fale conosco"]'); ?>
		</section>

	</main>
<?php
get_footer();
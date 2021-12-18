<?php
	get_header();
?>

<main class="landing landing--front-page">
	<section class="landing__bg">
        <div class="landing__bg--slider">
            <?php if( get_field('imagem') ): ?>
                <img src="<?php the_field('imagem'); ?>" />
            <?php endif; ?>
            <?php if( get_field('imagem_2') ): ?>
                <img src="<?php the_field('imagem_2'); ?>" />
            <?php endif; ?>
            <?php if( get_field('imagem_3') ): ?>
                <img src="<?php the_field('imagem_3'); ?>" />
            <?php endif; ?>
        </div>
        <div class="landing__bg--title">
            <h1><span>Churrascaria</span><br>Bela Rio</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/layout/ornament.svg" alt="">
            <span>50 Anos de História</span>
        </div>
    </section>
    <section class="servicos">
        <div class="wrapper">
            <h2 class="servicos__title">Nossos Serviços</h2>
            <div class="servicos__list">
                <?php
                    $args = array(  
                        'post_type' => 'servicos',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        'orderby' => 'date', 
                        'order' => 'ASC', 
                    );
                
                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <article>
                        <h2><?php echo the_title(); ?></h2>
                        <?php echo the_content(); ?>
                        <a href="cardapio/#<?php echo get_field('link_cardapio'); ?>">Cardápio</a>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>
<?php

/**
 * Template Name: Cardapio
 * Template Post Type: page
 *
 * @package UAU
 * @since 1.0.0
 */

get_header();
?>

<main>
    <section class="cardapio__bg">
        
    </section>
    <section class="cardapio__container">
        <?php
        $args = array(
            'post_type' => 'produto',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
        ?>
            <article>
                <h2><?php echo the_title(); ?></h2>
                <?php echo get_field('codigo_do_produto'); ?>
                <?php echo get_field('preco'); ?>
            </article>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
</main>

<?php get_footer(); ?>
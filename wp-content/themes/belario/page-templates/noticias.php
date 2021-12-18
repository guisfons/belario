<?php
    /**
     * Template Name: Notícias
     * Template Post Type: page
     *
     * @package UAU
     * @since 1.0.0
     */

    get_header();
?>

<main class="noticias">
    <section class="noticias__bg">
        <div class="noticias__bg--slider">
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
        <div class="noticias__bg--title">
            <h2>Blog</h2>
            <span>Artigos quentes diretos da brasa</span>
        </div>
    </section>
    <aside class="aside">
        <span class="aside__title">Categorias</span>
        
        <div class="aside__categorias">
            <?php
                $args = array(
                            'taxonomy' => 'noticias_categories',
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );

                $cats = get_categories($args);

                foreach($cats as $cat) {
                ?>
                    <a href="<?php echo get_category_link( $cat->term_id ) ?>">
                        <?php echo $cat->name; ?>
                    </a>
            <?php
                }
            ?>
        </div>

        <?php
            $args = array(  
                'post_type' => 'footer',
                'post_status' => 'publish',
                'posts_per_page' => 1,
            );
        
            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post();
                $endereco = get_field('endereco');
                if( $endereco ){
                    echo '
                        <div class="aside__endereco">
                            <span>Endereço</span>
                            <a href="' . $endereco['link'] . '"><address>' . $endereco['endereco'] . '</address></a>
                            ' . $endereco['descricao'] . '
                        </div>
                    ';
                }

                $horario = get_field('horario');
                if( $horario ){
                    echo '
                        <div class="aside__horario">
                            <span>Horário</span>
                            <p>' . $horario . '</p>
                        </div>
                    ';
                }

                $contato = get_field('contato');
                if( $contato ){
                    echo '
                        <div class="aside__contato">
                            <span>Contato</span>
                            <a href="tel:+55' . $contato['telefone'] . '" class="aside__telefone">' . $contato['telefone'] . '</a>
                            <p>Email: <a href="mailto:' . $contato['email'] . '">' . $contato['email'] . '</a></p>
                            <br>
                            <p>Instagram: <a href="https://instagram.com/' . $contato['instagram'] . '/" target="_blank">@' . $contato['instagram'] . '</a></p>                            
                        </div>
                    ';
                }
            endwhile;
        ?>

        <span class="aside__copyright">copyright ® 2021 “Churrascaria bela rio” - feito por  </span>
    </aside>
    <div class="wrapper noticias__conteudo">
        <?php
            $args = array(  
                'post_type' => 'noticias',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'date', 
                'order' => 'ASC', 
            );

            $loop = new WP_Query( $args ); 
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <article>
                <figure><?php echo get_the_post_thumbnail(); ?></figure>
                <!-- <h2><?php echo the_title(); ?></h2> -->
                <?php echo the_excerpt(); ?>
                <span><?php echo get_the_date('F d, Y'); ?></span>
                <a href="<?php echo get_permalink(); ?>">Leia mais</a>
            </article>
        <?php
            endwhile;
            wp_reset_postdata(); 
        ?>
    </div>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery.mask.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/lib/app.js"></script>

	<footer>
        <div class="wrapper">
            <section class="footer">
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
                                <div class="footer__endereco">
                                    <span>Endereço</span>
                                    <a href="' . $endereco['link'] . '"><address>' . $endereco['endereco'] . '</address></a>
                                    ' . $endereco['descricao'] . '
                                </div>
                            ';
                        }

                        $horario = get_field('horario');
                        if( $horario ){
                            echo '
                                <div class="footer__horario">
                                    <span>Horário</span>
                                    <p>' . $horario . '</p>
                                </div>
                            ';
                        }

                        $contato = get_field('contato');
                        if( $contato ){
                            echo '
                                <div class="footer__contato">
                                    <span>Contato</span>
                                    <a href="tel:+55' . $contato['telefone'] . '" class="footer__telefone">' . $contato['telefone'] . '</a>
                                    <p>Email: <a href="mailto:' . $contato['email'] . '">' . $contato['email'] . '</a></a></p>
                                    <a href="https://instagram.com/' . $contato['instagram'] . '/" target="_blank">@' . $contato['instagram'] . '</a>
                                </div>
                            ';
                        }
                    endwhile;
                ?>
            </section>
            <span class="copyright">copyright ® 2021 “Churrascaria bela rio” - feito por <a href="#">Design Orpheus</a></span>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery.mask.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/app.js"></script>
</body>
</html>
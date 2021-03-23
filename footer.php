
<a href="https://cotador.dwscorretora.com" class="modal-wrapper">
    <div class="modal">
        <h3>Clique aqui e faça agora sua simulação!</h3>
    </div>
</a>

    <footer>
        <div class="wrapper-footer">
            <div class="footer-container">
                <div class="footer-top">
                    <div>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/dws-vector.svg" alt="">
                    </div>
                </div>

                <div class="footer-content">
                    <!--<div class="section contact">
                        <h4>Contato</h4>
                        <div>
                            <p class="text-small"><a href="tel:+55-83-3566-6672">+55 83 3566-6672</a></p>
                            <p class="text-small"><a href="mailto:atendimento@dwscorretora.com">atendimento@dwscorretora.com</a></p>
                        </div>
                    </div>-->
                    <div class="section pages">
                        <h4>Páginas</h4>
                        <div>
                            <p class="text-small"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></p>
                            <p class="text-small"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></p>
                            <p class="text-small text-simulator"><a href="https://cotador.dwscorretora.com">Simulador</a></p>
                        </div>
                        
                    </div>
                    <div class="section news">
                        <?php 
                            $args = array(
                                'numberposts' => 2
                            );
                            foreach( get_posts($args) as $post ){
                                $output = '<a href="' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a>';
                            };
                        ?>
                        <h4>Últimas notícias</h4>
                        <?php
                            global $post;
                            $args = array( 'posts_per_page' => 3);

                            $myposts = get_posts( $args );

                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <div class="notice">
                                    <p class="text-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    <p> <?php the_time(get_option('date_format')); ?> </p>
                                    
                                </div>
                            <?php endforeach; 
                        wp_reset_postdata();?>
                        
                    </div>
                    <div class="section newsletter-field">
                        <h4>Inscreva-se na nossa newsletter!</h4>
                        <div class="newsletter">
                            <div class="email-input">
                                <input title="Seu email" name="email" type="text" placeholder="Seu email aqui" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="separator"></div>

                <div class="footer-bottom">
                    <p>Av Tabajaras, 593 – Centro, João Pessoa – PB, 58013-270, BRA</p>
                    <p>CNPJ: 22.032.824/0001-86 </p>
                    <div><p>Conheça nossa <a href="#">Política de Privacidade</a></p></div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
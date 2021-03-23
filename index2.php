<?php get_header(); ?>

<main>

    <div class="site-wrapper">
        <!-- LOOP -->
        <!-- <#?php get_template_part('/template-parts/post-template','index') ?> -->
        <div class="row primary">
            
            <?php
                $args = array('numberposts' => 1);
                $mypost = get_posts( $args );
                setup_postdata( $mypost ); 
            ?>
            <a href="<?php the_permalink() ?>">
                <div class="primary-banner">
                    <img src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="">
                    <div class="img-text">
                        <div class="texts">
                            <h2><?php the_title() ?></h2>
                            <p><?php esc_html( the_excerpt() ); ?></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="side">
                <div class="popular">
                    <div class="title">
                        <h2>Publicações populares</h2>
                    </div>
                    <?php
                    $args = array("posts_per_page" => 4, "orderby" => "comment_count");
                    $posts_array = get_posts($args);
                    foreach($posts_array as $post)
                    {?>
                    <div class="posts-wrapper">
                        <a href="<?php echo the_permalink();?>">
                            <div class="post-pop">
                                <h3><?php the_title(); ?></h3>
                                <a href="<?php echo get_category_link( get_the_category()[0]->term_id ); ?>" class="post-cat"><?php echo get_the_category()[0]->name; ?></a>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>

            
        </div>
        <div class="row ">
            <?php
                /////////// POST
                $i = 0;
                $args = array('numberposts' => 15);
                
                $myposts = get_posts( $args );
                
                foreach ( $myposts as $post ) : setup_postdata( $post );
                if ($i == 0){}
                else if ($i == 6){?>
                    <div class="simular-wrapper">
                        <div class="simular">
                            <div class="content" onclick="location.href='https://cotador.dwscorretora.com'">
                                <h2>Simule já seu plano</h2>
                                <div class="simulator-btn">
                                    <a href="https://cotador.dwscorretora.com" class="">Simular plano</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                <?php
                }
                else{
                ?>
                    <a href="<?php the_permalink(); ?>" class="card-a">
                        <div class="card">
                            <div class="blog-img">
                                <img src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="">
                            </div>
                            <div class="img-text">
                                <h3 class="article-title"><?php esc_html( the_title() ); ?></h3>
                                <div class="date"><?php esc_html( the_time(get_option('date_format')) ); ?> </div>
                            </div>
                        </div>
                    </a>
                <?php 
                }
                $i++;
                endforeach;
                ?>
                <div class="newsletter-card">
                    <div class="news-content">
                        <div class="title"><h2>Assine nossa newsletter!</h2></div>
                        <div class="email-input">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/check-green.svg" alt="" onclick="location.href='#'">
                            <input title="Seu email" name="email" type="text" placeholder="Seu email aqui" value="">
                        </div>
                    </div>
                </div>
            <?php wp_reset_postdata();?>
        </div>
    </div>
</main>
<!--
<div class="modal">
    <div class="close">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/close.svg" alt="">
    </div>
    <div class="modal-content" onclick="location.href='https://cotador.dwscorretora.com'">
        <div class="content">
            <h2>Faça agora uma cotação exclusiva do seu plano de saúde!</h2>
            <div class="simulator-btn">
                <a href="https://cotador.dwscorretora.com" class="">Simular plano</a>
            </div>
        </div>
    </div>
</div>-->
<?php get_footer(); ?>
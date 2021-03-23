<?php
/* Single post template
*
* @package dws-theme
*/

get_header();
?>
<div class="progress-bar-container">
    <div class="progress-bar-container-progress"></div>
</div>
<div class="single">
    <div class="wrapper-post-head">
               
        <div class="post-head">
            <div class="post-title">
                <div class="time">
                    <a href="<?php echo get_category_link( get_the_category()[0]->term_id ); ?>"><?php echo get_the_category()[0]->name; ?></a>
                    <p> | </p>
                </div>
                <h1><?php the_title(); ?></h1>
                <div class="date">
                    <p><?php esc_html( the_time(get_option('date_format')) ); ?></p>
                </div>
            </div>
    
            <div class="post-thumb">
                <img src="<?php the_post_thumbnail_url(); ?>">
            </div>
        </div>

    </div>
    
    <div class="wrapper-post-body">
        
        <div class="post-body">
            
            <div class="text-content">
                <?php the_content(); ?>
            </div>
            
            <aside class="side">
                <div class="cat-posts">
                    <h2>Artigos relacionados</h2>
                    <?php    
                        /////////// POST
                        global $post;
                        $args = array('category' => get_the_category()[0]->term_id);
                        
                        $myposts = get_posts( $args );
                        
                        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                            <div class="post-cat">
                                <a href="<?php echo the_permalink();?>">
                                    <div class="mini-thumbnail">
                                        <img src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="">
                                    </div>
                                    <div class="texts">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach;?>
                    <?php wp_reset_postdata();?>
                </div>
                <div class="wrapper-sidebar">
                    <p><strong>DWSCORRETORA</strong>.COM</p>
                    <div class="sidebar" onclick="location.href='https://cotador.dwscorretora.com'">
                        <h2>Simule já seu plano</h2>
        
                        <div class="img-container"><i></i></div>
        
                        <div class="simulator-btn">
                            <a href="https://cotador.dwscorretora.com" class="">Simular plano</a>
                        </div>  
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<?php get_footer(); ?>
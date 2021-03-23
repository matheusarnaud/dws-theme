<?php $i == 0;
    while ( have_posts() ) : if ( have_posts() ) : the_post(); ?>

    <a href="<?php the_permalink(); ?>" class="card-a">
        <div class="card">
            <div class="blog-img">
                <img src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="img-text">
                <h3 class="article-title"><?php esc_html( the_title() ); ?></h3>
                <div class="date"><?php esc_html( the_time(get_option('date_format')) ); ?> </div>
            </div>
        </div>
    </a>
    <?php $i++; 
        if ($i == 3){?>
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
    <?php }?>
<?endif; endwhile; ?>
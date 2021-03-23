<?php
$categories = get_categories();
/////////// CATEGORIA

foreach($categories as $category) {
    ?>
<div class="category">
    <div class="title"> 
        <h2><?php echo $category->name; ?></h2>
    </div>
    <div class="cards">
    <?php    
    /////////// POST
    global $post;
    $args = array('category' => $category->term_id);
    
    $myposts = get_posts( $args );
    
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="post" >
                <div class="blog-img">
                    <img src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="">
                </div>
                <div class="texts-field">
                    <h3 class="article-title"><?php esc_html( the_title() ); ?></h3>
                    <div class="article-text text-small"><?php esc_html( the_excerpt() ); ?></div>
                    <div class="date"><?php esc_html( the_time(get_option('date_format')) ); ?> </div>
                </div>
            </div>
        </a>
    <?php endforeach;?>
    </div>
</div>
<?php wp_reset_postdata();}?>

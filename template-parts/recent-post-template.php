<?php
$args = array("posts_per_page" => 5, "orderby" => "comment_count");
$posts_array = get_posts($args);
foreach($posts_array as $post)
{?>
<a href="<?php echo the_permalink();?>">
    <div class="posts-wrapper">
        <div class="post-pop">
            <div class="mini-thumbnail">
                <img src="<?php the_post_thumbnail_url('post-thumbnail') ?>" alt="">
            </div>
            <div class="texts">
                <h3><?php the_title(); ?></h3>
                <a href="<?php echo get_category_link( get_the_category()[0]->term_id ); ?>" class="post-cat"><?php echo get_the_category()[0]->name; ?></a>
            </div>
        </div>
    </div>
</a>
<?php }?>
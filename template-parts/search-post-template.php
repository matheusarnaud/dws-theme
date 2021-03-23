<a href="<?php the_permalink(); ?>" class="card-a">
    <div class="card">
        <div class="image">
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
        </div>
        <div class="text">
            <h3 class="title"><?php esc_html( the_title() ); ?></h3>
            <div class="date"><?php esc_html( the_time(get_option('date_format')) ); ?> </div>
        </div>
    </div>
</a>
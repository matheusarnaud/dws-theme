<?php get_header(); ?>

<div class="site-content">
    <!-- CATEGORYS -->
    <div class="category">
        <h1><?php single_cat_title() ?></h1>
    </div>
    <div class="row">
        <?php get_template_part('/template-parts/post-template','index') ?>
    </div>
</div>

<?php get_footer(); ?>
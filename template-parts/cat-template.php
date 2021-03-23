<?php
$categories = get_categories();
$i = 0;
foreach($categories as $category) {
    $i++; ?>
    <a href="<?php echo get_category_link( $category->term_id ); ?>">
        <div class="cat-wrapper">
            <div class="category">
                <h3 class="categorie-name"><?php echo $category->name; ?></h3>
            </div>
        </div>
    </a>
<?php if ($i == 4){ break; }}; ?>
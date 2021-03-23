
<!-- DEPOIS DE FINALIZAR CATEGORY COLOCAR NO BLOG-->
<?php 
            $args = array(
                'separator' => '',
                'title_li' => ''
            );
            $categories = get_categories();
            #var_dump($categories[0]);
            ?>

            <a href="<?php echo esc_url( home_url( '/category/' . $categories[0]->name ) ); ?>" class="banner">
                <div class="first banner3">
                    <div class="category">
                        <p>
                            <?php echo $categories[0]->name ; ?>
                        </p>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url( home_url( '/category/' . $categories[1]->name ) ); ?>" class="banner">
                <div class="second banner3">
                    <div class="category">
                        <p>
                            <?php echo $categories[1]->name ; ?>
                        </p>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url( home_url( '/category/' . $categories[2]->name ) ); ?>" class="banner">
                <div class="third banner3">
                    <div class="category">
                        <p>
                            <?php echo $categories[2]->name ; ?>
                        </p>
                    </div>
                </div>
            </a>
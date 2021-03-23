<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Our project just needs Font Awesome solid + brand -->
    <script src="https://kit.fontawesome.com/c99e60f0de.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>
<body>
    <header>

        <div class="wrapper-navbar">
            <div class="main-navbar">
                <div class="logo-top" onclick="window.location='<?php echo esc_url( home_url( '/' ) ); ?>'">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/dws-vector-white.svg" alt="logotype" class="normal-logo">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/dws-vector-white-min.svg" alt="logotype" class="mobile-logo">
                </div>

                <nav>
                    <ul class="main-menu">
                        <p></p>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="effect text-small <?php if ($page == 1){echo 'active';}else{} ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="effect text-small <?php if (is_home()){echo 'active';} ?>">Blog</a></li>
                    </ul>
                </nav>

                <div class="search-wrapper">
                    <form method="get" action="<?php print site_url(); ?>" class="search">
                        <label for="button" class="button-search">
                            <i class="fas fa-search"></i>
                        </label> 
                        <input type="button" value="search" id="button">

                        <input placeholder="Pesquisar..." type="text" name="s" value="<?php if (isset( $_GET['s'] )) { print $_GET['s']; }; ?>" id="search-text" autocomplete="off">
                    </form>
                </div>
                
                <div class="simulator-btn" onclick="location.href='https://cotador.dwscorretora.com'">
                    <a class="">Simular plano</a>
                </div>  

                <div class="container-hamburguer">
                    <input type="checkbox" id="check-menu">
                    <label for="check-menu">
                        <div class="menu-hamburguer">
                            <span class="hamburguer"></span>
                        </div>
                    </label>

                    <div class="container-pages">
                        <div class="pages-hamburguer">
                            <div class="pages-head">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/dws-vector-white.svg" alt="logotype">
                                <label for="check-menu">
                                    <div class="menu-hamburguerX">
                                        <span class="hamburguerX"></span>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <form method="get" action="<?php print site_url(); ?>" class="search-mb">
                                    <label for="button-mb" class="button-search-mb">
                                        <i class="fas fa-search"></i>
                                    </label>
                                    <input type="submit" value="search" id="button-mb">

                                    <input type="text" name="s" value="<?php if (isset( $_GET['s'] )) { print $_GET['s']; }; ?>" id="search-text-mb" autocomplete="off">
                                </form>
                            </div>
                            <div class="links-hamburguer">
                                <div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-small">Home</a></div>
                                <div><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="text-small">Blog</a></div>
                            </div>
                            <div class="btn-hamburger" onclick="location.href='https://cotador.dwscorretora.com'">
                                <a class="">Simular plano</a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </header>
    <div class="underheader"></div>
    <div class="top-scroll">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/build/src/img/arrow-up-solid.svg" alt="">
    </div>
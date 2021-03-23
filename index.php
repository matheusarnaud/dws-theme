<?php get_header(); ?>

<main>
    <?php if (is_category()){?>
    <div class="row">
        <div class="top-title">
            <h1>
                <?php if (is_category()) {
                    echo(single_cat_title(''));
                }?>
            </h1>
        </div>
    </div>
    <?php }?>

    <?php $i = 0;
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        $i++;?>


    <?php if($i == 1): ?>
    <!-- 1st row-->
        <div class="row first">
            <div class="main-post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">
                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>

            <div class="side">
                <div class="title">
                    <h2>Publicações populares</h2>
                </div>

                <?php get_template_part('/template-parts/recent-post-template','index') ?>
            </div>
        </div>
    <!-- END 1st row-->
    <?php endif; ?>
    
    <?php if ($i == 2):?>
        <!-- 2nd row-->
        <div class="row special">
            <div class="post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">

                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>
    <?php endif; ?>
    
    <?php if ($i == 3):?>
            <div class="post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">

                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>

            <div class="categories-side">
                <div class="title">
                    <h2>Categorias</h2>
                </div>

                <?php get_template_part('/template-parts/cat-template','index') ?>
            </div>
        </div>
    <!-- END 2 row-->
    <?php endif; ?>
    
    <?php if ($i == 4):?>
        <!-- 3rd row-->
        <div class="row">
            <a href="https://cotador.dwscorretora.com" class="ad">
                <div class="ad-text">
                    <p>Faça agora uma simulação gratuita para seu plano de saúde!</p>
                </div>
                <div class="simulator-btn">
                    <p class="">Simular plano</p>
                </div>  
            </a>

            <div class="big-post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">
                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>

        </div>
    <!-- END 3 row-->
    <?php endif; ?>
    
    <?php if ($i == 5):?>
        <!-- 4nd row-->
        <div class="row special">
            <div class="post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">

                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>
    <?php endif; ?>
    
    <?php if ($i == 6):?>
            <div class="post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">

                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>

            <div class="newsletter-card">
                <div class="news-content">
                    <div class="title"><h2>Assine nossa newsletter!</h2></div>
                    <div class="text"><p>Assine para receber com exclusividade nossos últimos posts!</p></div>
                    <div class="email-input">
                        <input title="Seu email" name="email" type="text" placeholder="Seu email aqui" value="">
                    </div>
                </div>
            </div>
        </div>
    <!-- END 4 row-->
    <?php endif; ?>


    <?php if ($i == 7 ):?>
        <!-- 5th row-->
    <div class="row fourth">
        <div class="big-post">
            <div class="image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </a>
            </div>
            <div class="texts">
                <a class="title" href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
                <div class="category">
                    <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($i == 8 ):?>
            <div class="post">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                </div>
                <div class="texts">

                    <a class="title" href="<?php the_permalink(); ?>">
                        <h1><?php the_title(); ?></h1>
                    </a>
                    <div class="category">
                        <a href="<?php echo get_category_link(get_the_category()[0]);?>"><?php echo get_the_category()[0]->name;?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- END 5 row-->
    <?php endwhile; endif; ?>

    <!-- 6th row-->
    <div class="row">
        <div class="title">
            <h2>Navegue no nosso blog</h2>
        </div>
        <div class="categories-icons">
            <div class="category-card">
                <a href="<?php echo get_bloginfo("url"); ?>/category/financas/">
                    <div class="icon">
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                </a>
                <div class="cat-title">
                    <a href="<?php echo get_bloginfo("url"); ?>/category/financas/">Finanças</a>
                </div>
            </div>

            <div class="category-card">
                <a href="<?php echo get_bloginfo("url"); ?>/category/noticias/">
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                </a>
                <div class="cat-title">
                    <a href="<?php echo get_bloginfo("url"); ?>/category/noticias/">Notícias</a>
                </div>
            </div>

            <div class="category-card">
                <a href="<?php echo get_bloginfo("url"); ?>/category/saude-e-bem-estar/">
                    <div class="icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                </a>
                <div class="cat-title">
                    <a href="<?php echo get_bloginfo("url"); ?>/category/saude-e-bem-estar/">Saúde e bem estar</a>
                </div>
            </div>

            <div class="category-card">
                <a href="<?php echo get_bloginfo("url"); ?>/category/seguros-de-saude/">
                    <div class="icon">
                        <i class="fas fa-plus-square"></i>
                    </div>
                </a>
                <div class="cat-title">
                    <a href="<?php echo get_bloginfo("url"); ?>/category/seguros-de-saude/">Seguros de saúde</a>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
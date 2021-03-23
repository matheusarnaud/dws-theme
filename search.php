<?php
/**
 * The template for displaying search results pages
 * 
 */

get_header(); ?>

<div class="row">
	<div class="container">
		<div class="header">
			<?php if ( have_posts() ) : ?>
				<h1 class="page-title">
					Resultados da pesquisa:
				</h1>
				<p>
					" <?php print $_GET['s'];?> "
				</p>
			<?php
			else:
				?>
				<h1 class="page-title">
					Resultados da pesquisa:
				</h1>
				<p>
					NENHUM ITEM CORRESPONDE À SUA PESQUISA
				</p>
			<?php 
			endif; ?>
		</div>
	</div>
</div>

<main id="main" class="row">
	<div id="primary" class="container">

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

		get_template_part('/template-parts/search-post-template','search');
		endwhile;
	endif;
	?>

	</div>
</main>

<?php
get_footer();
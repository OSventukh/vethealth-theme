<?php get_header(); ?>

<div class="page-divider"></div>



	<main id="main">


	<?php if ( is_front_page() ) : ?>
		<div class="wrap">
			<h2 class="title"><?php bloginfo( 'description' ); ?></div>
		</div>
	<?php elseif (is_category()) : ?>
		
		<div class="wrap">
			<h2 class="title"><?php single_cat_title('<h2 class="title">', '</h2>'); ?>
		</div>

	<?php else : ?>
		<div class="wrap">
			<h2 class="title"><?php the_title( '<h2 class="title">', '</h2>' ); ?>
		</div>
	<?php endif; ?>

	<div class="wrap posts-list">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content' );
				}
				get_template_part( 'template-parts/pagination' );

			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			?>
		</div><!-- .wrap -->
	</main>

<?php get_footer(); ?>

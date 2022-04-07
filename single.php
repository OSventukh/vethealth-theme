<?php get_header(); ?>


	<div class="page-divider"></div>




	<main id="main">
		<div class="wrap">
			<?php the_title( '<h2 class="title">', '</h2>' ); ?>
			<?php
			
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content' );

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
			}
			?>
		</div><!-- .wrap -->
	</main>


<?php get_footer(); ?>

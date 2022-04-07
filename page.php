<?php get_header(); ?>

	<div class="page-divider"></div>

	<main id="main">
		<div class="wrap">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display')) { bcn_display(); }?>
            </div>

			<?php if ( is_front_page() ) : ?>
	
				<div class="wrap">
					<h2 class="title"><?php bloginfo( 'description' ); ?></div>
				</div>

			<?php else : ?>
				<div class="wrap">
					<?php the_title( '<h2 class="title">', '</h2>' ); ?>
				</div>
			<?php endif; ?>
            
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
			?>
		</div><!-- .wrap -->
	</main>

<?php get_footer(); ?>

<?php get_header(); ?>


<div class="page-divider"></div>


<main id="main">

<div class="wrap">
		<h2 class="title">
			<?php esc_html_e( 'Пошук:', 'vethealththeme' ); ?> <span>&laquo;<?php echo get_search_query();?>&raquo;</span>
		</h2>
	</div>
	
	<div class="wrap posts-list">
		<?php
			$searchfor = get_search_query(); // Get the search query for display in a headline
		?>

		<?php $query_string=esc_attr($query_string); // Escaping search queries to eliminate potential MySQL-injections 
$blogs = get_blog_list( 0,'all' ); 
foreach ( $blogs as $blog ): switch_to_blog($blog['blog_id']); 
    $search = new WP_Query($query_string); 
    if ($search->found_posts>0) {
        foreach ( $search->posts as $post ) {
            setup_postdata($post);
            $author_data = get_userdata(get_the_author_meta('ID'));
            ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- 
			<span>
				<?php the_time('Y/m/d') ?>
			</span>
			By
			<?php the_author_posts_link();?> -->


			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>


			<div id="entry-content">
				<?php the_excerpt(); ?>
			</div>


		</div>

		<?php
        }
    }
endforeach;
restore_current_blog(); // Reset settings to the current blog
?>
	</div><!-- .wrap -->
</main>

<?php get_footer(); ?>
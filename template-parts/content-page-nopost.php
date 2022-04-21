
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
				
				<footer>
					<div class="wrap">
						<?php wp_link_pages(); ?>
						<?php edit_post_link(); ?>
					</div>

				</footer>
			</article>

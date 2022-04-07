
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
				<header>
					<?php the_title( '<h3 class="exerpt-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
				</header>

				<div class="entry-content">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					the_excerpt();
					?>
				</div>
			</article>

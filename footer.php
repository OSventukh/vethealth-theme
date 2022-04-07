
	<footer id="footer">
		<div class="wrap">
			<hr />

			<div class="flex-grid">
				<div class="col-lg">
					<p>
						<?php esc_html_e( '&copy;', 'vethealththeme' ); ?> <?php bloginfo( 'name' ); ?><br>
						<a href="<?php echo esc_url( __( '/contact/', 'vethealththeme' ) ); ?>">
							<?php esc_html_e( 'Контакти', 'vethealththeme' ); ?>
						</a> |
						<a href="<?php echo esc_url( __( '/privacy-policy/', 'vethealththeme' ) ); ?>">
							<?php esc_html_e( 'Політика конфіденційності', 'vethealththeme' ); ?>
						</a> |
						<a href="<?php echo esc_url( __( 'https://www.patreon.com/vethealth', 'vethealththeme' ) ); ?>">
							<?php esc_html_e( 'Patreon', 'vethealththeme' ); ?>
						</a>
					</p>
				</div>

				<div class="col-lg stack-top">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>

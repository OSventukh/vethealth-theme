<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	
 <script data-ad-client="ca-pub-7516416801502205" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>   
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-21866777-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-21866777-4');
</script>
 <!-- Global site tag (gtag.js) - Google Analytics -->  
    
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#fff" />
<link rel="profile" href="https://gmpg.org/xfn/11" />

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
	<a class="skip-link button" href="#main"><?php esc_html_e( 'Skip to Content', 'frugix' ); ?></a>

	<header id="header">
		<div class="wrap">
			<h1 class="site-title"><a href="/"  rel="home">VETHEALTH</a></h1>
		
			<div id="nav">
				<input class="side-menu" type="checkbox" id="mobile-menu-button"/>
				<label class="mobile-menu-button" for="mobile-menu-button"><div class="line-1"></div><div class="line-2"></div><div class="line-3"></div></label>
				<nav id="main-menu">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'menu'           => __( 'Main Menu', 'vethealththeme' ),
						'depth'          => 2,
					) );
					?>
				</nav>
			</div><!-- #nav -->
		</div><!-- .wrap -->
	</header>

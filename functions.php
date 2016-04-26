<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
    wp_enqueue_style( 'merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:400,700' );
    wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' );
}

function robertdevore_credits() { ?>
	&copy; 2015-16 <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
	Powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>">WordPress</a> and <a href="<?php echo esc_url( __( 'http://deviodigital.com/', 'twentysixteen' ) ); ?>"><?php printf( __( '%s', 'twentysixteen' ), 'Devio Digital' ); ?></a>
<?php }
add_action('twentysixteen_credits','robertdevore_credits');

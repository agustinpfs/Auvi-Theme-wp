<?php 
add_theme_support('post-thumbnails' );

add_image_size('my-size', 1250, 680, true);


 function register_my_menus() {
 	register_nav_menus(
 		array(
 			'menu-header' => __('menu header'),
 			'menu-footer' => __('menu footer')
 			)
 	 );

}
add_action('init', 'register_my_menus' );

function myplugin_register_description(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-description-id',
			'description'   => 'description test',
			'name'   => 'descripción slide1',
			// 'class'         => '',
			'before_widget' => '<h3 id="%1$s" class="widget %2$s">',
			'after_widget'  => '</h3>'
			// 'before_title'  => '<h2 class="widgettitle">',
			// 'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
}

add_action('widgets_init', 'myplugin_register_description' );




function myplugin_register_description2(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-description-id2',
			'description'   => 'description2 test',
			'name'   => 'descripción slide2',
			// 'class'         => '',
			'before_widget' => '<h3 id="%1$s" class="widget %2$s">',
			'after_widget'  => '</h3>'
			// 'before_title'  => '<h2 class="widgettitle">',
			// 'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
}

add_action('widgets_init', 'myplugin_register_description2' );


function myplugin_register_description3(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-description-id3',
			'description'   => 'description3 test',
			'name'   => 'descripción slide3',
			// 'class'         => '',
			'before_widget' => '<h3 id="%1$s" class="widget %2$s">',
			'after_widget'  => '</h3>'
			// 'before_title'  => '<h2 class="widgettitle">',
			// 'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
}

add_action('widgets_init', 'myplugin_register_description3' );





// add_filter( 'widget_text', 'shortcode_unautop');


function myplugin_register_sidebar(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-sidebar-id',
			'description'   => 'Barra Lateral Derecha',
			'name'   => 'Barra Lateral'
			// 'class'         => '',
			// 'before_widget' => '<li id="%1" class="widget %2">',
			// 'after_widget'  => '</li>',
			// 'before_title'  => '<h2 class="widgettitle">',
			// 'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
}

add_action('widgets_init', 'myplugin_register_sidebar' );




// function myplugin_register_sidebar2(){
// 	   /**
// 		* Creates a sidebar
// 		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
// 		*/
// 		$args = array(
// 			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
// 			'id'            => 'unique-sidebar-id2',
// 			'description'   => 'sidebar test',
// 			'name'   => 'sidebar de un lugar'
// 			// 'class'         => '',
// 			// 'before_widget' => '<li id="%1" class="widget %2">',
// 			// 'after_widget'  => '</li>',
// 			// 'before_title'  => '<h2 class="widgettitle">',
// 			// 'after_title'   => '</h2>'
// 		);
	
// 		register_sidebar( $args );
	
// }

// add_action('widgets_init', 'myplugin_register_sidebar2' );


// add_filter( 'embed_defaults', 'change_embed_size' );
// function change_embed_size() {
//     return array('width' => 1250, 'height' => 680);
// }
// function my_scripts_method() {
//     wp_enqueue_script(
//         'custom-script',
//         get_template_directory_uri() . 'js/sidebar.js',
//         array( 'jquery' )
//     );
// }

// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );




/**
 * Proper way to enqueue scripts and styles
 */
// function theme_name_scripts() {
// 	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array(), '1.0.0', true );
// }

// add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


// function theme_name_scripts() {
// 	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/sidebar.js', array(), '1.0.0', true );
// }

// add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


function wpb_adding_scripts() {

wp_register_script('my_script', get_template_directory_uri() . '/js/slider.js', array('jquery'),'2.1.4', true);

wp_enqueue_script('my_amazing_script');

}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );



// function shortcode_gracias() {
// 	return '<p>¡Gracias por leer mi blog!, si te gustó suscríbete al feed RSS</p>';
// }
// add_shortcode('gracias', 'shortcode_gracias');

// add_filter( 'widget_text', 'shortcode_unautop');
// add_filter( 'widget_text', 'do_shortcode');





function crunchify_social_sharing_buttons($content) {
	if(is_single() || is_home() || is_front_page()){
	
		// Get current page URL 
		$crunchifyURL = get_permalink();
 
		// Get current page title
		$crunchifyTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=santiagoclavijo';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
		$googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
		
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
 
		// Add sharing button at the end of page/page content
		$content .= '<div class="crunchify-social">';
		$content .= '<h5>Comparte este artículo.</h5> <a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a>';
		$content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
		$content .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank">Google+</a>';
		$content .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
		$content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" target="_blank">Pin It</a>';
		$content .= '</div>';
		
		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
};
add_filter( 'the_content', 'crunchify_social_sharing_buttons');

// link to home
function menu_args($args) {
	 $args['show_home'] = true; 
	 return $args; } 

add_filter('wp_page_menu_args', 'menu_args');
// logo login
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/img/santiagoclavijo.png) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');


//logo admin
function no_wp_logo_admin_bar_remove() {        
    ?>
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                content: url(<?php echo get_stylesheet_directory_uri(); ?>/img/sclavijo.png)   !important;
                top: 2px;
            }

            #wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
                pointer-events: none;
                cursor: default;
            }   
        </style>
    <?php
}
add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);

function remove_footer_admin () {
  echo "Administración Santiago Clavijo Website";
} 

add_filter('admin_footer_text', 'remove_footer_admin');


// hidden category

function exclude_widget_categories($args) {
 
    // ID de la categoría que queremos excluir.
    // Si son varias, separar con comas: '25,32,65'
    $excluded = '5,6'; 
 
    $args['exclude'] = $excluded;
    return $args;
 
}
add_filter( 'widget_categories_args', 'exclude_widget_categories' );






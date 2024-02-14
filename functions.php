<?php
/**
 * Theme Supports
 */
// Theme Title
add_theme_support('title-tag');
// Post Thumbnail
add_theme_support('post-thumbnails');

/**
 * Register Stylesheet
 */

function tmCssJsEnque(){
    // Enqueue Theme style
    wp_enqueue_style('tm-style',get_stylesheet_uri()); // style.css file is
    // Register style
    wp_register_style('tm-bootstrap-style','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',array(),'5.0.2','all');


   // Enqueue style and script
    wp_enqueue_style('tm-bootstrap-style');
    wp_enqueue_script('tm-bootstrap-script','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',array(),'5.0.2',true);
    wp_enqueue_script('tm-cusom-main',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
}

add_action('wp_enqueue_scripts','tmCssJsEnque');


////////////////// CUSTOM Post TYPE

/*
 * Custom Post Type
 */


function tmCustomPostType(){
	$roomSuitsArgs = array(
		'public'=> true,
		'labels'=> array('name'=>'Rooms and Suits', 'singular_name'=>'rooms and suits'),
		'menu_icon'=> 'dashicons-building',
		'supports'=> array( 'title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'has_archive'=>true,
		'show_in_rest'=>true,
		'taxonomies'=>array('category'),
		'rewrite'=> array('slug','room')
	);
	register_post_type('rooms',$roomSuitsArgs); //key name can be any key it will be the name of the post and use in permalink 'room-info'
	
	$homeSliderArgs =  array(
		'public'=> true,
		'label'=> 'Image Slider',
		'menu_icon'=> 'dashicons-images-alt2',
		'supports'=> array('title','editor','thumbnail','excerpt'),
		'taxonomies'=>array('category'),
		'rewrite'=> array('slug','slider')
	);

	register_post_type('sliders',$homeSliderArgs); //key name can be any key it will be the name of the post and use in permalink 'room-info'

}

add_action('init','tmCustomPostType');

/*
function custom_post_type_custom_fields() {
	add_meta_box(
		'room_info',
		'Room Info',
		'render_custom_fields', // Its a method ref . $post will be pass here $post->ID can be use when make this method
		'room-info', // Replace with your custom post type slug
		'normal',
		'high'
	);
}

function render_custom_fields($post) {
	$price_usd = get_post_meta($post->ID, '_price_usd', true);
	$price_bdt = get_post_meta($post->ID, '_price_bdt', true);
	?>
	<div class="row">
		<ul>
			<li>
				<div class="col">
					<label for="price_usd">Price in USD:</label>
					<input type="text" id="price_usd" name="price_usd" value="<?php echo esc_attr($price_usd); ?>"><br>
				</div>
			</li>
			<li>
				<div class="col">
					<label for="price_bdt">Price BDT:</label>
					<input type="text" id="price_bdt" name="price_bdt" value="<?php echo esc_attr($price_bdt); ?>">
				</div>

			</li>
		</ul>
	</div>
	<?php
}

function save_custom_fields($post_id) {
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	if (isset($_POST['price_usd'])) {
		update_post_meta($post_id, '_price_usd', sanitize_text_field($_POST['price_usd']));
	}

	if (isset($_POST['price_bdt'])) {
		update_post_meta($post_id, '_price_bdt', sanitize_text_field($_POST['price_bdt']));
	}
}

add_action('add_meta_boxes', 'custom_post_type_custom_fields');
add_action('save_post', 'save_custom_fields');

*/
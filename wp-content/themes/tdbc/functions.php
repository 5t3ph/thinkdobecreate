<?php
/**
 * tdbc functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package tdbc
 */
 
if ( ! function_exists( 'tdbc_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tdbc_setup() {
		
		// Custom template functions
		require_once('inc/template-functions.php');
	
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif; // tdbc_setup
add_action( 'after_setup_theme', 'tdbc_setup' );

/**
 * Enqueue scripts and styles.
 */
function tdbc_scripts() {
	
	wp_enqueue_style( 'tdbc-style', get_template_directory_uri() . '/css/styles.css', null );
	
}
add_action( 'wp_enqueue_scripts', 'tdbc_scripts' );

/* --------------------------------
 * BOOTSTRAP STYLING OF GRAVITY FORMS
   --------------------------------*/
add_filter("gform_field_content", "bootstrap4_styles_for_gravityforms_fields", 0, 5);
function bootstrap4_styles_for_gravityforms_fields($content, $field, $value, $lead_id, $form_id){

	if($field["type"] != 'hidden' && $field["type"] != 'list' && $field["type"] != 'checkbox' && $field["type"] != 'fileupload' && $field["type"] != 'date' && $field["type"] != 'html' && $field["type"] != 'address') {
		$content = str_replace('class=\'medium', 'class=\'form-control medium', $content);
	}

	if($field["type"] == 'name' || $field["type"] == 'address' || $field["type"] == 'list' || $field["type"] == 'time' || $field["type"] == 'date') {
			$content = str_replace('<input ', '<input class=\'form-control\' ', $content);
		
			if($field["type"] == 'address' || $field["type"] == 'time') {
				$content = str_replace('<select ', '<select style="height: 2.25rem;" class=\'form-control\' ', $content);
			}
	}
	
	if($field["type"] == 'number') {
			$content = str_replace('<input ', '<input class=\'form-control small\' ', $content);
	}

	if($field["type"] == 'textarea') {
			$content = str_replace('class=\'textarea', 'class=\'form-control textarea', $content);
	}
	
	if($field["type"] == 'checkbox' || $field["type"] == 'radio') {
		$content = str_replace('li class=\'', 'li style="padding-left: 1.25rem !important;" class=\'form-check ', $content);
		$content = str_replace('<input ', '<input style="position: absolute; margin-top: .3rem; margin-left: -1.2rem;" class=\'form-check-input\' ', $content);
		$content = str_replace('<label ', '<label class=\'form-check-label\' ', $content);
	}

	return $content;
} // End function

function form_submit_btn($button, $form){
	$dom = new DOMDocument();
    $dom->loadHTML( $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $new_button = $dom->createElement( 'button' );
    $new_button->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    $input->removeAttribute( 'value' );
	$input->removeAttribute( 'class' );
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
	$new_button->setAttribute( 'class', 'btn btn-primary');
    $input->parentNode->replaceChild( $new_button, $input );

    return $dom->saveHtml( $new_button );
}
add_filter('gform_submit_button','form_submit_btn',10,2);
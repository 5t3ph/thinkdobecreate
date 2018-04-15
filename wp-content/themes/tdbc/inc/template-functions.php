<?php
// Replaces the excerpt "more" text by a link
function tdbc_excerpt_more($more) {
    global $post;
	return '...';
}
add_filter('excerpt_more', 'tdbc_excerpt_more');

add_filter('next_posts_link_attributes', 'tdbc_post_link_attributes');
add_filter('previous_posts_link_attributes', 'tdbc_post_link_attributes');
function tdbc_post_link_attributes($output) {
    return 'class="page-link"';
}

// Adjust titles
function tdbc_wp_titles( $title ) {
	global $wp_query;
	$page = $wp_query->query_vars['paged'];
	if(get_post_type() == 'post' && is_paged()) {
		$title = 'Blog Page '.$page.' | ThinkDoBeCreate';
	}
 
    return $title;
}
add_filter('wpseo_title','tdbc_wp_titles',10);

function tdbc_list_categories() {
	$categories = get_categories( array(
	    'orderby' => 'name',
	    'order'  => 'ASC',
		'hide_empty' => true
	) );
	$category_list = array();
	foreach ( $categories as $category ) {
		$category_list[] = '<a href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a> ';
	}
	echo implode( ', ', $category_list );
}
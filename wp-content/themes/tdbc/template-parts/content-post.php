<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdbc
 */

$classes = is_home() || is_archive() ? 'border-vibrant border-top pt-3 mt-5' : '';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
		
		<?php 
		if(is_singular()) {
			echo '<div class="entry-content">';
			the_content();
			echo '</div><!-- .entry-content -->';
		} else { ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			  <p class="entry-meta decorated small my-2"> Posted on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?></p>
			  <!-- .entry-meta decorated --> 
			</header>
			<!-- .entry-header -->

			<div class="entry-summary">
			  <?php the_excerpt(); ?>
			  <a href="<?php the_permalink(); ?>" class="btn btn-tertiary btn-lg py-0">Read More</a>
			</div>
			<!-- .entry-summary --> 
		<?php } ?>
    
</article><!-- #post-## -->
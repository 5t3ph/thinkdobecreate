<?php
/**
 * The front page template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdbc
 */

get_header(); ?>

<?php get_template_part('template-parts/partial', 'contact'); ?>

<section class="container py-5 my-0 my-md-5">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card border-vibrant">
				<div class="card-body text-center p-5">
					<?php
					global $post;
					$args = array( 
						'numberposts' => 1, 
						'post_type' => 'case_study',
						'meta_key' => 'feature',
						'meta_value' => 1
					);
					$feature = get_posts( $args );
					foreach( $feature as $post ) :
						setup_postdata($post); ?>
					<h2 class="d-flex flex-column justify-content-center"><small class="decorated">Featured Work</small> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="px-lg-4 mt-3"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-tertiary btn-lg py-0">Read More</a>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
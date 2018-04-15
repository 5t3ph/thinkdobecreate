<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tdbc
 */

get_header(); ?>
<main role="main" class="container">
	<div class="row">
		<div class="col-md-10 col-lg-8 py-5">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php endwhile; else : ?>

				<h2 class="text-primary">Gadzooks! Nothing doin around these here parts.</h2>
				<p class="h2">Try something from the nav above or a post below!</p>

			<?php endif; ?>

		</div>
	</div>
</main>
<?php get_footer(); ?>

<section class="bg-light border-top py-5">
	<div class="container">
		<div class="row">
			<?php
			$rp_i = 1;
			global $post;
			$recent_posts = get_posts( 'numberposts=3' );
			foreach( $recent_posts as $post ) :
				setup_postdata($post);
			?>
			<div class="col-md-4 d-flex <?php echo $rp_i > 1 ? 'mt-4 mt-md-0' : ''; ?>">
				<div class="d-flex flex-column px-4">
					<h3 class="d-flex flex-column"><a href="<?php the_permalink(); ?>" class="order-2"><?php the_title(); ?></a> <small class="decorated order-1 mb-3"><span class="sr-only">Category: </span><?php the_category(', '); ?></small></h3>
					<p class="mb-0 mb-md-2">
					<?php echo strip_tags(get_the_excerpt()); ?>
					</p>
					<a href="<?php the_permalink(); ?>" class="btn btn-link px-0 mt-auto align-self-start">Read More</a>
				</div>
			</div>
			<?php $rp_i++; endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
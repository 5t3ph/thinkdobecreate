<div class="hero<?php echo !is_front_page() ? ' hero-single' : ''; ?> bg-svg d-flex align-items-sm-center py-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 pb-4">
				<?php
				if(is_front_page()) { ?>
					<h1 class="d-flex flex-column"><span class="order-2">stephanie eckles</span> <small class="order-1">@5t3ph</small></h1>
					<p>user experience craftswoman<br>wordpress code poet</p>
				<?php } else if(is_home()) { ?>
					<h1>Blog</h1>
        			<p>Categories:<br>
          			<?php tdbc_list_categories(); ?>
          			</p>
          		<?php } else if(is_archive()) { 
					the_archive_title( '<h1>', '</h1>' );
				} else { 
					if(is_single()) { ?>
						<h1 class="d-flex flex-column"><span class="order-2"><?php the_title(); ?></span> <small class="order-1 decorated">Posted on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?></small></h1>
					<?php } else { ?>
						<h1><?php the_title(); ?></h1>
					<?php } 
					
					  if(get_field('teaser'))
						  echo '<p>'.get_field('teaser').'</p>';
					  ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<svg id="hero-svg" class="home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 569.2 432.1"><path d="M412.74 418.95c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 406.95v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7V431c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.05-6.9-6.05z"/><path d="M412.74 30.85c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 18.85v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M412.74 86.35c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 74.25v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M412.74 141.75c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 129.75v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M412.74 197.25c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 185.15v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M412.74 252.65c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V262c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4.05-6.7 6.05z"/><path d="M432.14 240.55v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M412.74 308c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V296c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 296v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M412.74 363.55c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.44 4-6.7 6z"/><path d="M432.14 351.45V354c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-3.95-6.9-5.95z"/><path d="M371.47 57.55c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 45.55v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M371.47 113c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V101c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 100.95v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M371.47 168.45c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 156.45v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M371.47 223.95c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 211.85v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M371.47 279.35c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 267.25v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M371.47 334.75c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 322.75v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M371.47 390.25c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M390.87 378.15v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M330.2 79.45c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 67.45v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M330.2 135c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V123c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 122.85v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M330.2 190.35c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 178.35V181c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.05-6.9-6.05z"/><path d="M330.2 245.85c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 233.75v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M330.2 301.25c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 289.15v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M330.2 356.65c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 344.65v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M330.2 412.15c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M349.6 400.05v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M288.93 41.9c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 29.9v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7V54c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M288.93 97.4c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 85.3v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M288.93 152.8c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 140.8v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M288.93 208.3c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 196.2v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M288.93 263.7c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 251.6v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M288.93 319.1c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 307.1v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M288.93 374.6c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V384c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M308.33 362.5v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M247.66 62.88c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 4-6.7 6z"/><path d="M267.06 50.88v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7V75c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.12-6.9-6.12z"/><path d="M247.66 118.38c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 4-6.7 6z"/><path d="M267.06 106.28v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M247.66 173.78c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 4-6.7 6z"/><path d="M267.06 161.78v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M247.66 229.28c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 4-6.7 6z"/><path d="M267.06 217.18v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M247.66 284.68c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 4-6.7 6z"/><path d="M267.06 272.58v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M247.66 340.08c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 4-6.7 6z"/><path d="M267.06 328.08v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M247.66 395.58c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V405c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.36 3.98-6.7 5.98z"/><path d="M267.06 383.48v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M206.38 143.85c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M225.78 131.85v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M206.38 199.35c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M225.78 187.25v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M206.38 254.75c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M225.78 242.75v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M206.38 310.25c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M225.78 298.15v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M206.38 365.65c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V375c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4.05-6.7 6.05z"/><path d="M225.78 353.55v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M206.38 421c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V409c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M225.78 409v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M165.11 107.1c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M184.51 95.1v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M165.11 162.6c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V172c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M184.51 150.5v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M165.11 218c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V206c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M184.51 206v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M165.11 273.5c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M184.51 261.4v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M165.11 328.9c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M184.51 316.8v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M165.11 384.3c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M184.51 372.3v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M123.84 125c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V113c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M143.24 113v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M123.84 180.55c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M143.24 168.45V171c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-3.95-6.9-5.95z"/><path d="M123.84 235.95c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M143.24 223.95v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M123.84 291.45c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M143.24 279.35v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M123.84 346.85c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M143.24 334.75v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M123.84 402.25c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M143.24 390.25v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M82.57 208.1c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M102 196.1v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M82.57 263.6c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V273c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M102 251.5v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M82.57 319c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V307c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M102 307v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M82.57 374.5c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M102 362.4v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M41.3 227c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V215c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M60.7 215v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M41.3 282.5c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M60.7 270.4v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M41.3 337.9c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M60.7 325.9v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M41.3 393.4c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M60.7 381.3v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M0 190.24c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.37 4-6.7 6z"/><path d="M19.43 178.24v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M0 245.74c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.37 4-6.7 6z"/><path d="M19.43 233.64v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M0 301.14c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.37 4-6.7 6z"/><path d="M19.43 289.14v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M0 356.64c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V366c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.37 4.04-6.7 6.04z"/><path d="M19.43 344.54v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M0 412c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V400c-2 2-4.4 4-6.7 6s-4.37 4-6.7 6z"/><path d="M19.43 399.94v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 399.7c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 387.7v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 11.6c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V21c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V-.4c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41-.4v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M454 67.1c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 55v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7V79c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 122.5c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 110.5v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 178c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V166c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 165.9v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 233.4c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 221.3v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 288.8c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 276.8v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M454 344.3c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.39 4-6.7 6z"/><path d="M473.41 332.2v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M495.28 50.24c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M514.68 38.24v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M495.28 105.74c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M514.68 93.64v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M495.28 161.14c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M514.68 149.14v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M495.28 216.64c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V226c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4.04-6.7 6.04z"/><path d="M514.68 204.54v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M495.28 272c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V260c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M514.68 259.94v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M495.28 327.44c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M514.68 315.44V318c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-3.96-6.9-5.96z"/><path d="M495.28 382.94c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M514.68 370.84v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M536.55 418.34c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 406.34v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M536.55 30.24c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 18.24v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.7c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4.1-6.9-6.1z"/><path d="M536.55 85.74c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 73.64v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M536.55 141.14c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 129.14v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M536.55 196.64c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6V206c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4.04-6.7 6.04z"/><path d="M555.95 184.54v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M536.55 252c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7V240c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 239.94v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/><path d="M536.55 307.44c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 295.44V298c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-3.96-6.9-5.96z"/><path d="M536.55 362.94c2.3 2 4.4 4 6.7 6s4.7 4 6.7 6v-2.6c-1-1.6-3.4-3.2-5.2-4.7s-3.5-3.1-5.4-4.7c1.8-1.6 3.5-3.2 5.3-4.7s4.3-3.1 5.3-4.7v-2.6c-2 2-4.4 4-6.7 6s-4.4 4-6.7 6z"/><path d="M555.95 350.84v2.6c2 1.6 3.5 3.2 5.3 4.7s3.5 3.1 5.4 4.7c-1.8 1.6-3.5 3.2-5.3 4.7s-3.4 3.1-5.4 4.7v2.6c2-2 4.5-4 6.8-6s4.5-4 6.9-6c-2.3-2-4.5-4-6.8-6s-4.9-4-6.9-6z"/></svg>
</div>
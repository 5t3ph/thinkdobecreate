<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tdbc
 */

?>

<?php
if(is_front_page() || is_single()) {
	get_template_part('template-parts/partial', 'recentposts');
} ?>

<footer class="mt-auto py-3 text-center">
	<div class="container">
		<div class="row justify-content-center align-items-end">
			<div class="col-12 text-center">
				<p><strong>ThinkDoBeCreate</strong>, <a href="http://wordpress.org/" target="_blank" class="text-muted">Proudly powered by WordPress</a></p>
			</div>
			<div class="col-auto">
				<p>&copy; <?php echo date('Y'); ?> Stephanie Eckles</p>
			</div>
			<div class="col-auto ml-lg-3">
				<p><a href="https://twitter.com/5t3ph" target="_blank">Twitter</a> | <a href="https://www.linkedin.com/in/stepheckles" target="_blank">LinkedIn</a> | <a href="https://github.com/5t3ph/" target="_blank">GitHub</a> | <a href="https://codepen.io/5t3ph/" target="_blank">CodePen</a></p>
			</div>
		</div>
	</div>
	<a id="github" class="bg-dark text-white" href="https://github.com/5t3ph/thinkdobecreate" target="_blank">View on GitHub</a>
</footer>


<?php wp_footer();?>
</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Planty
 */

?>

	<footer id="site-footer" class="header-footer-group">
		<?php if(!is_page(62)) {
			echo '<img src="http://localhost/planty/PlantyVFinale/wordpress/wp-content/uploads/2023/10/Group-8.png" alt="Canettes de différentes tailles" class="footer">';
		} ?>
		<p>Mentions légales<p>
	</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>

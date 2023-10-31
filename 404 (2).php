<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
  
<div id="notfound" class="py-100">
	<div class="container">
		<div class="notfound">
			<div class="notfound-404">
			<h1>Oops!</h1>
			</div>
			<h2>404 - Page not found</h2>
			<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
			<a href="<?php echo home_url();?>" class="common-btn green">Go To Homepage</a>
		</div>
	</div>
</div>

<?php
get_footer();

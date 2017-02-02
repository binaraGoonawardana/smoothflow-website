<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
        // Start the loop.
while ( have_posts() ) : the_post();?>
<div class="innertitle" data-sr="enter bottom and move 50px over 0.5s">
	<div class="row">
		<h1><?php the_title();?></h1>
		<?php the_field('tag_line'); ?>
	</div>
</div>
<div class="innercontent">
	<?php the_content();?>
</div>

<div class="footer-cta">
	<div class="innercontent">
		<h3>To know everything Smoothflow can do for you</h3>
		<a class="link" href="http://smoothflow.io/app/auth/#/signup">Get Started now</a>
		<a class="link" href="http://smoothflow.io/app/auth/#/signup?package=free">Try for 30 Days</a>
	</div>
</div>
</div>

<?php endwhile;?>



<?php get_footer(); ?>

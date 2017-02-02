<?php
/**
 * The template for displaying pages
 Template Name: How it Works
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

<div class="howitworks">
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
<a class="link" href="<?php bloginfo('url');?>/pricing">Get Started now</a>
</div>
</div>
 </div>

           <?php endwhile;?>
</div>


<?php get_footer(); ?>

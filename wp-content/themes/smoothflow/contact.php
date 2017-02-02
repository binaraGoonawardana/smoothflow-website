<?php
/**
 * The template for displaying pages
  Template Name: Contact Page
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
<div class="contactbg">
<?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>

                   <div class="innertitle">
                    <div class="row">
                        <h1><?php the_title();?></h1>
                        <p><?php the_field('tag_line'); ?></p>
                    </div>
                </div>
                <div class="row">
                <div class="innercontent">
                    <div class="form">
					<div class="contact-info">
						<div class="email block">
						<h3>Email Us</h3>
						<?php the_field('email'); ?>
						</div>
						<div class="address block">
						<h3>We are located at</h3>
						<?php the_field('address'); ?>
						</div>
						<div class="phone block">
						<h3>Call us</h3>
						<?php the_field('phone_number'); ?>
						</div>
					</div>
                        <div class="contact-form">
                            <?php the_content();?>
                        </div>
                    </div>
                    </div>
                </div>


           <?php endwhile;?>
</div>
<?php get_footer(); ?>

<?php
/**
 * The main template file
 Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 get_header(); ?>


 <section class="hero">
    <h1><?php the_field('hero_title'); ?></h1>
    <img src="<?php bloginfo('template_url');?>/images/imac1.png">
</section>
<section  id="about-us" class="overview">
    <div class="row">
        <div class="col textcontent">
            <h2>Overview</h2>
            <?php the_field('overview_content'); ?>
            <a class="link" href="<?php the_field('overview_link'); ?>">Discover More</a>
        </div>
        <div class="col img">
            <img src="<?php bloginfo('template_url');?>/images/imac2.png">
            <div class="pencil1"></div>
            <div class="pencil2"></div>
            <div class="pen"></div>
        </div>
    </div>
</section>
<section class="keyfeatures">
    <div class="row">
        <h2>Key Features</h2>
        <?php the_field('key_features_1'); ?>
        <?php the_field('key_features_2'); ?>
        <?php the_field('key_features_3'); ?>
        <div class="direction">
            <div class="path1"></div>
            <div class="path2"></div>
            <div class="path3"></div>
        </div>
        <div class="screens">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>
    </div>
</section>
<section id="howitworks" class="how">
    <div class="ellipse">
        <div class="title">
            <h2 >How do I get started?</h2>
            <p>Follow these simple steps to get started</p>
        </div>
        <div class="circle1"><img src="<?php bloginfo('template_url');?>/images/tenant.png"><br/><strong>Create Tenant</strong></div>
        <div class="circle2"><img src="<?php bloginfo('template_url');?>/images/brush.png"><br/><strong>Draw your logic</strong></div>
        <div class="circle3"><img src="<?php bloginfo('template_url');?>/images/login.png"><br/><strong>Compile or Publish</strong></div>
        <div class="circle4"><img src="<?php bloginfo('template_url');?>/images/workplace.png"><br/><strong>Run your webservices</strong></div>

    </div>
    <a class="link" href="<?php bloginfo('url');?>/pricing">Get Started now</a>
</section>

<?php get_footer(); ?>

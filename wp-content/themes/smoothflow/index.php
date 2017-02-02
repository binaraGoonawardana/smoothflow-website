<?php
/**
 * The main template file
 * another dxfdg buhaha
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
	<h1>Automated workflow that reduce chaos</h1>
	<img src="<?php bloginfo('template_url');?>/images/imac1.png">
</section>
<section class="overview">
	<div class="row">
		<div class="col textcontent">
			<h2>Overview</h2>
			<p>If automated workflow is what you are looking for, then look no further as SmoothFlow provides the right tools and is reliable and cost effective.</p>
			<p>Creating workflows are made easy with SmoothFlow and its simplified tools available to create and publish workflows. It’s a simple yet highly effective tool to create, manage and publish workflows efficiently. SmoothFlow can be set up to be ready to use in minutes for faster deployment and makes designing workflows simple and easy.</p>
			<p>With the right balance of features and options to flawlessly create and execute workflows all you need to do is take advantage of the simplicity. Just drag and drop the steps, arrange them, connect them with the data and the workflow is ready to be used immediately.</p>
			<a class="link" href="#">Discover More</a>
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
		<div class="block one">
			<h3>Drag-and-drop Simplicity</h3>
			<p>Save time by using the simple drag and drop feature and arrange the elements in the work area and reorder them as required to build the workflow.</p>
		</div>
		<div class="block two">
			<h3>A Clear and Intuitive UI</h3>
			<p>An intuitive interface structured so that the menu provides everything you need to build workflows. This structured arrangement ensures ease of use.</p>
		</div>
		<div class="block three">
			<h3>Default Flow Controls</h3>
			<p>Basic and more common controls used to design workflows are available by default to make the designing process much simpler and easier.</p>
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
			<h2>How do I get started?</h2>
			<p>Follow these simple steps to get started</p>
		</div>
		<div class="circle1"><strong>Register / Create Tenant</strong></div>
		<div class="circle2"><strong>Draw your logic</strong></div>
		<div class="circle3"><strong>Compile or Publish</strong></div>
		<div class="circle4"><strong>Run your webservices</strong></div>

	</div>
	<a class="link" href="#">Get Started now</a>
</section>

<?php get_footer(); ?>

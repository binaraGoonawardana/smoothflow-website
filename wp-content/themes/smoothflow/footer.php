<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer>
  <center>
    <div class="row">
      <div style="width: 100%" class="footermenu">
       <?php wp_nav_menu( array('menu' => 'Footer Menu', 'menu_class' => 'mainmenu' )); ?>

	<ul class="sm_block" style="float:right;margin-top:-10px;border-top:none;width: 220px;margin: 0 auto;display: block;">
		<li style="padding-top:0px;height:55px"><a href="https://www.facebook.com/smoothflowio/" class="sm_icon sm_facebook" target="_blank" style="display: inline-block;width: 35px;height: 35px;opacity: 0.3;position:relative;-webkit-transition: opacity 1;-moz-transition: opacity 1;-ms-transition: opacity 1;-o-transition: opacity 1;transition: opacity 1;background: url('http://www.smoothflow.io/wp-content/uploads/2016/12/sm.png') -5px -5px;"></a></li>
		<li style="padding-top:0px;height:55px"><a href="https://twitter.com/SmoothFlow_io" class="sm_icon sm_twitter" target="_blank" style="display:inline-block;width: 35px;height: 35px;opacity: 0.3;position:relative;-webkit-transition: opacity 1;-moz-transition: opacity 1;-ms-transition: opacity 1;-o-transition: opacity 1;transition: opacity 1;background:url('http://www.smoothflow.io/wp-content/uploads/2016/12/sm.png') -45px -5px;"></a></li>
		<li style="padding-top:0px;height:55px"><a href="https://www.linkedin.com/company/smooth_flow" class="sm_icon sm_linkedin" target="_blank" style=" display: inline-block;width: 35px;height: 35px;opacity: 0.3;position:relative;-webkit-transition: opacity 1;-moz-transition: opacity 1;-ms-transition: opacity 1;-o-transition: opacity 1;transition: opacity 1;background:url('http://www.smoothflow.io/wp-content/uploads/2016/12/sm.png') -83px -5px;"></a></li>
	</ul>
	</div>

     <div class="copyright" style="margin-top:20px;color:#ccc">
        &copy; <?php echo date('Y');?> SmoothFlow.io a product of <a href="http://www.duoworld.com/" target="_blank" style="color: #ffffff">&nbsp;<img src="http://www.cloudcharge.com/wp-content/uploads/2016/12/logo-1.png" style="width: 130px" /></a> All Rights Reserved
    </div>
</div>
  </center>
</footer>

<a href="#0" class="cd-top">Top</a>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url');?>/js/foundation.js"></script>
<script src="<?php bloginfo('template_url');?>/js/trunk.js"></script>
<script src="<?php bloginfo('template_url');?>/js/app.js"></script>
</body>
</html>

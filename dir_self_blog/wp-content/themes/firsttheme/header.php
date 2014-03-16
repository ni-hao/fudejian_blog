<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?474323131bc2ebdf7a5f3bc107d3cda8";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>

<body class="<?php sandbox_body_class() ?>">
<div id="background"> <img src="<?php bloginfo('template_url') ?>/content/images/public-bk.jpg" height="100%" width="100%"/> </div>
<div id="wrapper" class="hfeed">

  <div id="header">
    <div id="header-fading"></div>
    <div id="header-bg"></div>
    <div id="header-content">
	    <div id="blog-title"> <a title="<?php _e('首页') ?>" href="<?php bloginfo('home'); ?>/"><img src="<?php bloginfo('template_url') ?>/content/images/blog-title.png"/></a></div>
	<div id="access">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_id' => "menu" ) ); ?>
	</div><!-- #access -->
	<div id="search">
<?php the_widget('WP_Widget_Search'); ?> 
	</div><!--  #search -->
    </div>
    
  </div>
  <!--  #header -->

<?php get_header() ?>

	<div id="container">
		<div id="content">

			<div id="post-0" class="post error404 not-found">
				<h2 class="entry-title"><?php _e( '页面没有找到', 'ourws' ) ?></h2>
				<div class="entry-content">
					<p><a href="<?php bloginfo('home'); ?>/" title="<?php _e( '首页', 'ourws' ) ?>"><?php _e( '返回首页', 'ourws' ) ?></a></p>
				</div>
			</div><!-- .post -->

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
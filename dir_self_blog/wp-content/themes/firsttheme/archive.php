<?php get_header() ?>
<?php

function native_pagenavi() {

	global $wp_query, $wp_rewrite;
	if (!$max_page) {
		$max_page = $wp_query->max_num_pages;
	}
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

	$pagination = array(
	    'base' => @add_query_arg('page', '%#%'),
	    'format' => '',
	    'total' => $max_page,
	    'current' => $current,
	    'end_size' => 1,
	    'mid_size' => 2,
	    'prev_text' => '&laquo;',
	    'next_text' => '&raquo;'
	);

	if ($wp_rewrite->using_permalinks())
		$pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');

	if (!empty($wp_query->query_vars['s']))
		$pagination['add_args'] = array('s' => get_query_var('s'));
	if ($current != 1) {
		printf('<a href="%1$s" class="first-page" title="%2$s">%3$s</a> ', get_pagenum_link(1), __('第一页'), __('第一页'));
	}
	echo paginate_links($pagination);
	if ($current != $max_page) {
		printf(' <a href="%1$s" class="last-page" title="%2$s">%3$s</a>', get_pagenum_link($max_page), __('最后一页'), __('最后一页'));
	}
}
?>



<div id="container">
	<div id="content">

		<?php the_post() ?>

		<?php if (is_day()) : ?>
			<h2 class="page-title"><?php printf(__('<span>%s</span>', 'sandbox'), get_the_time(get_option('date_format'))) ?></h2>
		<?php elseif (is_month()) : ?>
			<h2 class="page-title"><?php printf(__('<span>%s</span>', 'sandbox'), get_the_time('F Y')) ?></h2>
		<?php elseif (is_year()) : ?>
			<h2 class="page-title"><?php printf(__('<span>%s</span>', 'sandbox'), get_the_time('Y')) ?></h2>
		<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
			<h2 class="page-title"><?php _e('Blog Archives', 'sandbox') ?></h2>
		<?php endif; ?>

		<?php rewind_posts() ?>

		<div id="nav-above" class="navigation">
			<div class="nav-previous">

				<?php next_posts_link(__('<span class="meta-nav">&laquo;</span> 上一页', 'ourws')) ?>
			</div>
			<div class="nav-next">

				<?php previous_posts_link(__('下一页 <span class="meta-nav">&raquo;</span>', 'ourws')) ?>
			</div>
		</div>

		<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<div class="post-title">
					<div id="post-list-comment-num" > <span>
							<?php comments_popup_link(0, 1, '%') ?>
						</span> </div>
					<h2 class="entry-title"><a class="title" href="<?php the_permalink() ?>" title="<?php printf(__('链接到%s', 'ourws'), the_title_attribute('echo=0')) ?>" rel="bookmark">
							<?php the_title() ?>
						</a></h2>
					<div class="info"> <span class="date">
							<?php unset($previousday);
							printf('%1$s', the_date(sprintf(__('%1$s年%2$s月%3$s日'), 'Y', 'm', 'd'), '', '', false)) ?>
						</span> </div>
				</div>
				<!-- .post-title-->
				<div class="entry-content">
	<?php the_excerpt(__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox')) ?>

				</div>
				<div class="entry-meta"> 
      <span class="author vcard">
	  <?php printf( __( '作者%s', 'ourws' ), '： '. '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( '阅读%s所有文章', 'ourws' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?>
      </span> 
      <span class="meta-sep">|</span> 
      <span class="cat-links"><?php printf( __( '分类%s', 'ourws' ), ': '. get_the_category_list(', ') ) ?></span> 
      <span class="meta-sep">|</span>
        <?php edit_post_link( __( '编辑', 'ourws' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
        <?php the_tags( __( '<span class="tag-links">标签: ', 'ourws' ), ", ", "</span>" ) ?>

        </div>

			</div><!-- .post -->

<?php endwhile; ?>


    <div class="page_navi navigation">
      <?php native_pagenavi(); ?>
    </div>
	</div><!-- #content .hfeed -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
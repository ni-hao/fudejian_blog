	
<div id="custom-sidebar" class="sidebar">
    <ul class="xoxo">
      <li id="holder-summary">
        <h3>你好,</h3>
        <div id="summary-bg"> <img class="self-image" src="<?php bloginfo('template_url') ?>/content/images/boyAndHisGirl.jpg" width="145" height="235" alt="self" />
          <div id="summary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis purus nec nibh pellentesque in ullamcorper magna blandit. Quisque dictum convallis dui, sit amet venenatis urna dictum facilisis. Nam a dui sagittis eros ullamcorper tincidunt. Duis et dui eget sem fringilla dictum quis sed tellus. Praesent fermentum turpis accumsan elit egestas ut dictum velit ultrices. In at risus nulla. Donec varius mollis massa. Donec at nisl sed tortor cursus molestie sit amet at diam.</div>
        </div>
      </li>
    </ul>
  </div>
  <!-- #custom-sidebar .sidebar -->
  
<div id="primary" class="sidebar">
		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
			<li id="pages">
				<h3><?php _e( 'Pages', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_pages('title_li=&sort_column=menu_order' ) ?>
				</ul>
			</li>

			<li id="categories">
				<h3><?php _e( 'Categories', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 

				</ul>
			</li>

			<li id="archives">
				<h3><?php _e( 'Archives', 'sandbox' ) ?></h3>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
			</li>
<?php endif; // end primary sidebar widgets  ?>
		</ul>
	</div><!-- #primary .sidebar -->
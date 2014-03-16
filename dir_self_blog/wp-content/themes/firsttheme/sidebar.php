	
<div id="custom-sidebar" class="sidebar">
    <ul class="xoxo">
      <li id="holder-summary" style="display:none;">
        <h3>你好,</h3>
        <div id="summary-bg"> <img class="self-image" src="<?php bloginfo('template_url') ?>/content/images/boyAndHisGirl.jpg" width="145" height="235" alt="self" />
        </div>
      </li>
      <li id="contact-us" class="sidebar-item">
        <h3><?php _e('联系我') ?></h3>
	<ul>
		<li id="sina-weibo">
		<a  target="_blank"href="http://weibo.com/u/2372953117" title="FUDEJIAN新浪微博">FUDEJIAN新浪微博</a>	
		</li>	
		<li id="renren-probile">
		<a target="_blank" href="http://www.renren.com/229811691/profile" title="FUDEJIAN人人">FUDEJIAN人人
		</li>	
	</ul>
      </li>
    </ul>
  </div>
  <!-- #custom-sidebar .sidebar -->
  
<div id="primary" class="sidebar">
		<ul class="xoxo">
			<li style="display:none;" id="love-fudejian">
				<h3><?php _e('喜欢FUDEJIAN？') ?></h3>
				<ul>
				</ul>
			</li>
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
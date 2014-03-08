<?php get_header() ?>
<div id="container">
    <div id="content">

        <?php the_post() ?>

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
                    </span> 
                    <div class="entry-meta"> <span class="author vcard"><?php printf(__('作者%s', 'ourws'), '： ' . '<a class="url fn n" href="' . get_author_link(false, $authordata->ID, $authordata->user_nicename) . '" title="' . sprintf(__('阅读%s所有文章', 'ourws'), $authordata->display_name) . '">' . get_the_author() . '</a>') ?></span> <span class="meta-sep">|</span> <span class="cat-links"><?php printf(__('分类%s', 'ourws'), ': ' . get_the_category_list(', ')) ?></span> <span class="meta-sep">|</span>
                        <?php edit_post_link(__('编辑', 'ourws'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n") ?>
<?php the_tags(__('<span class="tag-links">标签: ', 'ourws'), ", ", "</span>") ?>

                    </div>
                </div>

            </div>
            <!-- .post-title-->

            <div class="entry-content">
                <?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'sandbox') . '&after=</div>') ?>
            </div>      

        </div><!-- .post -->

<?php comments_template() ?>

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
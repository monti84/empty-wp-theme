<?php
/* Template Name: Blog */

get_header(); 
query_posts('posts_per_page=5');
?>         
    <div id="main" class="two-column-right">
      <section class="content">
<?php
while ( have_posts() ) : the_post();
?>
        <article class="blog-post">
          <div class="post-head">
            <div class="post-info">
              <time class="publish-date"><?php the_time('F j, Y') ?></time>
              <h2><a href="<?php echo get_permalink( get_THE_ID() ); ?>"><?php the_title() ?></a></h2>
              <div class="author">by <?php the_author() ?></div>
            </div>
            <ul class="post-activity">
              <li class="comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></li>
              <li class="reactions">9 Reactions</li>
            </ul>
          </div>

          <div class="post-body">
<?php global $more;$more = 0;?>
<?php the_content('') ?>
<p><a href="<?php echo get_permalink( get_THE_ID() ); ?>" class="more">Read more...</a></p>
          </div>
          <div class="post-tags"><?php the_tags(false, false, false)?></div>
        </article>
<?php
endwhile;

// Reset Query
wp_reset_query();

?>
<?php echo $content ?>
      </section>
      <aside>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog-Sidebar') ) : ?><?php endif; ?>
      </aside>
    </div>
  </div>
<?php
wp_footer();
get_footer(); 
?>
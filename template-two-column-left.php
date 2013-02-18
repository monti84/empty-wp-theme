<?php
/* Template name: Two column left */
get_header(); 
$post = get_page(get_the_ID()); 
$content = apply_filters('the_content', $post->post_content); 
?>      
      <div id="main" class="two-column-left">
        <aside>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left-Sidebar') ) : ?><?php endif; ?>
        </aside>
        <section class="content">
<?php echo $content ?>
        </section>
      </div>
    </div> <!-- end of top-page -->
<?php 
get_footer(); 
?>
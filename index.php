<?php
get_header(); 
$post = get_page(get_the_ID()); 
$content = apply_filters('the_content', $post->post_content); 
?>      
      <div id="main" class="two-column-right">
        <section class="content">
<?php echo $content ?>
        </section>
        <aside>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right-Sidebar') ) : ?><?php endif; ?>
        </aside>
      </div>
    </div> <!-- end of top-page -->
<?php 
get_footer(); 
?>
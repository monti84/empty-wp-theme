<?php
/* Template Name: Home Page */
get_header(); 
$post = get_page(get_the_ID()); 
$content = apply_filters('the_content', $post->post_content); 
?>           
      <div id="main" class="one-column-full">
        <section class="three-column-equal">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home-Widgets') ) : ?><?php endif; ?>        
        </section>
        
        <section class="content">
<?php echo $content ?>
        </section>
      </div>
    </div>
<?php
wp_footer();
get_footer(); 
?>




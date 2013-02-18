<?php
/* Template name: One column */
get_header(); 
$post = get_page(get_the_ID()); 
$content = apply_filters('the_content', $post->post_content); 
?>      
      <div id="main" class="one-column-full">
        <section class="content">
<?php echo $content ?>
        </section>
      </div>
    </div> <!-- end of top-page -->
<?php 
get_footer(); 
?>
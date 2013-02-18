<?php
/* render the breadcrumb */
function the_breadcrumb() {
  global $post;
  echo '      <ul id="breadcrumbs">';
  if (!is_home()) {
    echo '        <li><a href="' .get_option('home') . '">Home</a></li>';
    if (is_category() || is_single()) {
      echo '<li>';
      the_category('');
      if (is_single()) {
        echo "</li><li>";
        the_title();
        echo '</li>';
      }
    } 
    
    elseif ( is_page() && !$post->post_parent ) {
      echo '<li>';
      echo the_title();
      echo '</li>';
    }
    
    elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li class="first"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);

      if (is_array($breadcrumbs)) {
        foreach ($breadcrumbs as $crumb) echo "$crumb";
      }
      echo "<li class=\"last\">";
      the_title();
      echo "</li>";
    }      
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
}




/* register sidebars */

if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'name'=>'Home Widgets',
       'before_widget' => '<div class="block equalized block-%1$s">',
       'after_widget' => '</div>',
       'before_title' => '<h2>',
       'after_title' => '</h2>'
   ));

   register_sidebar(array(
       'name'=>'Home Slider',
       'before_widget' => '',
       'after_widget' => '',
       'before_title' => '',
       'after_title' => ''
   ));

   register_sidebar(array(
       'name'=>'Left-Sidebar',
       'before_widget' => '<div class="block %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<div class="title">',
       'after_title' => '</div>'
   ));
   
   register_sidebar(array(
       'name'=>'Right-Sidebar',
       'before_widget' => '<div class="block %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<div class="title">',
       'after_title' => '</div>'
   ));

   register_sidebar(array(
       'name'=>'Blog-Sidebar',
       'before_widget' => '<div class="block %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<div class="title">',
       'after_title' => '</div>'
   ));

   register_sidebar(array(
       'name'=>'Header Widgets',
       'before_widget' => '<div class="block %2$s">',
       'after_widget' => '</div>',
       'before_title' => '',
       'after_title' => ''
   ));

   register_sidebar(array(
       'name'=>'Footer Widgets',
       'before_widget' => '<div class="block block-%1$s">',
       'after_widget' => '</div>',
       'before_title' => '<div class="title">',
       'after_title' => '</div>'
   ));
}

show_admin_bar(false);
?>

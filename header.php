<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title> 
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_directory' ) ?>/css/reset.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_directory' ) ?>/css/style.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_directory' ) ?>/css/typography.css" />

  <script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery-1.8.2.min.js"></script>
  <script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery.cycle.all.latest.js"></script>
  <script src="<?php bloginfo( 'template_directory' ) ?>/js/main.js"></script>
 
  <!--[if IE]>
    <script src="<?php bloginfo( 'template_directory' ) ?>/js/html5.js"></script>
  <![endif]-->

<?php wp_head(); ?>
</head>

<?php if(is_page()) { $page_slug = $post->post_name; } ?>

<body <?php body_class($page_slug); ?>>
  <div id="page-container">
    <div class="top-page">
      <div class="header-container">
        <header id="header">
          <div class="logo">
            <img src="<?php bloginfo( 'template_directory' ) ?>/images/logo-main.png" class="alignleft"/>
          </div>
          
          <div class="social">
            <ul>
              <li><a href="http://www.facebook.com/">Facebook</a></li>
              <li><a href="http://www.twitter.com/">Twitter</a></li>
              <li><a href="http://www.linkedin.com/">Linkedin</a></li>
            </ul>
          </div>
          <div class="contact">
            <ul>
              <li>Phone: +72 112 4450</li>
              <li>Fax: +72 112 4500</li>
              <li>E-mail: <a href="mailto: email@mail.ma">email@mail.ma</a></li>
            </ul>
          </div>
          
          <nav>
            <ul>
              <li><a href="<?php echo home_url( '/' )?>">Home</a></li>
<?php 
$home = get_page_by_title( "home");
wp_list_pages('title_li=&depth=2&exclude=' .  $home->ID);
?>
            </ul>
          </nav>
        </header>
      </div>
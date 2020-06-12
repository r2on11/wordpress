<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FirstTheme</title>
    <?php wp_head(); ?>
</head>
    <body>
        <!-- <?php wp_nav_menu(array('theme_location'=>'primary')); ?> -->
        <nav class="navbar navbar-expand-lg s bg-light">
  <a class="navbar-brand" href="http://localhost/testsite/wordpress/">Random Site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php wp_nav_menu( array (
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'navbar-nav ml-auto' 
    ) ); ?>
   
<form class=" d-flex justify-content-center my-auto" role="search" method="get" action="<?php echo home_url ( '/' );?>">
<div class="kerkimi nav ui icon input mt-2">
    <input  class="prompt nav"  type="text" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" title="Search" />
    <i class="search icon"></i>
  </div>
  </form>
    
  </div>
</nav>

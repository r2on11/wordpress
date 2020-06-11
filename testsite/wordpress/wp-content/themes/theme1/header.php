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
    
  </div>
</nav>

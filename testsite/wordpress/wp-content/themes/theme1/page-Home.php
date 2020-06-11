<?php get_header(); ?>
    <?php  if(have_posts() ):
     while (have_posts() ): the_post(); ?>

       <div class='crsl'>
           <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active ">
                      <img  src="https://images.wallpaperscraft.com/image/spots_background_abstract_81493_800x600.jpg" class="photo1 d-block w-100" alt="image">
                  </div>
                  <div class="carousel-item ">
                      <img  src="https://a-static.besthdwallpaper.com/modern-abstract-art-24-wallpaper-800x600-9687_17.jpg" class="photo2 d-block w-100" alt="image2">
                  </div>
                   <div class="carousel-item ">
                       <img src="https://images.wallpapersden.com/image/download/material-abstract-shapes_59486_800x600.jpg" class="photo3 d-block w-100" alt="image3">
                    </div>
               </div>
            </div>
    </div>
      
   


     <?php endwhile;
    endif;
?>
        
<?php get_footer(); ?>
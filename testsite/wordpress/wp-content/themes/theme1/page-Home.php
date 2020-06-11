<?php get_header(); ?>
    <?php  if(have_posts() ):
     while (have_posts() ): the_post(); ?>

       <div class='crsl'>
           <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active ">
                      <img  src="https://ga2019.iso.org/files/live/sites/ga2019/files/headers/ACER/header-welcome.jpg/thumbnails/800x600" class="photo1 d-block w-100" alt="image">
                  </div>
                  <div class="carousel-item ">
                      <img  src="https://www.voiceofsandiego.org/wp-content/uploads/2019/09/SD-water-canvas-800x600.png" class="photo2 d-block w-100" alt="image2">
                  </div>
                   <div class="carousel-item ">
                       <img src="https://www.euractiv.com/wp-content/uploads/sites/2/2020/03/shutterstock_1454940068-800x600.jpg" class="photo3 d-block w-100" alt="image3">
                    </div>
               </div>
            </div>
    </div>
    
      
   


     <?php endwhile;
    endif;
?>
        
<?php get_footer(); ?>
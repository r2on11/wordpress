<?php get_header(); ?>

<div class="row">
	<div class="col-md-8">
		<div class="row">
		  <?php 
	    	if( have_posts() ):
		    	while( have_posts() ): the_post(); ?>	
			  	<?php get_template_part('content', 'search'); ?>	
			    <?php endwhile;	
		    endif;		
	  	?>
		</div>
	</div>	
	<div class="col-md-4">
    <?php get_sidebar(); ?> 
    <!-- //funk wp i gatshem.. mundemi me editu tani ket pjesen e sidebar me new file -->
	</div>	
</div>

<?php get_footer(); ?>
<article class="m-5"  >

	<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
	<small><?php the_category(' '); ?>  || <?php edit_post_link(); ?></small>
	<?php the_excerpt(); ?> 
    <!-- gets the short version of article and put 3dots  -->
	<hr>

</article>
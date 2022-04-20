<?php get_header() ?>
<br><br><br><br>



<?php
// Si la página tiene contenido para mostrar se hace con have_posts - funcionalidad de WordPress
if(have_posts()){ 

        while(have_posts()){ the_post();
             //the_content(); 

                ?>
<div class="contenido-post">
<?php
             get_template_part('template-parts/content/content','page');
             ?>
              </div>
             <?php
        } 


 }
 
 ?>



<section class="section one">
		  <h2>One Orange</h2>
	</section>
	<section class="section two">
  			<h2>Two Oranges</h2>
	</section>
	<section class="section three">
		  <h2>Three Oranges</h2>
	</section>
	<section class="section four">
		  <h2>Four Oranges</h2>
	</section>


    <?php get_footer() ?>


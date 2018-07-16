<?php
	/*
		Template Name: SectionWithButton
        Template Post Type: homepage-section
	*/
 ?>
 <?php get_header(); ?>
 <main role="main">
 <!-- section -->
 <section>

     <div class="spacer-50"></div>
     <div class="container-fluid mt-5 page-content">
         <div class="container-fluid primary py-5 mb-5">
             <div class="container">
                 <div class="row justify-content-center justify-content-md-start align-items-md-center">
                     <div class="col-10 col-md-6">
                         <strong><h1 class="text-primary text-white"><?php the_title(); ?></h1></strong>
                     </div>
                 </div>
             </div>
         </div>
         <div class="container">
             <div class="row justify-content-center justify-content-md-start">
                 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                 <div class="col-10">
                     <?php the_content(); ?>
                 </div>

                 <?php endwhile; ?>

                 <?php else: ?>
             </div>
         </div>
     </div>

     <!-- article -->
     <article>

         <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

     </article>
     <!-- /article -->

 <?php endif; ?>

 </section>
 <!-- /section -->
 </main>
 <?php get_sidebar(); ?>
 <?php get_footer(); ?>

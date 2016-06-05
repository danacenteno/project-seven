<?php

/*
	Template Name: Full Page, No Sidebar
*/

<<<<<<< HEAD
//header
get_header();  ?>

<div class="page-hero">
	
</div>

<!-- main content -->
<div class="main">
  <div class="page-container">
=======
get_header();  ?>

<div class="main">
  <div class="container">
>>>>>>> c33035f6728b2e00faa5af89d06e11388b7f3be8
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
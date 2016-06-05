<?php get_header();  ?>

<div class="main">
  <div class="container">
<<<<<<< HEAD
  
=======

>>>>>>> c33035f6728b2e00faa5af89d06e11388b7f3be8
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
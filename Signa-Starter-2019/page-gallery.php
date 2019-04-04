<?php
/**
 * The template for displaying normal pages
 * Template Name: Gallery Template
 * @package start-theme
 */

get_header(); ?>

<section id="inner-page-title-header" style="background-image:url('/wp-content/uploads/2019/03/inner-page-bg-2.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <section>
    <div class="container">
    <div class="row pt-5 mb-5 justify-content-center">
      <div class="col-sm-8">
        <?php the_field('above_gallery_content'); ?>
      </div>
    </div>
    

    
      <div class="row pb-5">
        <div class="col">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="row pb-5">
        <div class="col" id="main-contact-form">
          <p class="horizontal-form-title">Ready for an estimate?</p>
          <?php echo do_shortcode('[gravityform id=2 title=false description=false]'); ?>
        </div>
      </div>
      
    </div>
  </section>

  </article><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
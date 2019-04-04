<?php
/**
 * The template for displaying normal pages without the sidebar
 * Template Name: Default Page No Sidebar
 *
 * @package start-theme
 */

get_header(); ?>

<section id="inner-page-title-header" style="background-image:url('<?php
  if ( has_post_thumbnail() ) {
      echo the_post_thumbnail_url();
  }
  else {
      echo '/wp-content/uploads/2019/03/inner-page-bg-2.jpg';
  }
  ?>');">
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
  <div class="container">
    <div class="row">
    <div class="col-12 col-md-12 no-gutter">
      <section class="mr-md-3 mr-lg-5 mt-4"">
        <div class="container">

        <div class="row">
            <div class="col p-0">
              <div id="intro-paragraph">
                <?php the_field('intro_content') ?>
              </div>
            </div>
          </div>

          <?php

          // check if the repeater field has rows of data
          if( have_rows('page_content') ):

            // loop through the rows of data
              while ( have_rows('page_content') ) : the_row();?>

              <div class="row mb-5">

                <div class="col py-3" style="background-image:url('<?php the_sub_field('background_image'); ?>');">

                  <div class="bg-section-inner-page p-3">

                    <h3 class="mt-0"><?php the_sub_field('section_title'); ?></h3>

                    <div><?php the_sub_field('section_paragraph'); ?></div>

                    <a href="<?php the_sub_field('link_url'); ?>" alt="<?php the_sub_field('link_url'); ?>" class="btn orange font-weight-bold">

                      <?php the_sub_field('link_display_text'); ?>

                    </a>

                  </div>

                </div>

              </div>
              
              <?php // display a sub field value

              endwhile;

          else :

              // no rows found

          endif;

          ?>
         
        </div> 
      </section>
    </div>
    <!-- end of column -->


</div>





 
  </article><!-- #post-## -->
  </div>
  </div>
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
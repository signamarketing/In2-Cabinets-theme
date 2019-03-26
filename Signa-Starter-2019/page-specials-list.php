<?php
/**
 * The template for displaying normal pages
 * Template Name: Specials List;
 * @package start-theme
 */

get_header(); ?>

<section id="inner-page-title-header" style="background-image:url('/wp-content/uploads/2019/03/inner-page-header2@2x.jpg');">
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
    <div class="col-12 col-md-8 no-gutter">
      <section class="mr-md-3 mr-lg-5 mt-4"">
        <div class="container">

        <div class="row">
          <div class="col p-0">
            <div id="intro-paragraph">
              <?php the_field('intro_content') ?>
            </div>
          </div>
        </div>
        <div class="row mb-5">
        <?php

// check if the repeater field has rows of data
if( have_rows('specials_list') ):

  // loop through the rows of data
    while ( have_rows('specials_list') ) : the_row();?>

    

      <div class="" style="width:100%; background-image:url('<?php the_sub_field('background_image'); ?>');">

      <ul class="service-list">
        <li>
          <div class="services-fbox">
            <div>
              <h4><?php the_sub_field('special_name'); ?></h4>
            </div>
            <div><span class="service-spacing-dots"></div>
            <div><span class="service-price"><?php the_sub_field('special_price'); ?></span></div>
          </div>
          <!-- <div class="service-description">
            <p><?php the_sub_field('special_description'); ?>'.</p>
          </div> -->
        </li>
      </ul>

      </div>

    
    
    <?php // display a sub field value

    endwhile;

else :

    // no rows found

endif;

?>
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

    <div id="inner-page-col-1" class="col-12 col-md-4 rounded mb-5">
      <?php $contactform = get_field('sidebar_form', 'options'); ?>
      <div id="contact-form">
        <h3 class="font-weight-bold sidebar-title-size mt-2 mb-4 text-center"><?php echo the_field('sidebar_title', 'options'); ?></h3>
        <?php echo do_shortcode($contactform) ?>
      </div>
      <div id="content-below-sidebar-form">
        <?php echo the_field('sidebar_content_below_form', 'options'); ?>
        <div id="sidebar-bottom-cta"><a class="btn orange">Request An Estimate</a></div>
      </div>
    </div>
</div>





 
  </article><!-- #post-## -->
  </div>
  </div>
<?php endwhile; // end of the loop. ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
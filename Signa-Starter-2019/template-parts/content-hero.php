<?php
/**
 * Template part for displaying Hero Text.
 *
 * @package start-theme
 */

?>
<section id="hero" class="bg-hero padding-hero py-5 py-md-3" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
  <div class="container">
    <div class="row flex-wrap align-content-center align-items-center text-center">
      <div class="col-12 text-center hero-title-margin-bottom">
        <h1><?php the_field('hero_section_title') ?></h1>
        <p class="font-italic mb-0"><?php the_field('hero_section_sub_title') ?></p>
      </div>

      <div id="hero-list-items" class="d-flex">
        <div class="col-12 col-sm-6 text-left">

          <?php 

            // check if the repeater field has rows of data
            if( have_rows('hero_section_left_column') ):

              // loop through the rows of data
              while ( have_rows('hero_section_left_column') ) : the_row();?>
            
                <p class="hero-list-item"><?php the_sub_field('hero_section_left_column_list_item'); ?></p>

              <?php 

              endwhile;

            else :

                // no rows found

            endif;

          ?>
        </div>
        <div class="col-12 col-sm-6 text-left">
          <?php 

            // check if the repeater field has rows of data
            if( have_rows('hero_section_right_column') ):

              // loop through the rows of data
              while ( have_rows('hero_section_right_column') ) : the_row();?>

                <p class="hero-list-item"><?php the_sub_field('hero_section_right_column_list_item'); ?></p>

              <?php 

              endwhile;

            else :

                // no rows found

            endif;

          ?>
        </div>
      </div>

      <div class="col-12">
        <a href="/gallery" class="btn orange btn-lg clear-btn-orange font-weight-bold">View Our Gallery</a>
      </div>
    </div>
   
    <a class="scroll-link" alt="scroll link" href="#homepage-under-hero-links"><img alt="down-arrow" src="/wp-content/uploads/2019/03/arrow-down@2x-min.png" /></a>
  </div>
  </div>
</section>
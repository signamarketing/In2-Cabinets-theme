<?php
/**
 * Template Name: Front Page Template
 *
 * @package start-theme
 */

get_header(); ?>


  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- Hero Section-->
    <?php get_template_part( 'template-parts/content-hero' ); ?>

    <section class="orange-bg">
      <div class="container">
        <div id="homepage-under-hero-links" class="row align-items-center align-content-center text-center">
          <div class="col">
            <a href="/specials" alt="link to specials page">Specials</a>
          </div>
          <div class="col">
            <a href="/gallery" alt="link to gallery page">Gallery</a>
          </div>
          <div class="col">
            <a href="/warranty" alt="link to warranty page">Warranty</a>
          </div>
        </div>
      </div>
    </section>
    <section id="how-it-works" class="">
      <div class="container">

        <h2 class="text-center mt-0"><?php the_field('content_section_1_title') ?></h2>

<?php
while( have_rows('content_section_1') ): the_row();

if( get_row_index() % 2 == 0 ){
    // this is an even row
?>
    <div class="row d-flex align-content-center text-left">
      <div class="col-md-6 mb-3 mb-md-0 text-center">
        <img src="<?php the_sub_field('content_section_1_image'); ?>" alt="">
      </div>
      <div class="col-md-6 text-center text-md-left">
        <?php the_sub_field('content_section_1_paragraph'); ?>
      </div>
    </div>
<?php
    // code to display the image on the left
    
} else{
    // this is an odd row
?>
    <div class="row d-flex align-content-center text-left">
      <div class="col-md-6 text-center text-md-left">
        <?php the_sub_field('content_section_1_paragraph'); ?>
      </div>
      <div class="col-md-6 mb-3 mb-md-0 text-center">
        <img src="<?php the_sub_field('content_section_1_image'); ?>"  alt="">
      </div>
    </div>
<?php 
}

endwhile;
?>

      </div>
</section>
<section id="testimonials" class="bg-gray">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 mb-3 d-flex justify-content-center testimonials-title align-items-center">
        <div></div>
        <h2 class="my-0">Testimonials</h2>
        <div></div>
      </div>
    </div>

    <div class="row text-center">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="0">
        
        <div class="carousel-inner">
          
            <?php 
            // check if the repeater field has rows of data
            if( have_rows('testimonial_section') ):
              $count = 0;
              // loop through the rows of data
              while ( have_rows('testimonial_section') ) : the_row();?>
              
                <div class="carousel-item <?php if ($count==0) {echo "active"; } ?>">
                  <div class="card shadow py-4 px-5 rounded">
                    <h4 class="card-title mb-1 mt-0"><?php the_sub_field('testimonial_name'); ?></h4>
                    <p class="card-date"><?php the_sub_field('testimonial_date'); ?></p>
                    <p class="card-text font-italic">“<?php the_sub_field('testimonial_text'); ?>”</p>
                  </div>
                </div>

              <?php 
              $count++;
              endwhile;

            else :

                // no rows found

            endif;

            ?>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!-- end of carousel inner -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      </div> <!-- end of carousel-->
    </div> <!-- end of row -->
  </div> <!-- end of container -->





</section>

<section id="cities-we-serve" style="background-image:url('/wp-content/uploads/2019/03/city-bg@2x.jpg');">
  <div class="container">
    <div class="row text-left flex-wrap justify-content-between">
      <div class="col-12 text-center">
        <h2 class="mt-0"><?php the_field('city_title_section')?></h2>
      </div>
      <div class="col-md-5 text-center text-md-left">
        <?php 

              // check if the repeater field has rows of data
              if( have_rows('city_list_left') ):

                // loop through the rows of data
                while ( have_rows('city_list_left') ) : the_row();?>
                      <p><?php the_sub_field('city_list_item_1'); ?></p>
                <?php 

          endwhile;

        else :

            // no rows found

        endif;

        ?>
      </div>
      <div class="col-md-4 text-center text-md-left">
        <?php 

        // check if the repeater field has rows of data
        if( have_rows('city_list_middle') ):

          // loop through the rows of data
          while ( have_rows('city_list_middle') ) : the_row();?>
                <p><?php the_sub_field('city_list_item_2'); ?></p>
          <?php 

        endwhile;

        else :

        // no rows found

        endif;

        ?>
      </div>
      <div class="col-md-3 text-center text-md-left">
        <?php 

        // check if the repeater field has rows of data
        if( have_rows('city_list_right') ):

          // loop through the rows of data
          while ( have_rows('city_list_right') ) : the_row();?>
                <p><?php the_sub_field('city_list_item_3'); ?></p>
          <?php 

        endwhile;

        else :

        // no rows found

        endif;

        ?>
      </div>
    </div>
  </div>
</section>
<section id="hp-learn-more">
  <div class="container py-5">
    <div class="row text-center py-3">
      <?php 

      // check if the repeater field has rows of data
      if( have_rows('learn_more_section') ):

        // loop through the rows of data
        while ( have_rows('learn_more_section') ) : the_row();?>
          <div class="col-12 col-md-6 mb-5 mb-md-0 align-items-center">
            <h3 class="mt-0"><?php the_sub_field('title'); ?></h3>
            <p><?php the_sub_field('text'); ?></p>
            <a href="<?php the_sub_field('button_url'); ?>" class="btn dark-blue" alt="learn more link"><?php the_sub_field('button_text'); ?></a>
          </div>
        <?php 

      endwhile;

      else :

      // no rows found

      endif;

      ?>
    </div>
  </div>
</section>
<section id="view-gallery" style="background-image:url('/wp-content/uploads/2019/03/cta-bg-1@2x.jpg');">
  <div class="container">
    <div class="row text-center py-5">
      <div class="col-12 align-items-center justify-content-center text-center">
        <a href="/gallery" class="btn white btn-xl" alt="cabinet gallery link">View Cabinets</a>
      </div>
    </div>
  </div>
</section>

  </article><!-- #post-## -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
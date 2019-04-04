<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
            <h1>404</h1>
          </div>
        </div>
      </div>
    </section>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 no-gutter">
        <section class="mr-md-3 mr-lg-5 mt-4"">
          <div class="container">
            <div class="row">
              <div class="col p-0 mb-4 text-center">
                <div id="intro-paragraph text-center">
                  <p>The page you requested is not available.</p>
                  <a class="btn dark-blue font-weight-bold" alt="link to home page" href="/">Go Back to Home Page.</a>
                </div>
              </div>
            </div>
          </div> 
        </section>
      </div>
      <!-- end of column -->
    </div>
  </div>
</article><!-- #post-## -->
  </div>
  </div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package start-theme
 */

 /**
  * Signa Starter Custom Admin Bar 
  */
function signa_custom_toolbar() {
  //vars
  $current_template = get_page_template();

  if(current_user_can('manage_options')):
  ?>
    <div id="signaToolbar" style="height: 32px; font-size: 13px;">
      <div class="container">
        <div class="row">
          <div class="col"><?php edit_post_link('edit', '<p>', '</p>'); ?></div>
          <!-- <div class="col">Template Name: <?php echo basename($current_template); ?></div> -->
          <div class="col"><a href="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=w3tc_dashboard&w3tc_flush_all">Purge all caches</a></div>
        </div>
      </div>
    </div>
  <?php 
  endif;
}

if ( ! function_exists( 'alpha_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function alpha_paging_nav() {
  // Don't print empty markup if there's only one page.
  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
  }
  ?>
  <nav class="navigation paging-navigation" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'alpha' ); ?></h1>
    <div class="nav-links">

      <?php if ( get_next_posts_link() ) : ?>
      <div class="col-xs-6 text-left nav-previous"><?php next_posts_link( __( '<span class="meta-nav">></span> Older posts', 'alpha' ) ); ?></div>
      <?php endif; ?>

      <?php if ( get_previous_posts_link() ) : ?>
      <div class="col-xs-6 text-right nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav"><</span>', 'alpha' ) ); ?></div>
      <?php endif; ?>

    </div><!-- .nav-links -->
  </nav><!-- .navigation -->
  <?php
}
endif;

if ( ! function_exists( 'alpha_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function alpha_post_nav() {
  // Don't print empty markup if there's nowhere to navigate.
  $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
  $next     = get_adjacent_post( false, '', false );
  $viewall  = home_url('/blog');

  if ( ! $next && ! $previous ) {
    return;
  }
  ?>
  <nav class="navigation post-navigation" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'alpha' ); ?></h1>
    <div class="nav-links row">
      <?php
        if(get_previous_post_link() != ""){
          previous_post_link( '<div class="col-xs-6 text-left nav-previous">%link</div>', _x( '<span class="meta-nav"><</span>&nbsp;%title', 'Previous post link', 'openform' ) );
        } else {
          echo "<div class='col-xs-6'><a href='$viewall'>View all posts</a></div>";
        }
        if(get_next_post_link() != ""){
          next_post_link(     '<div class="col-xs-6 text-right nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">></span>', 'Next post link',     'openform' ) );
        } else {
          echo "<div class='col-xs-6 text-right'><a href='$viewall'>View all posts</a></div>";
        }
      ?>
    </div><!-- .nav-links -->
  </nav><!-- .navigation -->
  <?php
}
endif;
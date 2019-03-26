<?php
/**
 * @package alpha
 */
?>
<?php
  if ( has_post_thumbnail() ) {
    $huge_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hero');
    $huge_image = $huge_image[0];
    $large_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
    $large_image = $large_image[0];
    $medium_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
    $medium_image = $medium_image[0];
  } else {
    $large_image = false;
    $medium_image = false;
  }
  if(!$huge_image){
    $huge_image = $large_image;
  }

  // Catagories
  $categories = get_the_category();
  $output = "";
  $separator = ", ";
  foreach($categories as $category){
    $output .= $category->cat_name . $separator;
  }

  // Author Stuff
  $authorName = get_the_author_meta('user_nicename');
  $user_email = get_the_author_meta('user_email');
  $twitterHandle = get_the_author_meta('twitter');
  $facebookPage = get_the_author_meta('facebook');
  $googlePlus = get_the_author_meta('gplus');
  $instagram = get_the_author_meta('instagram');
  $authorWebpage = get_the_author_meta('user_url'); // clean user url
  $http_pos = strpos($authorWebpage, 'http://');

  // website
  if($http_pos === 0){
    $authorWebpage_clean = substr($authorWebpage, 7);
  }

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          content-single page content
        </div>
      </div>
    </div>
  </section>

</article><!-- #post-## -->
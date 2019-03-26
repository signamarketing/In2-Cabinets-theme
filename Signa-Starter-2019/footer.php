<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-theme
 */

?>
	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">

    <section>
      <div class="container">
        <div class="row justify-content-between py-4">
          <div class="col-md-4 mb-3 mb-md-3">
            <h4 class="mt-0">Contact</h4>
            <p>310 S Nina Dr #8</p>
             <p> Mesa, AZ 85210</p>
              <p>(480) 634-1460</p>
          </div>
          <div class="col-md-4 mb-3 mb-md-3" style="min-width: 290px;">
            <h4 class="mt-0">Showroom</h4>
              <p>Mon: 9:00 am - 3:00 pm</p>
              <p>Tue: 9:00 am - 3:00 pm</p>
              <p>Wed: 9:00 am - 3:00 pm</p>
              <p>Thu: 9:00 am - 3:00 pm</p>
              <p>Fri: 9:00 am - 3:00 pm</p>
              <p>Sat/Sun: Closed</p>
          </div>
          <div class="col-md-3 mb-3 mb-md-3">
            <h4 class="mt-0">Guarantee</h4>
            <p>100% Conditional Guarantee</p>
            <img id="bbb-footer-img" src="/wp-content/uploads/2019/03/bbb-logo@2x.png" alt="accredited business">
          </div>
        </div>
      </div>
    </section>
    <section class="bg-footer-bottom">
      <div class="container">
        <div class="row align-items-center py-2">
          <div class="col-sm-8 text-center text-sm-left">
            <p class="mb-0">Copyright <?php echo date('Y'); ?> In2 Cabinets | All Rights Reserved - Licensed, Bonded Insured | AZ ROC #214253</p>
          </div>
          <div id="footer-social-icons" class="col-sm-4 text-center text-sm-right pt-2 pt-sm-0">
            <a href="#" alt="facebook social link" target="_blank"><img src="/wp-content/themes/Signa-Starter-2019/img/fb-icon@2x.svg" alt="facebook"></a>
            <a href="#" alt="yelp social link" target="_blank"><img src="/wp-content/themes/Signa-Starter-2019/img/yelp-icon@2x.svg" alt="yelp"></a>
          </div>
        </div>
      </div>
    </section>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- CDN -->

<!-- Bootstrap JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

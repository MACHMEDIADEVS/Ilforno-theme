<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IL_Forno_a_Legna
 */

?>

<footer class="footer-urban pt-5 pb-4">
  <div class="container">
    <div class="row gy-4">
      
      <div class="col-md-3 text-center text-md-start">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" alt="Il Forno Logo" class="footer-logo mb-3">
        <p class="text-footer small"></p>
      </div>

      <div class="col-md-3">
        <h6 class="fw-bold text-uppercase mb-3">Recent Blog</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="footer-link">Bring Your Own Bottle
Just Add Pizza</a></li>
          <li><a href="#" class="footer-link">Ranked Among New Jersey’s</a></li>
        </ul>
      </div>

      <div class="col-md-3">
        <h6 class="fw-bold text-uppercase mb-3">Services</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="footer-link">Dine-In</a></li>
          <li><a href="#" class="footer-link">Takeout</a></li>
          <li><a href="#" class="footer-link">Catering</a></li>
          <li><a href="#" class="footer-link">Private Events</a></li>
        </ul>
      </div>

      <div class="col-md-3">
        <h6 class="fw-bold text-uppercase mb-3">Have a Question?</h6>
        <ul class="list-unstyled small">
          <li><i class="bi bi-geo-alt-fill me-2"></i> 1464 Main St, Rahway, NJ</li>
          <li><i class="bi bi-telephone-fill me-2"></i> (732) 382-6600</li>
          <li><i class="bi bi-envelope-fill me-2"></i> info@ilforno.com</li>
        </ul>
      </div>

    </div>
  </div>
</footer>
<div class="footer-bottom text-center py-3">
  <p class="mb-0">&copy; <?php echo date('Y'); ?> IL Forno a Legna — All Rights Reserved</p>
</div>


<?php wp_footer(); ?>

</body>
</html>
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

$telefono  = get_field('phone_ilforno', 'option');
$direccion = get_field('address_ilforno', 'option');
$email     = get_field('email_ilforno', 'option');
$facebook  = get_field('fb_ilforno', 'option');
?>

<footer class="footer-new pt-5 pb-4">
  <div class="container">
    <div class="row gy-4">

      <div class="col-md-3 text-center text-md-start">
        <?php
        if (has_custom_logo()) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
        ?>
          <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo" class="footer-logo mb-3">
        <?php
        }
        ?>
        <p class="text-footer small"></p>
      </div>

      <!-- Columna 2: Blog -->
      <div class="col-md-3">
        <h6 class="fw-bold mb-3">Authentic Wood-Fired Pizza</h6>
        <p>
          Our Wood-Fired Pizza is where tradition meets flavor.
        </p>
      </div>

      <!-- Columna 3: Servicios -->
      <div class="col-md-3">
        <h6 class="fw-bold text-uppercase mb-3">Quick Links</h6>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container'      => false,
          'menu_class'     => 'list-unstyled small',
          'menu_id'        => 'footer-quick-links',
          'fallback_cb'    => false
        ));
        ?>
      </div>

      <!-- Columna 4: Contacto -->
      <div class="col-md-3">
        <h6 class="fw-bold text-uppercase mb-3">Have a Question?</h6>
        <ul class="list-unstyled small">
          <li>
            <i class="bi bi-geo-alt-fill me-2"></i>
            <a href="https://www.google.com/maps/search/?api=1&query=1464+Main+St,+Rahway,+NJ" target="_blank" rel="noopener noreferrer">
              1464 Main St, Rahway, NJ
            </a>
          </li>
          <li>
            <i class="bi bi-telephone-fill me-2"></i>
            <a href="tel:+17323826600">
              (732) 382-6600
            </a>
          </li>
          <li>
            <i class="bi bi-envelope-fill me-2"></i>
            <a href="mailto:fornoalegna@yahoo.com">
              fornoalegna@yahoo.com
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</footer>

<div class="footer-legal text-center py-3">
  <?php
  wp_nav_menu(array(
    'theme_location' => 'legal-footer-menu',
    'container'      => false,
    'menu_class'     => 'footer-legal-menu',
    'depth'          => 1,
    'fallback_cb'    => false
  ));
  ?>

  <p class="copyright-text mt-2">
    Powered by <a href="https://machmedianyc.com/" class="footer-credit-link">MACHMEDIA</a> &copy; <?php echo date('Y'); ?> IL FORNO A LEGNA.
  </p>
</div>

<?php wp_footer(); ?>
</body>

</html>
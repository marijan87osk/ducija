<?php
/**
 * Header template.
 *
 * @package Ducija
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="site-header" data-header>
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Ducija početna', 'ducija'); ?>">
      <?php
      if (has_custom_logo()) {
          $custom_logo_id = get_theme_mod('custom_logo');
          echo wp_get_attachment_image($custom_logo_id, 'full', false, array('class' => 'custom-logo'));
      } else {
          echo '<span>DUCIJA</span>';
      }
      ?>
    </a>

    <nav class="main-nav" data-nav aria-label="<?php esc_attr_e('Glavna navigacija', 'ducija'); ?>">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'depth'          => 1,
              'walker'         => new Ducija_Walker_Nav_Menu(),
          ));
      } else {
          ducija_primary_menu_fallback();
      }
      ?>
      <div class="mobile-actions">
        <a class="phone-link" href="tel:0918949221">091 894 9221</a>
        <a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit</a>
      </div>
    </nav>

    <div class="header-actions">
      <a class="phone-link" href="tel:0918949221">091 894 9221</a>
      <a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit</a>
    </div>

    <button class="menu-toggle" data-menu-toggle aria-label="<?php esc_attr_e('Otvori navigaciju', 'ducija'); ?>" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </header>

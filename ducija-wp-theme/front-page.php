<?php
/**
 * Front page template.
 *
 * @package Ducija
 */

get_header();
?>
  <main>
    <?php
    get_template_part('template-parts/hero', null, array('variant' => 'front'));
    get_template_part('template-parts/sections', null, array('page' => 'front'));
    ?>
  </main>
<?php
get_footer();

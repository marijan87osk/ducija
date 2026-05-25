<?php
/**
 * Footer template.
 *
 * @package Ducija
 */
?>
  <footer class="footer" id="kontakt">
    <div class="container footer-grid">
      <div>
        <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>"><span>DUCIJA</span></a>
        <p>Obrt Ducija iz Antunovca nudi najam šatora 4x8 metara za proslave u Osijeku i okolici. Vikend najam iznosi 150 €, a u cijenu su uključeni montaža, demontaža i rasvjeta.</p>
      </div>
      <div class="footer-contact">
        <h2>Kontakt</h2>
        <p><strong>Telefon</strong><br><a href="tel:0918949221">091 894 9221</a></p>
        <p><strong>Email</strong><br><a href="mailto:matesurac@yahoo.com">matesurac@yahoo.com</a></p>
        <p><strong>Adresa</strong><br>Mirna ulica 26, Antunovac</p>
        <p><strong>Područje rada</strong><br>Osijek i okolica</p>
      </div>
    </div>
    <?php if (is_active_sidebar('footer-widgets')) : ?>
      <div class="container footer-widgets">
        <?php dynamic_sidebar('footer-widgets'); ?>
      </div>
    <?php endif; ?>
    <div class="container footer-bottom">
      <p>Sva prava pridržana &copy; <?php echo esc_html(date('Y')); ?> Ducija</p>
      <div class="socials" aria-label="<?php esc_attr_e('Društvene mreže', 'ducija'); ?>">
        <a href="https://www.facebook.com/people/DuCija-obrt-za-najam-%C5%A1atora-i-opreme-za-proslave/61580216025421/" aria-label="Facebook" target="_blank" rel="noopener">f</a>
        <a href="https://www.instagram.com/oprema_za_proslave_ducija?igsh=NHY1M2Z1ZWZvbWtz" aria-label="Instagram" target="_blank" rel="noopener">ig</a>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>

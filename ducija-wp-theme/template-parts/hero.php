<?php
/**
 * Hero sections.
 *
 * @package Ducija
 */

$variant = $args['variant'] ?? 'front';

if ('front' === $variant) :
?>
    <section class="hero" id="pocetna" aria-label="Ducija naslovna sekcija">
      <img class="hero-image" src="<?php echo esc_url(ducija_asset('images/najam-satora-osijek-hero.webp')); ?>" srcset="<?php echo esc_url(ducija_asset('images/najam-satora-osijek-hero-1000.webp')); ?> 1000w, <?php echo esc_url(ducija_asset('images/najam-satora-osijek-hero.webp')); ?> 2000w" sizes="100vw" width="2000" height="1500" alt="Najam šatora Osijek - šator za proslave 4x8 metara" fetchpriority="high" decoding="async">
      <div class="hero-overlay"></div>
      <div class="container hero-content reveal">
        <p class="eyebrow light">Ducija</p>
        <div class="hero-frame">
          <h1>Najam šatora Osijek - za proslave i druženja</h1>
        </div>
        <p class="hero-summary">Tražite najam šatora u Osijeku za rođendan, krštenje, pričest, krizmu ili obiteljsko druženje? Iznajmljujemo šator dimenzija 4x8 m za privatne proslave u Osijeku i okolici, uz uključenu montažu, demontažu i rasvjetu.</p>
        <div class="hero-actions">
          <a class="btn btn-outline-light" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Zatraži ponudu</a>
          <a class="btn btn-outline-light" href="#cijena">Pogledaj cijenu i opremu</a>
        </div>
      </div>
    </section>
<?php
elseif ('najam-satora-za-proslave' === $variant) :
?>
    <section class="page-hero">
      <img src="<?php echo esc_url(ducija_asset('images/najam-satora-za-proslave.webp')); ?>" srcset="<?php echo esc_url(ducija_asset('images/najam-satora-za-proslave-900.webp')); ?> 900w, <?php echo esc_url(ducija_asset('images/najam-satora-za-proslave.webp')); ?> 1600w" sizes="100vw" width="1600" height="900" alt="Najam šatora za proslave u Osijeku" fetchpriority="high" decoding="async">
      <div class="container reveal">
        <p class="eyebrow light">Ducija</p>
        <h1>Najam šatora za proslave</h1>
        <p>Šator 4x8 m za rođendane, krštenja, pričesti, krizme, obiteljska druženja i proslave u dvorištu na području Osijeka i okolice.</p>
      </div>
    </section>
<?php
elseif ('galerija' === $variant) :
?>
    <section class="page-hero">
      <img src="<?php echo esc_url(ducija_asset('images/najam-satora-4x8.jpg')); ?>" alt="Šator 4x8 m za proslave">
      <div class="container reveal">
        <p class="eyebrow light">Galerija</p>
        <h1>Fotografije šatora i opreme</h1>
        <p>Pogledajte nekoliko postojećih fotografija šatora, postava i opreme. Galeriju ćemo nadopunjavati novim slikama s terena.</p>
      </div>
    </section>
<?php
elseif ('kontakt' === $variant) :
?>
    <section class="page-hero">
      <img src="<?php echo esc_url(ducija_asset('images/najam-satora-osijek-hero.jpeg')); ?>" alt="Najam šatora u Osijeku za proslave">
      <div class="container reveal">
        <p class="eyebrow light">Kontakt</p>
        <h1>Pošaljite upit za najam šatora</h1>
        <p>Javite nam datum, lokaciju, okvirni broj gostiju i opremu koja vam treba. Odgovorit ćemo vam s dostupnošću i prijedlogom za vašu proslavu.</p>
      </div>
    </section>
<?php endif; ?>

<?php
/**
 * Reusable static sections preserved from the original website.
 *
 * @package Ducija
 */

$page = $args['page'] ?? 'front';

if ('front' === $page) :
?>
    <section class="intro section" id="onama">
      <div class="container intro-grid">
        <div class="intro-copy reveal">
          <p class="eyebrow line-left">Zašto odabrati nas</p>
          <h2>Jednostavno rješenje za proslavu u dvorištu</h2>
          <p>Najam šatora praktičan je izbor kada želite organizirati proslavu kod kuće, u dvorištu ili na privatnom prostoru, bez potrebe za najmom velike dvorane. Šator 4x8 m pruža natkriven prostor za goste, stolove, hranu i druženje, a posebno je prikladan za obiteljske proslave i vikend okupljanja.</p>
          <p>Naš cilj je da organizacija bude jednostavna: dogovorimo termin, postavimo šator prije proslave i nakon događaja dolazimo na demontažu.</p>
          <p>Radimo na području Osijeka i okolice, uz dogovor oko termina i lokacije postavljanja. Vikend najam šatora iznosi 150 €, a uz šator se mogu dogovoriti barski stolovi, stolice, suncobrani, JBL PartyBox i beštek.</p>
        </div>
      </div>
    </section>

    <section class="featured section" id="usluge">
      <div class="container featured-heading reveal">
        <div>
          <p class="eyebrow line-left">Dimenzije i kapacitet</p>
          <h2>Šator 4x8 m – dimenzije i kapacitet</h2>
        </div>
        <p>Šator je dimenzija 4 m x 8 m, odnosno ukupne površine 32 m². Namijenjen je manjim privatnim proslavama i okupljanjima, a okvirni kapacitet ovisi o rasporedu stolova, stolica, hrane i dodatne opreme.</p>
      </div>

      <article class="service-banner reveal" id="galerija">
        <img src="<?php echo esc_url(ducija_asset('images/najam-satora-4x8.webp')); ?>" srcset="<?php echo esc_url(ducija_asset('images/najam-satora-4x8-900.webp')); ?> 900w, <?php echo esc_url(ducija_asset('images/najam-satora-4x8.webp')); ?> 1600w" sizes="100vw" width="1600" height="900" alt="Šator 4x8 m za najam u Osijeku" loading="lazy" decoding="async">
        <div class="banner-overlay"></div>
        <div class="banner-lines" aria-hidden="true"><span></span><span></span><span></span></div>
        <div class="banner-content">
          <h3>Okvirno za proslave</h3>
          <p>Dimenzije: 4 x 8 m. Površina: 32 m². Kapacitet ovisi o rasporedu sjedenja i opreme.</p>
          <a class="btn btn-outline-light" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Provjerite odgovara li vam šator</a>
        </div>
      </article>
    </section>

    <section class="equipment section" id="cijena">
      <div class="container equipment-inner reveal">
        <p class="eyebrow line-left">Cijena najma šatora u Osijeku</p>
        <h2>Vikend najam šatora 150 €</h2>
        <div class="equipment-cards">
          <article class="equipment-card">
            <h3>Vikend</h3>
            <p>Najam šatora za vikend iznosi 150 €. U cijenu je uključen šator 4x8 m.</p>
          </article>
          <article class="equipment-card active">
            <h3>Uključeno</h3>
            <p>Montaža prije proslave, demontaža nakon proslave i osnovna rasvjeta uključeni su u cijenu.</p>
          </article>
          <article class="equipment-card">
            <h3>Preko tjedna</h3>
            <p>Cijena se dogovara posebno, ovisno o terminu, lokaciji i trajanju najma.</p>
          </article>
          <article class="equipment-card">
            <h3>Osijek i okolica</h3>
            <p>Postavljanje se dogovara prema lokaciji, površini i uvjetima na terenu.</p>
          </article>
        </div>
        <div class="section-cta">
          <a class="btn btn-outline-light" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Provjeri dostupan termin</a>
        </div>
      </div>
    </section>

    <section class="section packages-section">
      <div class="container">
        <p class="eyebrow centered">Paketi za proslave</p>
        <div class="package-grid reveal">
          <article class="package-card"><p class="package-price">180 €</p><h2>Dvorišna proslava</h2><p>Uključuje šator 4x8 m, 4 stola i klupe.</p></article>
          <article class="package-card active"><p class="package-price">190 €</p><h2>Mala proslava</h2><p>Uključuje šator 4x8 m, 3 stola s klupama i zvučnik. Idealno za 20–25 osoba.</p></article>
          <article class="package-card"><p class="package-price">250 €</p><h2>Party paket</h2><p>Uključuje šator 4x8 m, 4 stola s klupama, 2 barska stola, hladnjak i zvučnik. Idealno za 30–40 osoba.</p></article>
          <article class="package-card"><p class="package-price">450 €</p><h2>Event paket</h2><p>Uključuje dva šatora, 10 stolova s klupama, 5 barskih stolova, 2 suncobrana i hladnjak.</p></article>
        </div>
        <div class="section-cta package-cta"><a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit za paket</a></div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <p class="eyebrow centered">Pojedinačni najam opreme</p>
        <div class="single-rental-grid reveal">
          <article class="single-rental-item"><h2>Šator 4x8 m</h2><p>150 €</p></article>
          <article class="single-rental-item"><h2>Stol + 2 klupe</h2><p>12 €</p></article>
          <article class="single-rental-item"><h2>Barski stol</h2><p>10 €</p></article>
          <article class="single-rental-item"><h2>Suncobran</h2><p>12 €</p></article>
          <article class="single-rental-item"><h2>Hladnjak</h2><p>50 €</p></article>
          <article class="single-rental-item"><h2>JBL PartyBox</h2><p>40 €</p></article>
        </div>
        <div class="section-cta package-cta"><a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit za opremu</a></div>
      </div>
    </section>

    <section class="testimonials section">
      <div class="container">
        <p class="eyebrow centered">Što je uključeno u najam šatora?</p>
        <div class="info-grid reveal">
          <article class="info-card"><p>U osnovnu cijenu vikend najma uključeni su šator 4x8 m, montaža prije proslave i demontaža nakon proslave.</p><strong>ŠATOR I POSTAVLJANJE</strong></article>
          <article class="info-card active"><p>Osnovna rasvjeta uključena je u cijenu najma, uz dogovor oko termina postavljanja i uvjeta na lokaciji.</p><strong>RASVJETA UKLJUČENA</strong></article>
          <article class="info-card"><p>Prije rezervacije provjeravamo lokaciju i uvjete postavljanja, posebno ako se šator postavlja u dvorištu, na travi ili drugoj površini.</p><strong>DOGOVOR OKO LOKACIJE</strong></article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container featured-heading reveal">
        <div><p class="eyebrow line-left">Najam opreme za proslave Osijek</p><h2>Dodatna oprema za proslave</h2></div>
        <p>Osim šatora, po dogovoru je moguće osigurati i dodatnu opremu za proslavu: barske stolove, stolice, suncobrane, JBL PartyBox i beštek. Dostupnost i cijena dodatne opreme dogovaraju se ovisno o terminu, količini i potrebama proslave.</p>
      </div>
    </section>

    <section class="location section">
      <div class="location-image reveal">
        <img src="<?php echo esc_url(ducija_asset('images/najam-satora-za-svadbe.webp')); ?>" srcset="<?php echo esc_url(ducija_asset('images/najam-satora-za-svadbe-800.webp')); ?> 800w, <?php echo esc_url(ducija_asset('images/najam-satora-za-svadbe.webp')); ?> 1600w" sizes="(max-width: 920px) 100vw, 42vw" width="1600" height="1600" alt="Najam šatora za svadbe i proslave u Osijeku" loading="lazy" decoding="async">
      </div>
      <div class="location-panel reveal">
        <p class="eyebrow line-left">Za koje događaje?</p>
        <h2>Šator za proslavu u Osijeku</h2>
        <p>Šator 4x8 m najčešće se koristi za privatne proslave i obiteljska okupljanja. Idealan je kada želite proslavu organizirati u vlastitom prostoru, ali gostima ipak osigurati natkriven i uređen prostor.</p>
        <div class="location-columns">
          <div><h3>Prikladno za</h3><p>Rođendane, krštenja, pričesti, krizme, obiteljska druženja, privatne fešte i proslave u dvorištu.</p></div>
          <div><h3>Okvirno</h3><p>Za veće svadbe i veće događaje potreban je veći šator, ali za proslave u dvorištu šator 4x8 m može biti vrlo praktično rješenje.</p></div>
        </div>
        <a class="btn btn-outline-light" href="<?php echo esc_url(ducija_page_url('najam-satora-za-proslave')); ?>">Najam šatora za proslave</a>
      </div>
    </section>

    <section class="section">
      <div class="container page-layout reveal">
        <div><p class="eyebrow line-left">Kako ide najam</p><h2>Kako rezervirati šator?</h2></div>
        <div class="detail-list">
          <p><strong>1. Pošaljite upit</strong><br>Pošaljite datum proslave, lokaciju, vrstu događaja i okvirni broj gostiju.</p>
          <p><strong>2. Provjerimo dostupnost</strong><br>Javljamo vam je li šator dostupan za željeni termin i možemo li ga postaviti na vašoj lokaciji.</p>
          <p><strong>3. Dogovorimo detalje</strong><br>Dogovaramo vrijeme montaže, dodatnu opremu ako je potrebna i sve važne detalje oko prostora.</p>
          <p><strong>4. Postavljamo i demontiramo šator</strong><br>Šator postavljamo prije proslave, a nakon događaja dolazimo na demontažu prema dogovoru.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <p class="eyebrow centered">Česta pitanja o najmu šatora u Osijeku</p>
        <div class="faq-list reveal">
          <details open><summary>Koliko košta najam šatora za vikend?</summary><p>Cijena najma šatora za vikend iznosi 150 €. U cijenu su uključeni šator 4x8 m, montaža, demontaža i rasvjeta.</p></details>
          <details><summary>Kolika je cijena najma preko tjedna?</summary><p>Cijena najma preko tjedna dogovara se posebno, ovisno o terminu, lokaciji, trajanju najma i dodatnim zahtjevima.</p></details>
          <details><summary>Je li montaža uključena u cijenu?</summary><p>Da, montaža i demontaža uključene su u cijenu vikend najma.</p></details>
          <details><summary>Je li rasvjeta uključena?</summary><p>Da, osnovna rasvjeta uključena je u cijenu najma šatora.</p></details>
          <details><summary>Koje su dimenzije šatora?</summary><p>Šator je dimenzija 4x8 m, odnosno ima površinu od 32 m².</p></details>
          <details><summary>Za koje proslave je šator prikladan?</summary><p>Šator je prikladan za rođendane, krštenja, pričesti, krizme, obiteljska okupljanja, privatne fešte i proslave u dvorištu.</p></details>
          <details><summary>Radite li najam samo u Osijeku?</summary><p>Primarno radimo na području Osijeka i okolice, ali za druge lokacije moguć je dogovor.</p></details>
          <details><summary>Može li se uz šator iznajmiti dodatna oprema?</summary><p>Da, po dogovoru se nude barski stolovi, stolice, suncobrani, JBL PartyBox i beštek.</p></details>
          <details><summary>Koliko ranije treba rezervirati šator?</summary><p>Preporučuje se rezervirati što ranije, osobito za vikende i termine u sezoni proslava.</p></details>
          <details><summary>Može li se šator postaviti u dvorištu?</summary><p>Da, šator se može postaviti u dvorištu ako postoji dovoljno prostora i ako su uvjeti postavljanja prikladni. Prije potvrde najma potrebno je provjeriti lokaciju i površinu.</p></details>
          <details><summary>Štiti li šator od kiše?</summary><p>Šator može pružiti zaštitu od sunca i slabije kiše, ali u slučaju jačeg vjetra, nevremena ili nepovoljnih vremenskih uvjeta sve se dogovara s naglaskom na sigurnost.</p></details>
        </div>
      </div>
    </section>

    <section class="section testimonial-slider-section">
      <div class="container">
        <p class="eyebrow centered">Iskustva korisnika</p>
        <div class="testimonial-slider reveal" data-testimonial-slider>
          <div class="testimonial-track" data-testimonial-track>
            <article class="testimonial-card"><div class="stars" aria-label="5 zvjezdica">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>Šator nam je bio taman za rođendan u dvorištu. Sve je bilo postavljeno na vrijeme, a dogovor oko preuzimanja je prošao bez kompliciranja.</p><strong>ANA, OSIJEK</strong></article>
            <article class="testimonial-card"><div class="stars" aria-label="5 zvjezdica">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>Uzeli smo paket sa stolovima i zvučnikom za obiteljsko druženje. Bilo je jednostavno, uredno i dovoljno prostora za sve goste.</p><strong>MARKO, ČEPIN</strong></article>
            <article class="testimonial-card"><div class="stars" aria-label="5 zvjezdica">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>Najviše nam je značilo što su montaža i demontaža bile riješene. Mi smo samo pripremili dvorište i mogli se baviti proslavom.</p><strong>IVANA, TENJA</strong></article>
            <article class="testimonial-card"><div class="stars" aria-label="5 zvjezdica">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>Dogovorili smo dodatne klupe i barske stolove. Sve je bilo kako je rečeno, bez iznenađenja oko cijene i termina.</p><strong>TOMISLAV, VIŠNJEVAC</strong></article>
            <article class="testimonial-card"><div class="stars" aria-label="5 zvjezdica">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>Za krštenje nam je trebao natkriven prostor u dvorištu. Šator je izgledao uredno, a rasvjeta je navečer baš dobro došla.</p><strong>MARIJA, BILJE</strong></article>
          </div>
          <div class="testimonial-controls" aria-label="Kontrole za iskustva korisnika">
            <button type="button" data-testimonial-prev aria-label="Prethodna iskustva">&lsaquo;</button>
            <button type="button" data-testimonial-next aria-label="Sljedeća iskustva">&rsaquo;</button>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container contact-layout reveal">
        <article class="contact-card dark">
          <p class="eyebrow line-left">Kontakt</p>
          <h2>Zatražite ponudu za najam šatora u Osijeku</h2>
          <p>Planirate manju proslavu u Osijeku ili okolici? Pošaljite nam datum, lokaciju, broj gostiju i informaciju trebate li dodatnu opremu. Javit ćemo vam dostupnost šatora i sve detalje oko najma.</p>
          <div class="contact-list"><p><strong>Telefon</strong><br><a href="tel:0918949221">091 894 9221</a></p><p><strong>Napomena</strong><br>Termini za vikende često se popunjavaju unaprijed. Ako već znate datum proslave, pošaljite upit na vrijeme.</p></div>
        </article>
        <article class="contact-card">
          <p class="eyebrow line-left">Pošalji upit</p>
          <h2>Osnovne informacije</h2>
          <form class="quote-form" action="mailto:matesurac@yahoo.com" method="post" enctype="text/plain">
            <label>Ime<input type="text" name="ime"></label>
            <label>Telefon<input type="tel" name="telefon"></label>
            <label>Datum i lokacija<input type="text" name="datum_lokacija"></label>
            <label>Okvirni broj gostiju<input type="text" name="broj_gostiju"></label>
            <label>Poruka<textarea name="poruka" rows="3"></textarea></label>
            <div class="hero-actions"><button class="btn btn-primary" type="submit">Pošalji upit</button><a class="btn btn-primary" href="tel:0918949221">Nazovi nas</a></div>
          </form>
        </article>
      </div>
    </section>
<?php
elseif ('najam-satora-za-proslave' === $page) :
?>
    <section class="section">
      <div class="container page-layout reveal">
        <div><p class="eyebrow line-left">Proslave kod kuće</p><h2>Praktičan šator za privatne proslave</h2></div>
        <div><p>Najam šatora za proslave dobar je izbor kada želite organizirati druženje u vlastitom dvorištu ili na privatnoj lokaciji, bez najma velike dvorane. Šator 4x8 m pruža natkriven prostor za stolove, klupe, hranu i goste.</p><p>Šator je najprikladniji za proslave i okupljanja. Kapacitet ovisi o rasporedu stolova, klupa, dodatne opreme i načinu druženja, pa je najbolje poslati okvirni broj gostiju prije rezervacije.</p></div>
      </div>
    </section>
    <section class="featured section">
      <div class="container featured-heading reveal"><div><p class="eyebrow line-left">Namjena i raspored</p><h2>Za koje proslave je šator prikladan?</h2></div><p>Šator 4x8 m najčešće se koristi za rođendane, krštenja, pričesti, krizme, obiteljska druženja, fešte u dvorištu i opuštena vikend okupljanja. Za veće svadbe i veće događaje potreban je veći šator ili drugačiji prostor.</p></div>
      <article class="service-banner reveal"><img src="<?php echo esc_url(ducija_asset('images/najam-satora-za-proslave.webp')); ?>" srcset="<?php echo esc_url(ducija_asset('images/najam-satora-za-proslave-900.webp')); ?> 900w, <?php echo esc_url(ducija_asset('images/najam-satora-za-proslave.webp')); ?> 1600w" sizes="100vw" width="1600" height="900" alt="Šator za proslave u dvorištu" loading="lazy" decoding="async"><div class="banner-overlay"></div><div class="banner-lines" aria-hidden="true"><span></span><span></span><span></span></div><div class="banner-content"><h3>Šator 4x8 m za druženja</h3><p>Praktično rješenje za proslave u dvorištu, uz mogućnost dogovora stolova, klupa, zvučnika i druge opreme.</p><a class="btn btn-outline-light" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Provjerite termin</a></div></article>
    </section>
    <section class="section packages-section"><div class="container"><p class="eyebrow centered">Paketi za proslave</p><div class="package-grid reveal"><article class="package-card"><p class="package-price">180 €</p><h2>Dvorišna proslava</h2><p>Uključuje šator 4x8 m, 4 stola i klupe.</p></article><article class="package-card active"><p class="package-price">190 €</p><h2>Mala proslava</h2><p>Uključuje šator 4x8 m, 3 stola s klupama i zvučnik. Idealno za 20–25 osoba.</p></article><article class="package-card"><p class="package-price">250 €</p><h2>Party paket</h2><p>Uključuje šator 4x8 m, 4 stola s klupama, 2 barska stola, hladnjak i zvučnik. Idealno za 30–40 osoba.</p></article><article class="package-card"><p class="package-price">450 €</p><h2>Event paket</h2><p>Uključuje dva šatora, 10 stolova s klupama, 5 barskih stolova, 2 suncobrana i hladnjak.</p></article></div><div class="section-cta package-cta"><a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit za paket</a></div></div></section>
    <section class="section"><div class="container"><p class="eyebrow centered">Pojedinačni najam opreme</p><div class="single-rental-grid reveal"><article class="single-rental-item"><h2>Šator 4x8 m</h2><p>150 €</p></article><article class="single-rental-item"><h2>Stol + 2 klupe</h2><p>12 €</p></article><article class="single-rental-item"><h2>Barski stol</h2><p>10 €</p></article><article class="single-rental-item"><h2>Suncobran</h2><p>12 €</p></article><article class="single-rental-item"><h2>Hladnjak</h2><p>50 €</p></article><article class="single-rental-item"><h2>JBL PartyBox</h2><p>40 €</p></article></div><div class="section-cta package-cta"><a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit za opremu</a></div></div></section>
    <section class="testimonials section"><div class="container"><p class="eyebrow centered">Što je važno prije rezervacije?</p><div class="info-grid reveal"><article class="info-card"><p>Pošaljite datum proslave, lokaciju i okvirni broj gostiju kako bismo provjerili dostupnost i može li se šator postaviti na toj površini.</p><strong>DATUM I LOKACIJA</strong></article><article class="info-card active"><p>Raspored stolova, klupa i dodatne opreme utječe na broj osoba koje mogu ugodno stati pod šator.</p><strong>RASPORED GOSTIJU</strong></article><article class="info-card"><p>Dodatna oprema dogovara se prema terminu, količini i potrebama proslave. Najbolje ju je navesti odmah u upitu.</p><strong>OPREMA PO DOGOVORU</strong></article></div></div></section>
    <section class="section"><div class="container page-layout reveal"><div><p class="eyebrow line-left">Kako ide najam?</p><h2>Jednostavan dogovor za vašu proslavu</h2></div><div><div class="detail-list"><p><strong>1. Pošaljite upit</strong><br>Navedite datum, lokaciju, vrstu proslave i okvirni broj gostiju.</p><p><strong>2. Provjerimo dostupnost</strong><br>Javljamo vam je li termin slobodan i što bi bilo najpraktičnije za vašu proslavu.</p><p><strong>3. Dogovorimo opremu</strong><br>Po potrebi dogovaramo stolove, klupe, barske stolove, hladnjak, suncobrane ili JBL PartyBox.</p><p><strong>4. Preuzimanje ili postavljanje po dogovoru</strong><br>Detalje oko termina, lokacije i opreme dogovaramo prije potvrde najma.</p></div></div></div></section>
    <section class="section"><div class="container"><p class="eyebrow centered">Česta pitanja o najmu šatora za proslave</p><div class="faq-list reveal"><details open><summary>Za koje proslave je šator 4x8 m prikladan?</summary><p>Najčešće za rođendane, krštenja, pričesti, krizme, obiteljska druženja, fešte i opuštena okupljanja u dvorištu.</p></details><details><summary>Koliko osoba može stati pod šator?</summary><p>Okvirni kapacitet ovisi o rasporedu stolova, klupa i dodatne opreme. Ako pošaljete broj gostiju, možemo pomoći s procjenom.</p></details><details><summary>Može li se iznajmiti dodatna oprema?</summary><p>Da, po dogovoru se mogu iznajmiti stolovi s klupama, barski stolovi, suncobrani, hladnjak i JBL PartyBox.</p></details><details><summary>Radite li samo u Osijeku?</summary><p>Primarno radimo na području Osijeka i okolice. Za udaljenije lokacije moguć je dogovor, ovisno o terminu i udaljenosti.</p></details></div></div></section>
    <section class="section"><div class="container contact-layout reveal"><article class="contact-card dark"><p class="eyebrow line-left">Kontakt</p><h2>Zatražite ponudu za najam šatora za proslave</h2><p>Pošaljite datum, lokaciju, okvirni broj gostiju i opremu koja vam treba. Javit ćemo vam dostupnost i prijedlog najjednostavnijeg rješenja.</p><div class="contact-list"><p><strong>Telefon</strong><br><a href="tel:0918949221">091 894 9221</a></p><p><strong>Područje rada</strong><br>Osijek i okolica</p></div></article><article class="contact-card"><p class="eyebrow line-left">Pošalji upit</p><h2>Brzi upit</h2><form class="quote-form" action="mailto:matesurac@yahoo.com" method="post" enctype="text/plain"><label>Ime<input type="text" name="ime"></label><label>Telefon<input type="tel" name="telefon"></label><label>Datum i lokacija<input type="text" name="datum_lokacija"></label><label>Okvirni broj gostiju<input type="text" name="broj_gostiju"></label><label>Poruka<textarea name="poruka" rows="3"></textarea></label><div class="hero-actions"><button class="btn btn-primary" type="submit">Pošalji upit</button><a class="btn btn-primary" href="tel:0918949221">Nazovi nas</a></div></form></article></div></section>
<?php
elseif ('galerija' === $page) :
    $gallery_images = array(
        array('najam-satora-osijek-hero.jpeg', 'Postavljen šator za proslavu u dvorištu', 'large'),
        array('najam-satora-4x8.jpg', 'Šator 4x8 m izvana', ''),
        array('najam-satora-4x8-side.jpg', 'Bočni pogled na šator 4x8 m', ''),
        array('najam-satora-za-proslave.jpg', 'Šator za proslave u Osijeku', ''),
        array('najam-satora-za-svadbe.jpg', 'Uređen šator za manju proslavu', 'large'),
        array('najam-satora-osijek-interior.jpeg', 'Unutrašnjost šatora s postavljenim stolovima i dekoracijom', ''),
        array('sator-za-svadbe-uredjen.jpg', 'Uređen šator za svadbu i proslave', ''),
        array('sator-za-proslave-uredjen.jpg', 'Uređen šator za privatnu proslavu', 'large'),
        array('sator-unutra-balon-dekor.jpg', 'Šator s balonima i dekoracijom za proslavu', ''),
        array('sator-unutra-dekoracija-ruze.jpg', 'Dekoracija stolova s ružama u šatoru', ''),
        array('sator-unutra-postava.jpg', 'Postava stolova i klupa u šatoru', ''),
        array('sator-unutra-postavljeno-stolovi.jpg', 'Postavljeni stolovi u unutrašnjosti šatora', 'large'),
        array('sator-unutra-stolovi-dekor.jpg', 'Stolovi i dekoracija u šatoru za proslavu', ''),
        array('sator-plavi-ukras-unutra.jpg', 'Plavi ukrasi u unutrašnjosti šatora', ''),
        array('sator-rodjendanska-postava.jpg', 'Rođendanska postava u šatoru', ''),
        array('sator-rodjendanska-dekoracija.jpg', 'Rođendanska dekoracija u šatoru', 'large'),
        array('sator-postavljena-tabela.jpg', 'Postavljena tabla za proslavu', ''),
        array('sator-vanjska-terasa.jpg', 'Vanjski prostor s natkrivenim šatorom i suncobranima', ''),
        array('sator-vanjski-pogled.jpg', 'Vanjski pogled na postavljen šator', ''),
        array('sator-vanjski-bocni-pogled.jpg', 'Bočni vanjski pogled na postavljen šator', ''),
    );
?>
    <section class="section"><div class="container"><p class="eyebrow centered">Ducija galerija</p><div class="gallery-grid reveal">
      <?php foreach ($gallery_images as $image) : ?>
        <article class="gallery-item <?php echo esc_attr($image[2]); ?>"><img src="<?php echo esc_url(ducija_asset('images/' . $image[0])); ?>" alt="<?php echo esc_attr($image[1]); ?>"></article>
      <?php endforeach; ?>
    </div></div></section>
    <section class="section"><div class="container page-layout reveal"><div><p class="eyebrow line-left">Treba vam šator?</p><h2>Pošaljite datum i lokaciju proslave</h2></div><div><p>Ako vam se postav sviđa, javite nam datum proslave, lokaciju i okvirni broj gostiju. Prema tome možemo provjeriti dostupnost šatora, opreme i dogovoriti najpraktičnije rješenje.</p><a class="btn btn-primary" href="<?php echo esc_url(ducija_page_url('kontakt')); ?>">Pošalji upit</a></div></div></section>
<?php
elseif ('kontakt' === $page) :
?>
    <section class="section"><div class="container contact-layout reveal"><article class="contact-card dark"><p class="eyebrow line-left">Obrt Ducija</p><h2>Najam šatora Osijek i okolica</h2><p>Ducija je obrt iz Antunovca za najam šatora 4x8 m i dodatne opreme za rođendane, krštenja, pričesti, krizme, obiteljska druženja i proslave u dvorištu.</p><div class="contact-list"><p><strong>Telefon</strong><br><a href="tel:0918949221">091 894 9221</a></p><p><strong>Email</strong><br><a href="mailto:matesurac@yahoo.com">matesurac@yahoo.com</a></p><p><strong>Adresa</strong><br>Mirna ulica 26, Antunovac</p><p><strong>Područje rada</strong><br>Osijek i okolica</p></div></article><article class="contact-card"><p class="eyebrow line-left">Brzi upit</p><h2>Što nam poslati?</h2><p>Najbrže ćemo provjeriti termin ako pošaljete datum proslave, lokaciju, okvirni broj gostiju i trebate li samo šator ili i dodatnu opremu.</p><form class="quote-form" action="mailto:matesurac@yahoo.com" method="post" enctype="text/plain"><label>Ime<input type="text" name="ime"></label><label>Telefon<input type="tel" name="telefon"></label><label>Datum i lokacija<input type="text" name="datum_lokacija"></label><label>Poruka<textarea name="poruka" rows="4"></textarea></label><div class="hero-actions"><button class="btn btn-primary" type="submit">Pošalji upit</button><a class="btn btn-primary" href="tel:0918949221">Nazovi nas</a></div></form></article></div></section>
    <section class="section"><div class="container info-grid reveal"><article class="info-card"><p>Vikend termini se često dogovaraju unaprijed, posebno u sezoni proslava. Ako već znate datum, pošaljite upit što ranije.</p><strong>TERMIN</strong></article><article class="info-card active"><p>Prije potvrde najma dobro je provjeriti površinu i prostor za postavljanje šatora, osobito u dvorištu ili na travi.</p><strong>LOKACIJA</strong></article><article class="info-card"><p>Uz šator se po dogovoru mogu dodati stolovi, klupe, barski stolovi, suncobrani, hladnjak i JBL PartyBox.</p><strong>OPREMA</strong></article></div></section>
<?php endif; ?>

<?php
/**
 * Ducija theme setup and assets.
 *
 * @package Ducija
 */

if (!defined('ABSPATH')) {
    exit;
}

function ducija_setup() {
    load_theme_textdomain('ducija', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/styles.css');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ducija'),
    ));
}
add_action('after_setup_theme', 'ducija_setup');

function ducija_asset($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

class Ducija_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
    public function end_el(&$output, $item, $depth = 0, $args = null) {}

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $atts = array(
            'href' => !empty($item->url) ? $item->url : '',
        );

        if (!empty($item->target)) {
            $atts['target'] = $item->target;
        }
        if (!empty($item->xfn)) {
            $atts['rel'] = $item->xfn;
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if ('' !== $value) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $output .= '<a' . $attributes . '>' . esc_html($item->title) . '</a>';
    }
}

function ducija_enqueue_assets() {
    wp_enqueue_style(
        'ducija-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'ducija-main',
        ducija_asset('css/styles.css'),
        array('ducija-fonts'),
        '1.0.0'
    );

    wp_enqueue_script(
        'ducija-main',
        ducija_asset('js/script.js'),
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'ducija_enqueue_assets');

function ducija_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'ducija_resource_hints', 10, 2);

function ducija_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'ducija'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'ducija'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widgets', 'ducija'),
        'id'            => 'footer-widgets',
        'description'   => __('Optional footer widgets.', 'ducija'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'ducija_widgets_init');

function ducija_page_url($slug) {
    if ('home' === $slug) {
        return home_url('/');
    }

    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page);
    }

    return home_url('/' . trim($slug, '/') . '/');
}

function ducija_primary_menu_fallback() {
    ?>
    <a href="<?php echo esc_url(ducija_page_url('home')); ?>"><?php esc_html_e('Početna', 'ducija'); ?></a>
    <a href="<?php echo esc_url(ducija_page_url('najam-satora-za-proslave')); ?>"><?php esc_html_e('Najam šatora za proslave', 'ducija'); ?></a>
    <a href="<?php echo esc_url(ducija_page_url('galerija')); ?>"><?php esc_html_e('Galerija', 'ducija'); ?></a>
    <a href="<?php echo esc_url(ducija_page_url('kontakt')); ?>"><?php esc_html_e('Kontakt', 'ducija'); ?></a>
    <?php
}

function ducija_meta_data() {
    if (is_front_page()) {
        return array(
            'description' => 'Najam šatora 4x8 m u Osijeku i okolici za rođendane, krštenja, pričesti, krizme i proslave. Vikend najam 150 €, montaža i rasvjeta uključeni.',
            'keywords'    => 'najam šatora Osijek, najam šatora Osijek i okolica, najam šatora 4x8 Osijek, šator za proslavu Osijek, najam šatora za vikend Osijek, najam opreme za proslave Osijek',
            'og_title'    => 'Najam šatora Osijek - Šator 4x8 za proslave',
            'og_image'    => ducija_asset('images/najam-satora-osijek-hero.jpeg'),
        );
    }

    $slug = get_post_field('post_name', get_queried_object_id());
    $items = array(
        'najam-satora-za-proslave' => array(
            'description' => 'Najam šatora 4x8 m i opreme za proslave u Osijeku i okolici. Paketi za dvorišne proslave, pojedinačni najam opreme i dogovor oko termina.',
            'keywords'    => 'najam šatora za proslave, šator za proslave Osijek, najam šatora za rođendan, najam šatora za krštenje, najam šatora za pričest, najam šatora za krizmu',
            'og_title'    => 'Najam šatora za proslave - Ducija Osijek',
            'og_image'    => ducija_asset('images/najam-satora-za-proslave.jpg'),
        ),
        'galerija' => array(
            'description' => 'Pogledajte galeriju šatora 4x8 m, opreme i postava za rođendane, krštenja, pričesti i proslave u Osijeku i okolici.',
            'keywords'    => '',
            'og_title'    => 'Galerija šatora i opreme - Ducija Osijek',
            'og_image'    => ducija_asset('images/najam-satora-osijek-hero.jpeg'),
        ),
        'kontakt' => array(
            'description' => 'Kontaktirajte Duciju za najam šatora 4x8 m i opreme za proslave u Osijeku i okolici. Pošaljite datum, lokaciju i okvirni broj gostiju.',
            'keywords'    => '',
            'og_title'    => 'Kontakt za najam šatora - Ducija Osijek',
            'og_image'    => ducija_asset('images/najam-satora-osijek-hero.jpeg'),
        ),
    );

    if (isset($items[$slug])) {
        return $items[$slug];
    }

    return array(
        'description' => get_bloginfo('description'),
        'keywords'    => '',
        'og_title'    => wp_get_document_title(),
        'og_image'    => ducija_asset('images/najam-satora-osijek-hero.jpeg'),
    );
}

function ducija_output_meta() {
    $meta = ducija_meta_data();
    if (!empty($meta['description'])) {
        echo '<meta name="description" content="' . esc_attr($meta['description']) . '">' . "\n";
    }
    if (!empty($meta['keywords'])) {
        echo '<meta name="keywords" content="' . esc_attr($meta['keywords']) . '">' . "\n";
    }
    echo '<meta property="og:title" content="' . esc_attr($meta['og_title']) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($meta['description']) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($meta['og_image']) . '">' . "\n";
}
add_action('wp_head', 'ducija_output_meta', 1);

function ducija_document_title($title) {
    if (is_front_page()) {
        return 'Najam šatora Osijek - Šator 4x8 za proslave';
    }

    if (is_page('najam-satora-za-proslave')) {
        return 'Najam šatora za proslave - Ducija Osijek';
    }

    if (is_page('galerija')) {
        return 'Galerija šatora i opreme - Ducija Osijek';
    }

    if (is_page('kontakt')) {
        return 'Kontakt za najam šatora - Ducija Osijek';
    }

    return $title;
}
add_filter('pre_get_document_title', 'ducija_document_title');

function ducija_preload_hero_image() {
    if (is_front_page()) {
        echo '<link rel="preload" as="image" href="' . esc_url(ducija_asset('images/najam-satora-osijek-hero-1000.webp')) . '" imagesrcset="' . esc_url(ducija_asset('images/najam-satora-osijek-hero-1000.webp')) . ' 1000w, ' . esc_url(ducija_asset('images/najam-satora-osijek-hero.webp')) . ' 2000w" imagesizes="100vw" type="image/webp">' . "\n";
    } elseif (is_page('najam-satora-za-proslave')) {
        echo '<link rel="preload" as="image" href="' . esc_url(ducija_asset('images/najam-satora-za-proslave-900.webp')) . '" imagesrcset="' . esc_url(ducija_asset('images/najam-satora-za-proslave-900.webp')) . ' 900w, ' . esc_url(ducija_asset('images/najam-satora-za-proslave.webp')) . ' 1600w" imagesizes="100vw" type="image/webp">' . "\n";
    }
}
add_action('wp_head', 'ducija_preload_hero_image', 2);

function ducija_schema_json() {
    if (!is_front_page()) {
        return;
    }
    ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "LocalBusiness",
          "name": "Ducija",
          "description": "Najam šatora Osijek - šator 4x8 m za proslave u Osijeku i okolici.",
          "telephone": "091 894 9221",
          "email": "matesurac@yahoo.com",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Mirna ulica 26",
            "addressLocality": "Antunovac",
            "addressCountry": "HR"
          },
          "areaServed": "Osijek i okolica",
          "priceRange": "150 EUR vikend",
          "url": "<?php echo esc_url(home_url('/')); ?>"
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Koliko košta najam šatora za vikend?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cijena najma šatora za vikend iznosi 150 €. U cijenu su uključeni šator 4x8 m, montaža, demontaža i rasvjeta."
              }
            },
            {
              "@type": "Question",
              "name": "Je li montaža uključena u cijenu?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Da, montaža i demontaža uključene su u cijenu vikend najma."
              }
            },
            {
              "@type": "Question",
              "name": "Radite li najam samo u Osijeku?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Primarno radimo na području Osijeka i okolice, ali za druge lokacije moguć je dogovor."
              }
            }
          ]
        }
      ]
    }
    </script>
    <?php
}
add_action('wp_head', 'ducija_schema_json', 20);

function ducija_create_default_pages() {
    $pages = array(
        'pocetna' => array(
            'title'    => 'Početna',
            'template' => '',
        ),
        'najam-satora-za-proslave' => array(
            'title'    => 'Najam šatora za proslave',
            'template' => '',
        ),
        'galerija' => array(
            'title'    => 'Galerija',
            'template' => '',
        ),
        'kontakt' => array(
            'title'    => 'Kontakt',
            'template' => '',
        ),
    );

    foreach ($pages as $slug => $page) {
        $existing = get_page_by_path($slug);
        if ($existing) {
            continue;
        }

        $page_id = wp_insert_post(array(
            'post_title'   => $page['title'],
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));

        if (!is_wp_error($page_id) && 'pocetna' === $slug) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $page_id);
        }
    }

    $front_page = get_page_by_path('pocetna');
    if ($front_page && 'page' !== get_option('show_on_front')) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page->ID);
    }

    $menu_name = 'Ducija Primary Menu';
    $menu = wp_get_nav_menu_object($menu_name);
    if (!$menu) {
        $menu_id = wp_create_nav_menu($menu_name);
        $menu_items = array(
            array('title' => 'Početna', 'url' => home_url('/')),
            array('title' => 'Najam šatora za proslave', 'url' => ducija_page_url('najam-satora-za-proslave')),
            array('title' => 'Galerija', 'url' => ducija_page_url('galerija')),
            array('title' => 'Kontakt', 'url' => ducija_page_url('kontakt')),
        );

        foreach ($menu_items as $item) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title'  => $item['title'],
                'menu-item-url'    => $item['url'],
                'menu-item-status' => 'publish',
            ));
        }

        $locations = get_theme_mod('nav_menu_locations', array());
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('after_switch_theme', 'ducija_create_default_pages');

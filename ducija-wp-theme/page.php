<?php
/**
 * Page template.
 *
 * @package Ducija
 */

get_header();
$slug = get_post_field('post_name', get_queried_object_id());
?>
  <main>
    <?php if (in_array($slug, array('najam-satora-za-proslave', 'galerija', 'kontakt'), true)) : ?>
      <?php get_template_part('template-parts/hero', null, array('variant' => $slug)); ?>
      <?php get_template_part('template-parts/sections', null, array('page' => $slug)); ?>
    <?php else : ?>
      <section class="section">
        <div class="container page-layout reveal">
          <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
        </div>
      </section>
    <?php endif; ?>
  </main>
<?php
get_footer();

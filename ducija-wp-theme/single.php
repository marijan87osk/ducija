<?php
/**
 * Single post template.
 *
 * @package Ducija
 */

get_header();
?>
  <main>
    <section class="section">
      <div class="container page-layout reveal">
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p class="eyebrow line-left"><?php echo esc_html(get_the_date()); ?></p>
            <h1><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
              <div class="service-banner">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>
            <?php the_content(); ?>
          </article>
        <?php endwhile; ?>
        <?php get_sidebar(); ?>
      </div>
    </section>
  </main>
<?php
get_footer();

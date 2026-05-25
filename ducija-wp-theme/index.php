<?php
/**
 * Main fallback template.
 *
 * @package Ducija
 */

get_header();
?>
  <main>
    <section class="section">
      <div class="container">
        <?php if (have_posts()) : ?>
          <div class="package-grid reveal">
            <?php while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('package-card'); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
              </article>
            <?php endwhile; ?>
          </div>
          <?php the_posts_pagination(); ?>
        <?php else : ?>
          <p><?php esc_html_e('Nema objava za prikaz.', 'ducija'); ?></p>
        <?php endif; ?>
      </div>
    </section>
  </main>
<?php
get_footer();

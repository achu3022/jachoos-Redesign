<?php
/**
 * Single Post Template
 *
 * @package JachOOs
 */

get_header(); ?>

<main id="main-content" class="site-main generic-page-wrap">
  <div class="container section">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('entry-article'); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta">
          <span><?php echo get_the_date(); ?></span> • <span><?php the_author(); ?></span>
        </div>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>


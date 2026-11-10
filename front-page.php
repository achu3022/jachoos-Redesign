<?php
/**
 * The template for displaying the custom JachOOs Homepage
 *
 * @package JachOOs
 * @version 2.0.0
 */

get_header(); ?>

<main id="main-content" class="site-main">
  <?php get_template_part('template-parts/hero'); ?>
  <?php get_template_part('template-parts/domain-search'); ?>
  <?php get_template_part('template-parts/services'); ?>
  <?php get_template_part('template-parts/why-jachoos'); ?>
  <?php get_template_part('template-parts/tech-ecosystem'); ?>
  <?php get_template_part('template-parts/testimonials'); ?>
  <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer(); ?>


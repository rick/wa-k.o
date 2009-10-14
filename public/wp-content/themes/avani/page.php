<?php
/**
 * @package WordPress
 * @subpackage Avani_Theme
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php sitemap_area(); ?>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

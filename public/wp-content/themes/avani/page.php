<?php
/**
 * @package WordPress
 * @subpackage Avani_Theme
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php sitemap_area($post); ?>
  <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php endwhile; endif; ?>



<?php if($post->post_title == 'Site Map') {?>
<ul role="navigation">
	<?php wp_list_pages('title_li='); ?>
</ul>
<?php } ?>

<?php get_search_form(); ?>

<?php get_footer(); ?>

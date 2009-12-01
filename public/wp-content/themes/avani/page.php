<?php
/**
 * @package WordPress
 * @subpackage Avani_Theme
 */

get_header();
sitemap_area($post);

if (have_posts()) {
  while (have_posts()) : the_post(); ?>
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>');
    if ($post->post_title == 'Site Map') { ?>
    <ul role="navigation">
    	<?php wp_list_pages('title_li='); ?>
    </ul>
    <?php 
    } 
    ?>
<?php 
  endwhile;
} else {
?>
    <ul role="navigation">
    	<?php wp_list_pages('title_li='); ?>
    </ul>
  <?php 
}
?>

<?php get_search_form(); ?>
<?php get_footer(); ?>

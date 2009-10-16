<?php
/**
 * @package WordPress
 * @subpackage Avani_Theme
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php sitemap_area($post); ?>
  <div class="content">
    <?php 
    if($post->post_tiale == 'Site Map') {?>
    <ul role="navigation">
    	<?php wp_list_pages('title_li='); ?>
    </ul>
    <?php 
    } else { 
     the_content('<p class="serif">Read the rest of this page &raquo;</p>');
    } ?>
  </div>
<?php endwhile; endif; ?>



<?php get_search_form(); ?>

<?php get_footer(); ?>

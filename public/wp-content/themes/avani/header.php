<?php
/**
 * @package WordPress
 * @subpackage Avani_Theme
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> -  <?php bloginfo('description'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/ie6.css' ?>" type="text/css" media="screen" />
<![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"> 
  <tr> 
    <td><table width="770" height="600" border="0" cellspacing="0" cellpadding="0"> 
        <tr> 
          <td id="logo" width="170" valign="top"><a href="/" class="menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.gif" alt="about us" width="170" height="212" border="0"></a></td> 
          <td width="600" valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td height="187" valign="top" background="<?php bloginfo('stylesheet_directory'); ?>/images/line4.gif">
                  <div align="center">
                    <a href="<?php echo get_permalink(get_page_by_title('Products')); ?>" class="menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner.jpg" width="468" height="60" border="0"></a> 
                  </div> 
                  <div class="menubar"> 
                    <ul>
                      <?php wp_list_pages('sort_column=menu_order&title_li=&depth=1'); ?>
                    </ul>
                  </div> 
                  <div class="menubar submenubar"> 
                    <?php
                      $children = get_submenu_content($post);
                      if ($children) { ?>
                        <ul><?php echo $children; ?></ul><?php 
                      } ?>
                  </div> 
                </td>
              </tr> 
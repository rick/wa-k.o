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

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bodytxt.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/notile.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/navbut.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/title.css" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" <?php body_class(); ?>>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bgimg02">
  <tr>
    <td align="left" valign="top" height="1337"> 
      <table width="960" border="0" cellspacing="0" cellpadding="0" height="601" class="bgimg01">
        <tr> 
          <td colspan="3" align="left" valign="top" height="2"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr align="left" valign="top"> 
                <td width="25%">&nbsp;</td>
                <td width="48%"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner.jpg" width="468" height="60"></td>
                <td width="27%">&nbsp;</td>
              </tr>
              <tr align="left" valign="top"> 
                <td width="25%"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="29%" height="112">&nbsp;</td>
                      <td align="left" valign="top" width="39%" height="112"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" width="97" height="118"></td>
                      <td width="32%" height="112">&nbsp;</td>
                    </tr>
                  </table>
                </td>
                <td width="48%" valign="bottom"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td align="left" valign="bottom"> 
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr align="center" valign="middle">
                            <!-- menu links -->
                            <?php
                              $children = get_submenu_content($post);
                              if ($children) { 
                                echo $children;
                              } ?>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="left" valign="bottom">&nbsp; </td>
                    </tr>
                    <tr> 
                      <td valign="bottom" align="left"> 
                        <table width="100%" border="0" cellspacing="0" cellpadding="2">
                          <tr> 
                            <td class="pgttl" height="10" width="1%" bgcolor="#CC6633">&nbsp;</td>
                            <!-- PAGE TITLE -->
                            <td class="pgttl" height="10" width="93%" align="left" valign="middle" bgcolor="#CC6633"><?php if($title) { echo $title; } else { the_title(); } ?> </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
                <td width="27%">&nbsp;</td>
              </tr>
              <tr align="left" valign="top"> 
                <td width="25%">&nbsp;</td>
                <td width="48%"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr> 
                      <!-- BREAD CRUMBS -->
                      <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#CC6633">
                        <a href="/" class="navigation">Home</a> <?php echo get_breadcrumbs($post); ?>
                      </font></td>
                    </tr>
                  </table>
                </td>
                <td width="27%">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td colspan="3" align="left" valign="top" height="1142"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr align="left" valign="top"> 
                <td width="25%"> 
                  <table width="99%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td height="52" align="left" valign="top" width="67%">&nbsp;</td>
                      <td height="52" align="left" valign="top" width="33%">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td align="left" valign="top" height="166" width="67%"> 
                        <table width="0%" border="0" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td width="70%" height="20"><a href="<?php echo get_permalink(get_page_by_title('About Us')); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-abc.jpg" width="161" height="25"></a></td>
                          </tr>
                          <tr> 
                            <td width="70%"><a href="<?php echo get_permalink(get_page_by_title('News & Events')); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-nec.jpg" width="161" height="25"></a></td>
                          </tr>
                          <tr> 
                            <td width="70%"><a href="<?php echo get_permalink(get_page_by_title('Renewable Energy')); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-rec.jpg" width="161" height="27"></a></a></td>
                          </tr>
                          <tr> 
                            <td width="70%" height="2"><a href="<?php echo get_permalink(get_page_by_title('Water Management')); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-wmc.jpg" width="161" height="26"></a></td>
                          </tr>
                          <tr> 
                            <td width="70%"><a href="<?php echo get_permalink(get_page_by_title('Farm Based Activities')); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-fac.jpg" width="161" height="27"></a></td>
                          </tr>
                          <tr> 
                            <td width="70%"><a href="<?php echo get_permalink(get_page_by_title('Textiles')); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-txc.jpg" width="161" height="26"></a></td>
                          </tr>
                          <tr> 
                            <td width="70%" height="2"><a href="<?php $other_page = get_page_by_title('Products'); print(get_page_link($other_page->ID)); ?>"><img class="menubutton" src="<?php bloginfo('stylesheet_directory'); ?>/images/mainnav-prc.jpg" width="161" height="25"></a></td>
                          </tr>
                        </table>
                      </td>
                      <td align="left" valign="top" height="166" width="33%">&nbsp; 
                      </td>
                    </tr>
                    <tr> 
                      <td height="7" width="67%">&nbsp;</td>
                      <td height="7" width="33%">&nbsp;</td>
                    </tr>
                  </table>
                </td>
                <td width="49%"> 
                  <table width="99%" border="0" cellspacing="0" cellpadding="5">
                    <tr> 
                      <td width="67%" align="left" valign="top" class="bdytxt" height="1067"> 
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td height="27" align="left" valign="top" class="bdytxt">


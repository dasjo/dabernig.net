<?php
// $Id: page.tpl.php,v 1.1 2009/06/26 00:33:39 duvien Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
  <div id="page" class="container-16 clear-block">
    <div id="site-header" class="clear-block">
      <div id="header-inner">
        <?php if ($linked_site_name): ?>
	        <h1 id="site-name" class="grid-3 clear-block"><?php print $linked_site_name; ?></h1>
	      <?php endif; ?>
   
    <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="grid-13">
	  <div id="navbar-inner">
        <?php print $main_menu_links; ?>
        <?php print $secondary_menu_links; ?>
      </div>
	  </div> <!--//end #navbar-inner -->
    <?php endif; ?>

    <?php if ($search_box): ?>
      <div id="search-box" class="grid-6 prefix-10"><?php print $search_box; ?></div>
    <?php endif; ?>
    </div>

    <div id="site-subheader" class="prefix-1 suffix-1 clear-block">
    <?php if ($mission): ?>
      <div id="mission" class="<?php print ns('grid-14', $header, 7); ?>">
        <?php print $mission; ?>
      </div>
    <?php endif; ?>

    <?php if ($header): ?>
      <div id="header-region" class="region <?php print ns('grid-14', $mission, 7); ?> clear-block">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    </div>
	</div>

  <div id="main" class="column <?php print ns('grid-16', $left, 4, $right, 3) . ' ' . ns('push-4', !$left, 4); ?>">
	  <div id="content"><div id="content-inner">
      
	    <?php if($breadcrumb): ?>
		  <div id="breadcrumb" class="grid-3 alpha">
  			<?php print $breadcrumb; ?>
		  </div>	
		<?php endif; ?> 
		
	    <?php if(!$breadcrumb && $title): ?>
         <h1 class="title grid-3 alpha" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
			
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

		  <?php if ($content_top): ?>
        <div id="content-top" class="region region-content_top">
          <?php print $content_top; ?>
        </div> <!-- /#content-top -->
      <?php endif; ?>

      <?php if ($content_indent): ?>
      <div id="main-content" class="region clear-block alpha push-3 grid-13">
      <?php endif; ?>
      <?php if (!$content_indent): ?>
			<div id="main-content" class="region clear-block">
			<?php endif; ?>
			
		  <?php if(!($node->type == 'work') && $breadcrumb && $title): // work title rendered in content-field-field_credits.tpl.php ?>
	      	<h1 class="title normal" id="page-title"><?php print $title; ?></h1>
		  <?php endif; ?>
		  	
        <?php print $content; ?>
      </div> <!-- //end #main-content -->

      <?php print $feed_icons; ?>
    </div> <!--//end #main -->

	<?php if ($content_bottom): ?>
      <div id="content-bottom" class="region region-content_bottom">
        <?php print $content_bottom; ?>
      </div> <!-- /#content-bottom -->
    <?php endif; ?>

  </div></div> <!-- /#content-inner, /#content -->
  <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $right, 3); ?>">
	<div id="sidebar-left-inner">
      <?php print $left; ?>
    </div>
    </div> <!-- //end #sidebar-left-inner -->
  <?php endif; ?>

  <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-3">
	<div id="sidebar-right-inner">
      <?php print $right; ?>
    </div>
    </div> <!--//end #sidebar-right-inner -->
  <?php endif; ?>
	
	<?php if ($admin_sidebar): ?>
    <div id="admin-sidebar" class="column sidebar region grid-3">
  <div id="admin-sidebar-inner">
      <?php print $admin_sidebar; ?>
    </div>
    </div> <!--//end #admin-sidebar-inner -->
  <?php endif; ?>

  <div id="footer" class="prefix-1 suffix-1">
    <?php if ($footer): ?>
      <div id="footer-region" class="region grid-14 clear-block">
	  <div id="footer-inner">

        <?php print $footer; ?>
      </div>
	  </div> <!--//end #footer-inner -->
    <?php endif; ?>

      <div class="gallery grid-8 push-2"><a href="http://www.galerieandreashuber.at/">Galerie Andreas Huber</a>&nbsp;&nbsp;&nbsp;<a href="http://www.wilfriedlentz.com/">Wilfried Lentz</a></div>
      <div class="design grid-5 push-1">web design <a href="http://www.dasjo.at">dasjo</a>, powered by <a href="http://www.drupal.org">drupal</a></div>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-14">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>

  </div>
  <?php print $closure; ?>
</body>
</html>

<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'dark_elegant') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div id="wapper">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  </div>
  <div style="clear:both;" class="clearfix"></div>
  <footer class="site-footer" role="contentinfo">
    <div class="copyright">
    	<p>Copyright ? 2008 北京泰科博瑞科技有限公司 京ICP备09003838 </p>
		<p>石景山区金顶东街金顶科技园A座205室 电话:010-82755020,82755021</p>
    </div>
  </footer>
</body>
</html>
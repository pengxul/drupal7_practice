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
  <div id="baidu_share" style="width:960px;margin:0 auto;height:30px;padding:20px;">
        
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:right !important;">
            <a class="bds_qzone"></a>
            <a class="bds_tsina"></a>
            <a class="bds_tqq"></a>
            <a class="bds_renren"></a>
            <span class="bds_more">更多</span>
        </div>
        <div id="topNav_col" class="topNav" style="float:right;">
               <a style="color:#fff;" class='white' href="">设为首页</a>
               <a style="color:#fff;" class='white' href="">加入收藏</a>
        </div>
        <script type="text/javascript" id="bdshare_js" data="type=bottom" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);</script>
    
  </div>
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
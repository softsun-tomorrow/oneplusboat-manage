<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$config['seo_title']?> - <?=$config['site_name']?> </title>
<meta name="keywords" content="<?=$config['seo_keywords']?>" />
<meta name="description" content="<?=$config['seo_description']?>" />
<meta name="author" content="<?=lang('system_author');?>" />
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/global.js"></script>
<!--<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/go_top.js" ></script>-->
<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/css/global.css" />
<link rel="shortcut icon" href="<?=x6cms_path('images/favicon.ico');?>" />

</head>
<body>
<div class="wrapper">
	<div class="header">
    	<div class="logo"><a href="<?=base_url($langurl);?>" title=""><img src="<?=$config['site_logo']?>" alt="" /></a></div>
        <div class="nav">
			<?=x6cms_category(1);?>
<!--			<div class="hot"></div>-->
            <div class="nav_notice">
                <a href="#">
                    OEM factory on water sports products!
                </a>
            </div>
        </div>
        <div class="header-right">
        	<div class="language"><a href="http://www.liusgear.com/index.php?lang=zh_cn" target="_blank">CH</a>|<a href="#" target="_blank">EN</a></div>
        	<div class="search">
				<?=x6cms_productsearch()?>
            </div>
        </div>
  	</div>
<!DOCTYPE HTML>
<html lang="zh-CN" class="han-la">
	<head>
		<meta charset="<?php $this->options->charset(); ?>">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    	<meta name="renderer" content="webkit">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <?php if ($this->options->siteIcon): ?>
	        <link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
	        <link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
        <?php endif; ?>
        <?php $this->header(); ?>
				<link rel="stylesheet" href="<?php themeCDN('css/normalize.min.css'); ?>">
				<link rel="stylesheet" href="<?php themeCDN('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php themeCDN('css/material.min.css'); ?>">
        <link rel="stylesheet" href="<?php themeCDN('css/ripples.min.css'); ?>">
				<link rel="stylesheet" href="<?php $this->options->themeUrl('css/custom.css'); ?>">
				<link rel="stylesheet" href="<?php themeCDN('css/font-awesome.min.css'); ?>">
	</head>
	<body>
	<header>
		<div class="navbar navbar-fixed-top navbar-inverse">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
		  </div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
		    <ul class="nav navbar-nav">
					<li class="site-logo">
						<a class="navbar-brand" href="//bangz.me"><img src="<?php themeCDN("img/logo-min.png"); ?>"></a>
					</li>
		    	<li<?php if($this->is('index')): ?> class="active"<?php endif; ?>>
						<a href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i> 首 页 </a>
					</li>
		    	<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
		      <?php while($category->next()): ?>
		      	<?php if(count($category->children)):?>
							<li class="dropdown">
		          	<a href="<?php $category->permalink(); ?>" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
			          	<?php _e($category->name); ?>
			            <b class="caret"></b>
								</a>
		          	<ul class="dropdown-menu">
		          		<li>
										<a href="<?php $category->permalink(); ?>"><?php _e($category->name); ?></a>
									</li>
		          		<?php foreach($category->children as $k=>$v):?>
			            	<li><a href="<?php _e($v['permalink']); ?>"><?php _e($v['name']); ?></a></li>
		          		<?php endforeach; ?>
				        </ul>
				    	</li>
		      	<?php else:?>
		    			<?php if($category->levels == 0):?>
		      			<li
								<?php if ($this->is('category', $category->slug)): ?>
									class="active"
								<?php endif; ?>>
									<a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>">
										<?php $category->name(); ?>
									</a>
								</li>
		      		<?php endif;?>
		    		<?php endif;?>
		    	<?php endwhile; ?>

		      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		      <?php while($pages->next()): ?>
						<li<?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>>
							<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
						</li>
		      <?php endwhile; ?>
		    </ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<div class="search-form">
							<form>
								<div id="search-btn">
								</div>
								<input type="text" class="search-text" placeholder="输入需要查找的内容...">
							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>

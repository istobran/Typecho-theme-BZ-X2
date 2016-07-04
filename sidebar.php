<aside class="col-md-4 sidebar hidden-xs hidden-sm">
	<div class="widget widget-info">
		<a class="widget-heading" onclick="$('.about_me').slideToggle()" href="javascript:;">
				<h3 class="widget-title">关于我</h3>
		</a>
		<div class="widget-content about_me">
			<div class="avatar">
				<img src="<?php themeCDN('img/avatar_temp.jpg'); ?>" alt="BangZ" class="img-circle" />
			</div>
			<div class="blogger_name">
				BangZ
			</div>
			<div class="description">
				一名执着于梦想的前端开发者
			</div>
			<div class="my_info">
				<ul>
					<li>
						<dl class="position">
							<dd><i class="fa fa-map-marker" aria-hidden="true"></i></dd>
							<dd>位置</dd>
							<dd>广东 广州</dd>
						</dl>
					</li>
					<li>
						<dl class="graduated">
							<dd><i class="fa fa-university" aria-hidden="true"></i></dd>
							<dd>毕业于</dd>
							<dd>华南理工大学广州学院</dd>
						</dl>
					</li>
					<li>
						<dl class="birthday">
							<dd><i class="fa fa-birthday-cake" aria-hidden="true"></i></dd>
							<dd>生于</dd>
							<dd>1994 年 8 月 12 日</dd>
						</dl>
					</li>
					<li>
						<dl class="major">
							<dd><i class="fa fa-graduation-cap" aria-hidden="true"></i></dd>
							<dd>所学专业</dd>
							<dd>软件工程</dd>
						</dl>
					</li>
					<li>
						<dl class="orientation">
							<dd><i class="fa fa-rocket" aria-hidden="true"></i></dd>
							<dd>主攻方向</dd>
							<dd>网站前端</dd>
						</dl>
					</li>
					<li>
						<dl class="email">
							<dd><i class="fa fa-envelope" aria-hidden="true"></i></dd>
							<dd>E-Mail</dd>
							<dd><a href="mailto:i@bangz.me">i@bangz.me</a></dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php if (class_exists("Calendar_Plugin")): ?>
  <div class="widget widget-info">
		<a class="widget-heading" onclick="$('.calendar').slideToggle()" href="javascript:;">
				<h3 class="widget-title">日历</h3>
		</a>
    <?php Calendar_Plugin::render();?>
  </div>
	<?php endif;?>

	<div class="widget widget-info">
		<a class="widget-heading" onclick="$('.code_repo').slideToggle()" href="javascript:;">
				<h3 class="widget-title">代码仓库</h3>
		</a>
		<div class="widget-content code_repo">
			<a href="http://git.oschina.net/monolight" target="_blank" class="item"><img src="<?php themeCDN('img/logo_oschina.png'); ?>" alt="oschina" class="repo_logo" />我的Git@OSC源</a>
			<a href="https://github.com/istobran" target="_blank" class="item"><img src="<?php themeCDN('img/logo_github.png'); ?>" alt="github" class="repo_logo" />我的GitHub源</a>
			<a href="https://bitbucket.org/zhengbang_lei_istobran" target="_blank" class="item"><img src="<?php themeCDN('img/logo_bitbucket.png'); ?>" alt="bitbucket" class="repo_logo" />我的Bitbucket源</a>
		</div>
	</div>

	<div class="widget widget-info">
	    <a class="widget-heading" onclick="$('.recent_posts_box').slideToggle()" href="javascript:;">
	        <h3 class="widget-title">最新文章</h3>
	    </a>
	    <div class="widget-content recent_posts_box">
	       <?php $this->widget('Widget_Contents_Post_Recent')
	        ->parse('<a href="{permalink}" class="item">{title}</a>'); ?>
	    </div>
	</div>

	<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=1&desc=1&limit=5')->to($tags); ?>
	<div class="widget widget-info">
    <a class="widget-heading" onclick="$('.tags_box').slideToggle()" href="javascript:;">
        <h3 class="widget-title">标签</h3>
    </a>
		<div class="widget-content tags_box">
			<?php if($tags->have()): ?>
				<?php while ($tags->next()): ?>
				    <a href="<?php $tags->permalink(); ?>" rel="tag" class="item size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?><span class="badge pull-right"> <?php $tags->count(); ?></span></a>
				<?php endwhile; ?>
			<?php else: ?>
				<a class="item"><?php _e('没有任何标签'); ?></a>
			<?php endif; ?>
		</div>
	</div>

	<div class="widget widget-info">
			<a class="widget-heading" onclick="$('.other_box').slideToggle()" href="javascript:;">
					<h3 class="widget-title">其他</h3>
			</a>
			<div class="widget-content other_box">
				 <a href="<?php $this->options->feedUrl(); ?>" class="item"><?php _e('文章 RSS'); ?></a>
				 <a href="<?php $this->options->commentsFeedUrl(); ?>" class="item"><?php _e('评论 RSS'); ?></a>
			</div>
	</div>
</aside>

<aside class="col-md-4 sidebar">
	<div class="widget widget-info">
	    <a class="widget-heading" onclick="$('.recent_posts_box').slideToggle()" href="javascript:;">
	        <h3 class="widget-title">最新文章</h3>
	    </a>
	    <div class="widget-content recent_posts_box">
	       <?php $this->widget('Widget_Contents_Post_Recent')
	        ->parse('<a href="{permalink}" class="item">{title}</a>'); ?>
	    </div>
	</div>

	<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
	<div class="widget widget-info">
	    <a class="widget-heading" onclick="$('.comments_box').slideToggle()" href="javascript:;">
	        <h3 class="widget-title">最新回复</h3>
	    </a>
	    <div class="widget-content comments_box">
			<?php while($comments->next()): ?>
			    <a href="<?php $comments->permalink(); ?>" class="item"><?php $comments->author(false); ?>: <?php $comments->excerpt(30, '...'); ?></a>
			<?php endwhile; ?>
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
	    <a class="widget-heading" onclick="$('.article_cate_box').slideToggle()" href="javascript:;">
	        <h3 class="widget-title">归档</h3>
	    </a>
	    <div class="widget-content article_cate_box">
	       <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
	        ->parse('<a href="{permalink}" class="item">{date}</a>'); ?>
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

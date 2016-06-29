<?php

/**
 * 这是 Typecho 模板 theme-BZ 的第 2 版
 *
 * @package BangZ Typecho theme X 2
 * @author BangZ
 * @version 2.0.0
 * @link http://bangz.me
 */

$this->need('header.php');
?>
	<section class="billboard">
		<div class="billboard-background">
			<div class="loading-container">
				<h2 class="loader"> </h2>
			</div>
		</div>
		<div class="billboard-background-mask"></div>
		<div class="billboard-container" style="display:none;">
			<div class="billboard-text">
				<div class="billboard-text-border-top"></div>
				<h1 class="blog-title"><?php $this->options->title()?></h1>
				<h3 class="blog-description"><?php $this->options->description()?></h3>
				<div class="billboard-text-border-bottom"></div>
			</div>
		</div>
		<div class="billboard-footer">
			<?php _e("Developed by ");?><a href="http://bangz.me" target="_blank"><?php _e("BangZ");?></a>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			    <?php while($this->next()): ?>
					<article class="panel panel-default">
						<div class="article-thumbnail">
							<div class="post-cover" style="background-image:url('<?php ArticleImg_Plugin::render($this->thumb); ?>');">
								<a href="<?php $this->permalink() ?>"><div class="plus"><img src="<?php themeCDN("img/icon-plus.png"); ?>" alt="icon-plus"></div></a>
							</div>
							<h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
							<p class="post-meta">
								<?php $this->date('M j, Y'); ?>
							</p>
						</div>
						<div class="panel-body">
							<div class="post-content index-content"><?php $this->content('<button class="btn btn-primary">继续阅读 <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>'); ?></div>
						</div>
					</article>
			    <?php endwhile; ?>
			    <?php $this->pageNav('<i class="fa fa-angle-double-left" aria-hidden="true"></i>', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>'); ?>
			</div>
		<?php $this->need('sidebar.php'); ?>
	</div>
</div>
<?php $this->need('footer.php'); ?>

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
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="intro animate fadeIn">
					<h1><?php $this->options->slogan() ?></h1>
					<p class="lead"></p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">

		<div class="col-md-8">
		    <?php while($this->next()): ?>
				<article class="panel panel-default">
					<div class="article-thumbnail">
						<h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
						<p class="post-meta">
							<?php $this->date('F j, Y'); ?>
						</p>
					</div>
					<div class="panel-body">
						<div class="post-content"><?php $this->content('<button class="btn btn-primary">继续阅读 <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>'); ?></div>
					</div>
				</article>
		    <?php endwhile; ?>
		    <?php $this->pageNav('<i class="fa fa-angle-double-left" aria-hidden="true"></i>', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>'); ?>
		</div>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

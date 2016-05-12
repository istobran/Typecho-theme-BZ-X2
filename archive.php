<?php $this->need('header.php'); ?>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-primary">您正在查看: <?php $this->archiveTitle(array(
                'category'  =>  _t(' %s 分类下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
                ), '', ''); ?></div>
            <?php if ($this->have()): ?>
              <?php while($this->next()): ?>
                <article class="panel panel-default">
        					<div class="article-thumbnail">
        						<div class="post-cover" style="background-image:url('<?php ArticleImg_Plugin::render($this->thumb); ?>');">
        							<a href="<?php $this->permalink() ?>"><div class="plus"><img src="<?php $this->options->themeUrl("img/icon-plus.png"); ?>" alt="icon-plus"></div></a>
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
            <?php else: ?>
              <article class="block">
                  <h2 class="header"><?php _e('没有找到内容'); ?></h2>
              </article>
            <?php endif; ?>
            <?php $this->pageNav('<i class="fa fa-angle-double-left" aria-hidden="true"></i>', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>'); ?>

        </div>
        <?php $this->need('sidebar.php'); ?>
      </div>
    </div>
    <?php $this->need('footer.php'); ?>

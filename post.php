<?php $this->need('header.php'); ?>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="post-thumbnail">
                  <div class="post-cover" style="background-image:url('<?php ArticleImg_Plugin::render($this->thumb); ?>');"></div>
                </div>
                <div class="panel-body content-inner">
                    <div class="post-content-header">
                      <div class="post-content-category">
                        <?php $this->category(' '); ?>
                      </div>
                      <div class="post-content-title">
                        <h1><?php $this->title(); ?></h1>
                      </div>
                      <div class="post-content-meta">
                        <span class="post-content-author"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                        <span class="post-content-date"><?php $this->date('M j, Y'); ?></span>
                        <span class="post-content-like"><i class="fa fa-heart-o" aria-hidden="true"></i> <?php $this->views(); ?></span>
                      </div>
                    </div>
                    <div class="post-content"><?php $this->content(); ?></div>
                    <div class="post-content-meta-bottom clearfix">
                      <div class="tags">
                        <?php $this->tags(' ', true, ''); ?>
                      </div>
                      <div class="socials" data-url="<?php $this->permalink(); ?>" data-title="<?php $this->title();?>" data-tsina="null">
                      </div>
                    </div>
                </div>
            </div>
            <?php $this->need('comments.duoshuo.php'); ?>
        </div>

    <?php $this->need('sidebar.php'); ?>
  </div>
</div>
<?php $this->need('footer.php'); ?>

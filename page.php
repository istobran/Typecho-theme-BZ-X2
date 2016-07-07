<?php
    if (isset($_GET["action"]) && $_GET["action"] == "ajax_comments") {
        $this->need('comments.php');
    } else {
        if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');
        $this->need('header.php');
?>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
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
                      <span class="post-content-like"><i class="fa fa-heart-o" aria-hidden="true"></i> 351</span>
                    </div>
                  </div>
                  <div class="post-content"><?php $this->content(); ?></div>
              </div>
            </div>
            <?php $this->need('comments.duoshuo.php'); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>
<?php } ?>

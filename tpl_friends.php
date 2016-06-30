<?php
/**
 * _Friendly Links_
 *
 * @package custom
 *
 */
?>
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
            <div class="panel panel-default friends">
              <div class="panel-body content-inner">
                  <div class="post-content-header">
                    <div class="post-content-title">
                      <h1><?php $this->title(); ?></h1>
                    </div>
                    <div class="post-content-subtitle">
                      <h3>这些都是我左邻右舍的小伙伴们哦</h1>
                    </div>
                    <div class="spliter-container">
                      <div class="spliter">
                        <span class="line left"></span>
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="line right"></span>
                      </div>
                    </div>
                  </div>
                  <div class="post-content">
                    <div class="container-fluid">
                      <div class="row">
                        <a class="col-md-6" href="https://ikk.me" target="_blank">
                          <div class="left clearfix">
                            <div class="blog-icon">
                              <img src="<?php themeCDN("avatar/kookxiang.jpg"); ?>" alt="kookxiang" class="img-circle" />
                              <div class="icon-cover"><i class="fa fa-home" aria-hidden="true"></i></div>
                            </div>
                            <div class="text-info">
                              <h3 class="links-title">KK的博客</h3>
                            </div>
                          </div>
                        </a>
                        <a class="col-md-6" href="http://blog.bilicloud.com" target="_blank">
                          <div class="right clearfix">
                            <div class="blog-icon">
                              <img src="<?php themeCDN("avatar/blackfox.jpg"); ?>" alt="blackfox" class="img-circle" />
                              <div class="icon-cover"><i class="fa fa-home" aria-hidden="true"></i></div>
                            </div>
                            <div class="text-info">
                              <h3 class="links-title">黑狐的博客</h3>
                            </div>
                          </div>
                        </a>
                        <a class="col-md-6" href="http://lcina.me" target="_blank">
                          <div class="left clearfix">
                            <div class="blog-icon">
                              <img src="<?php themeCDN("avatar/lcina.jpg"); ?>" alt="lcina" class="img-circle" />
                              <div class="icon-cover"><i class="fa fa-home" aria-hidden="true"></i></div>
                            </div>
                            <div class="text-info">
                              <h3 class="links-title">LCINA的博客</h3>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <!-- <?php $this->content(); ?> -->
                  </div>
                  <div class="post-content-meta-bottom clearfix">
                    <div class="tags">
                      <?php $this->tags(' ', true, ''); ?>
                    </div>
                    <div class="socials">
                      <a href="#fakelink"><i class="fa fa-facebook"></i></a>
                      <a href="#fakelink"><i class="fa fa-twitter"></i></a>
                      <a href="#fakelink"><i class="fa fa-pinterest-p"></i></a>
                      <a href="#fakelink"><i class="fa fa-tumblr"></i></a>
                      <a href="#fakelink"><i class="fa fa-google-plus"></i></a>
                      <a href="#fakelink"><i class="fa fa-envelope"></i></a>
                    </div>
                  </div>
              </div>
            </div>
            <?php $this->need('comments.duoshuo.php'); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>
<?php } ?>

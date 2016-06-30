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
            <div class="panel panel-default aboutme">
              <div class="post-content-header">
                <div class="post-content-title">
                  <div class="line left"></div>
                  <h1><?php $this->title(); ?></h1>
                  <div class="line right"></div>
                </div>
              </div>
              <div class="post-content">
                <div class="container-fluid">
                  <div class="row basic">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                  </div>
                  <div class="row skills">
                    <div class="col-md-12">

                    </div>
                  </div>
                  <div class="row experience">
                    <div class="col-md-12">

                    </div>
                  </div>
                  <div class="row contact">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
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

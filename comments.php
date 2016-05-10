<?php $this->comments()->to($comments); ?>
<div id="comments">
<?php if($this->allow('comment')): ?>
  <div class="alert alert-primary">
      <span id="commentCount"><?php $this->commentsNum(_t('沙发在此！快来承包！'), _t('哇！还有板凳呢！'), _t('已有 %d 条吐槽')); ?></span>
  </div>
  <div class="comment-list">
    <?php while($comments->next()): ?>
      <li id="<?php $comments->theId(); ?>">
        <div class="comment-avatar">
          <?php $comments->gravatar('80', ''); ?>
        </div>
        <div class="comment-caption">
          <div class="comment-content">
            <?php $comments->content(); ?>
          </div>
          <div class="comment-meta clearfix">
            <span class="comment-author"><?php $comments->author(); ?></span>
            <span class="comment-date"><?php $comments->dateWord(); ?></span>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
          </div>
        </div>
        <?php if ($comments->children): ?>
          <div class="comment-children">
            <?php //$comments->threadedComments($comments, Typecho_Widget::widget('Widget_Options')); ?>
          </div>
        <?php endif; ?>
      </li>
    <?php endwhile; ?>
  </div>
  <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  <div id="<?php $this->respondId(); ?>" class="respond">
    <div class="respond panel panel-default">
    	<div class="panel-body">
    		<div class="cancel-comment-reply"></div>
        <div class="comment-heading widget-heading">
          <h3 id="response" class="widget-title">添加新评论</h3>
        </div>
    		<!-- 输入表单开始 -->
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form" class="form-horizontal">
            <!-- 如果当前用户已经登录 -->
            <?php if($this->user->hasLogin()): ?>
              <blockquote class="comment-current-user">
                <p>当前已登录：<a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a></p>
              </blockquote>
            <?php else: ?>
      	    	<div class="form-group">
      	    		<label for="author" class="col-sm-2 control-label required">昵称</label>
      	    		<div class="col-sm-9">
      	    			<div class="form-control-wrapper">
      	    				<input type="text" name="author" class="form-control text empty" size="35" value="<?php $this->remember('author'); ?>" />
      	    				<span class="material-input"></span>
      	    			</div>
      	    		</div>
      	    	</div>
      				<div class="form-group">
      	    		<label for="mail" class="col-sm-2 control-label required">邮箱</label>
      	    		<div class="col-sm-9">
      	    			<div class="form-control-wrapper">
      	    				<input type="email" name="mail" class="form-control text empty" size="35" value="<?php $this->remember('mail'); ?>" />
      	    				<span class="material-input"></span>
      	    			</div>
      	    		</div>
      	    	</div>
      	    	<div class="form-group">
      	    		<label for="url" class="col-sm-2 control-label required">网站</label>
      	    		<div class="col-sm-9">
      	    			<div class="form-control-wrapper">
      	    				<input type="url" name="url" class="form-control text empty" size="35" value="<?php $this->remember('url'); ?>" placeholder="http://"/>
      	    				<span class="material-input"></span>
      	    			</div>
      	    		</div>
      	    	</div>
            <?php endif; ?>
            <div class="form-group">
    	    		<label for="textarea" class="col-sm-2 control-label required">内容</label>
    	    		<div class="col-sm-9">
    	    			<div class="form-control-wrapper">
    	    				<textarea rows="9" cols="50" name="text" id="textarea" class="form-control textarea  empty" required=""></textarea>
    	    				<span class="material-input"></span>
    	    			</div>
    	    		</div>
    	    	</div>
    	    	<div class="form-group">
    	    		<div class="col-sm-offset-2 col-sm-5">
    	    			<button type="submit" id="submit" class="btn btn-primary submit">提交评论</button>
    	    		</div>
    	    	</div>
        </form>
    	</div>
    </div>
  </div>
<?php else: ?>
  <div class="alert alert-primary">
      <span id="commentCount">评论已关闭</span>
  </div>
<?php endif; ?>
</div>

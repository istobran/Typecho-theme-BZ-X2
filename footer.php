
	<!--
	<script src="//cdn.bootcss.com/bootstrap-material-design/0.3.0/js/material.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
	-->
	</div>
	</div>
	<footer>
		<div class="footer-bottom">
			<div class="container">
				<div class="support">
					<img src="//assets.qiniu.com/qiniu-122x65.png" alt="七牛云存储" />
				</div>
				<div class="themeauthor">
					Theme Materialize-X V2 by <a href="http://bamgz.me">BangZ</a> / Powered by <a href="http://typecho.org/">Typecho)))</a>
				</div>
				<div class="lawinfo">
					&copy; <?php _e(date('Y'));?>&nbsp;<?php $this->options->title();?> / <?php echo $this->options->miibeian; ?>
				</div>
				<div class="social">
					<a href="//github.com/istobran"><i class="fa fa-github"></i></a>
					<a href="//twitter.com/istobran"><i class="fa fa-twitter"></i></a>
					<a href="//www.v2ex.com/member/monolight"><i class="fa fa-vimeo"></i></a>
					<a href="//steamcommunity.com/profiles/76561198094522692"><i class="fa fa-steam"></i></a>
					<a href="//google.com/+BangZ-CN"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<footer class="footer-toolbar">
		<div class="footer-back-top back-top btn">
        <i class="fa fa-chevron-up"></i>
        <p>TOP</p>
    </div>
	</footer>
	<div class="back-to-top">
    <i class="fa fa-chevron-up"></i>
  </div>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-2.2.3.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/material.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/ripples.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/text-autospace.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
	<script>
      $.material.init();
  </script>
	<?php $this->footer(); ?>
	</body>
</html>

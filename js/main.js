(function ($) {
  $(document).ready(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.back-to-top').addClass("show-button");
          } else {
              $('.back-to-top').removeClass("show-button");
          }
      });
      $('.back-to-top').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });
      $(".footer-back-top").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
      });
  });

  //图片加载完成后再显示
  $(".billboard-container").hide();
  $(".blog-title").addClass("easeOuts");
  $(".blog-description").addClass("easeOuts");
  var bg_image = new Image();
  bg_image.src = "http://static.bangz.me/img/bg01.png";
  bg_image.onload = function() {
    $(".loading-container").remove();
    $('.billboard-background').hide();
    $('.billboard-background').css('background-image', 'url('+bg_image.src+')');
    $('.billboard-background').fadeIn("slow", function() {
      $('.billboard-background-mask').css("opacity", "1");
      $(".billboard-container").fadeIn("slow", function() {
        $(".blog-title").removeClass("easeOuts").addClass('easeIns');
        $(".blog-description").removeClass("easeOuts").addClass('easeIns');
        $(".billboard-text-border-top").css("margin-left", "0");
        $(".billboard-text-border-bottom").css("margin-left", "0");
      });
    });
  };

  //搜索按钮效果
  $('#search-btn').click(function() {
    if ($('.search-form').hasClass("toggle-search-form")) {
      $('.search-form').removeClass("toggle-search-form");
    } else {
      $('.search-form').addClass("toggle-search-form");
    }
  });

  //监听窗口宽度变化（响应式）
  if (window.matchMedia) {
    var mq = window.matchMedia("(max-width: 664px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
  }
  function WidthChange(mq) {
    if(mq.matches){
        $(".aboutme .basic > .col-md-8").addClass("clearfix");
    }else{
        $(".aboutme .basic > .col-md-8").removeClass("clearfix");
    }
  }

  //实现社交分享功能
  $(document).ready(function () {
    var $this = $('.socials'),
        url = $this.attr('data-url'),
        encodedUrl = encodeURIComponent(url),
        title = $this.attr('data-title'),
        tsina = $this.attr('data-tsina'),
        description = $this.attr('description');
    var html = [
    '<div class="hoverqrcode clearfix"></div>',
    '<a class="overlay" id="qrcode"></a>',
    '<a href="https://www.facebook.com/sharer.php?u=' + encodedUrl + '" class="article-share-facebook" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>',
    '<a href="https://twitter.com/intent/tweet?url=' + encodedUrl + '" class="article-share-twitter" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>',
    '<a href="https://plus.google.com/share?url=' + encodedUrl + '" class="article-share-gplus" title="gplus"><i class="fa fa-google-plus"></i></a>',
    '<a href="#qrcode" class="article-share-qrcode" title="微信"><i class="fa fa-weixin" aria-hidden="true"></i></a>',
    '<a href="http://widget.renren.com/dialog/share?resourceUrl=' + encodedUrl + '&srcUrl=' + encodedUrl + '&title=' + title +'" class="article-share-renren" target="_blank" title="人人"><i class="fa fa-renren" aria-hidden="true"></i></a>',
    '<a href="http://service.weibo.com/share/share.php?title='+title+'&url='+encodedUrl +'&ralateUid='+ tsina +'&searchPic=true&style=number' +'" class="article-share-weibo" target="_blank" title="微博"><i class="fa fa-weibo" aria-hidden="true"></i></a>'
    ].join('');

    $this.append(html);
    $('.hoverqrcode').hide();
    var myWidth = 0;
    function updatehoverqrcode(){
      if( typeof( window.innerWidth ) == 'number' ) {
        myWidth = window.innerWidth;
      } else if( document.documentElement && document.documentElement.clientWidth) {
        myWidth = document.documentElement.clientWidth;
      }
      var qrsize = myWidth > 1024 ? 200:100;
      var options = {render: 'image', size: qrsize, fill: '#EA9800', text: url, radius: 0.5, quiet: 1};
      var p = $('.article-share-qrcode').position();
      $('.hoverqrcode').empty().css('width', qrsize).css('height', qrsize)
                            .css('left', p.left-qrsize/2+10).css('top', p.top-qrsize-10)
                            .qrcode(options);
    }
    $(window).resize(function(){
      $('.hoverqrcode').hide();
    });
    $('.article-share-qrcode').click(function(){
      updatehoverqrcode();
      $('.hoverqrcode').toggle();
    });
    $('.article-share-qrcode').hover(function(){}, function(){
        $('.hoverqrcode').hide();
    });
    $('.article-share-gplus').click(function() {
      window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
      return false;
    });
  });
})(jQuery);

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

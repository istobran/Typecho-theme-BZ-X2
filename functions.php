<?php
include_once "pangu.php";
Typecho_Plugin::factory('Widget_Abstract_Contents')->content = array('Pangu', 'makeArticle');
Typecho_Plugin::factory('Widget_Abstract_Contents')->excerpt = array('Pangu', 'makeArticle');

class Pangu {
	public static function makeArticle($content,$widget,$lastResult)
	{
		$content = empty($lastResult) ? $content : $lastResult;
		if ($widget instanceof Widget_Archive) {
      // 处理中英文之间的空格
      $content = pangu($content);
		}
		return $content;
	}
}

function themeConfig($form) {
    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, NULL, _t('首页图片标语文字'), _t('在这里文字，用于在首页中图片的文字显示'));
    $form->addInput($slogan);

    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, NULL, _t('标题栏和书签栏Icon'), _t('在这里填入一个图片URL地址, 作为标题栏和书签栏Icon, 默认不显示'));
    $form->addInput($siteIcon);

    $miibeian = new Typecho_Widget_Helper_Form_Element_Text('miibeian', NULL, _t('粤ICP备14072384号-2'), _t('备案号'), _t('在这里填入天朝备案号，不显示则留空'));
    $form->addInput($miibeian);

		$cdnurl = new Typecho_Widget_Helper_Form_Element_Text('cdnurl', NULL, _t('静态资源CDN的URL'), _t('CDN的地址'), _t('在这里填入CDN的地址，如七牛、又拍云等'));
		$form->addInput($cdnurl);

    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc', array(
        'ShowLogin' => _t('前台显示登录入口'),
        'ShowLoadTime' => _t('页脚显示加载耗时')
        ),
    array('ShowLogin'), _t('杂项'));
    $form->addInput($misc->multiMode());
}

function themeCDN($resource)
{
	$options = Typecho_Widget::widget('Widget_Options');
	if (!isset($options->cdnurl)) {
		_e($options->themeUrl($resource));
	} else {
		_e($options->cdnurl().$resource);
	}
}

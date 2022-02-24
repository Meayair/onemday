<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeFields($layout) {
    $dbPoint = new Typecho_Widget_Helper_Form_Element_Text('dbPoint', NULL, NULL, _t('豆瓣评分'), _t('填写豆瓣评分或空'));
    $layout->addItem($dbPoint);
    
    $tags = new Typecho_Widget_Helper_Form_Element_Text('tags', NULL, NULL, _t('分类'), _t('填写类别（请用,分割）'));
    $layout->addItem($tags);
    
    $area = new Typecho_Widget_Helper_Form_Element_Text('area', NULL, NULL, _t('地区'), _t('填写地区'));
    $layout->addItem($area);
    
    $year = new Typecho_Widget_Helper_Form_Element_Text('year', NULL, NULL, _t('年份'), _t('填写年份'));
    $layout->addItem($year);
    
    $director = new Typecho_Widget_Helper_Form_Element_Text('director', NULL, NULL, _t('导演'), _t('填写导演'));
    $layout->addItem($director);
    
    $actor = new Typecho_Widget_Helper_Form_Element_Text('actor', NULL, NULL, _t('演员'), _t('填写演员（请用,分割）'));
    $layout->addItem($actor);
    
    $cover = new Typecho_Widget_Helper_Form_Element_Text('cover', NULL, NULL, _t('电影图片'), _t('填写电影图片'));
    $layout->addItem($cover);
    
    $soundbite = new Typecho_Widget_Helper_Form_Element_Text('soundbite', NULL, NULL, _t('金句'), _t('填写金句'));
    $layout->addItem($soundbite);
    
    $movdes = new Typecho_Widget_Helper_Form_Element_Textarea('movdes', NULL, NULL, _t('描述'), _t('填写电影描述'));
    $layout->addItem($movdes);
}

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
}

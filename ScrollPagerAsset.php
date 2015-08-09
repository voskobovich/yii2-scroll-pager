<?php

namespace voskobovich\widgets;

use yii\web\AssetBundle;


/**
 * Class ScrollPagerAsset
 * @package voskobovich\widgets
 */
class ScrollPagerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/voskobovich/yii2-scroll-pager/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'jquery.scrollPager.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'jquery.scrollPager.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
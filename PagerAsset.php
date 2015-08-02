<?php

namespace voskobovich\widgets\scrollPager;

use yii\web\AssetBundle;


/**
 * Class PagerAsset
 * @package voskobovich\widgets\scrollPager
 */
class PagerAsset extends AssetBundle
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
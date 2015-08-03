<?php

namespace voskobovich\widgets\scrollPager;

use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\widgets\LinkPager;


/**
 * Class Pager
 * @package voskobovich\widgets\scrollPager
 */
class Pager extends LinkPager
{
    /**
     * Items container
     * @var string
     */
    public $itemsContainer = '.list-view';

    /**
     * JS plugin options
     * @var array
     */
    public $pluginOptions = [];

    /**
     * @var array HTML attributes for the pager container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'pagination hidden'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->pluginOptions = ArrayHelper::merge([
            'wrapper' => '.list-view',
            'pagination' => '.pagination',
            'next' => '.pagination .next a:first',
            'bufferPx' => 40,
            'pjax' => [
                'container' => '#scrollPagerPjaxContainer'
            ]
        ], $this->pluginOptions);

        PagerAsset::register($this->view);

        $pluginOptions = Json::encode($this->pluginOptions);
        $this->view->registerJs("$('{$this->itemsContainer}').scrollPager({$pluginOptions});");
    }
}
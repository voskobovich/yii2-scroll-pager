<?php

namespace voskobovich\widgets;

use yii\widgets\Pjax;

/**
 * Class ScrollPagerWrapper
 * @package voskobovich\widgets
 *
 * @property string container
 */
class ScrollPagerWrapper extends Pjax
{
    /**
     * @var string|false the jQuery selector of the links that should trigger pjax requests.
     * If not set, all links within the enclosed content of Pjax will trigger pjax requests.
     * If set to false, no code will be registered to handle links.
     * Note that if the response to the pjax request is a full page, a normal request will be sent again.
     */
    public $linkSelector = false;

    /**
     * @var string|false the jQuery selector of the forms whose submissions should trigger pjax requests.
     * If not set, all forms with `data-pjax` attribute within the enclosed content of Pjax will trigger pjax requests.
     * If set to false, no code will be registered to handle forms.
     * Note that if the response to the pjax request is a full page, a normal request will be sent again.
     */
    public $formSelector = false;

    /**
     * @return string
     */
    public function getContainer()
    {
        return '#' . $this->id;
    }
}
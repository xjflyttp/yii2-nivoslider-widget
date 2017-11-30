<?php

/**
 * SilderAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://demo.dev7studios.com/nivo-slider/
 */

namespace xj\nivo;

use yii\web\AssetBundle;

class SilderAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-nivoslider-widget/assets';
    public $css = ['nivo-slider.css'];
    public $js = ['jquery.nivo.slider.js'];
    public $depends = ['yii\web\JqueryAsset'];

}

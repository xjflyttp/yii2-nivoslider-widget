<?php

/**
 * SilderAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://demo.dev7studios.com/nivo-slider/
 */

namespace xj\nivo;

use yii\web\AssetBundle;

class SilderAsset extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = ['nivo-slider.css'];
    public $js = [];
    public $depends = ['yii\web\JqueryAsset'];

    private function getJs() {
        return [
            YII_DEBUG ? 'jquery.nivo.slider.js' : 'jquery.nivo.slider.pack.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}

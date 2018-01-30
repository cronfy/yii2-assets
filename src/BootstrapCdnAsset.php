<?php
/**
 * Created by PhpStorm.
 * User: cronfy
 * Date: 15.06.17
 * Time: 13:01
 */

namespace cronfy\yii2Assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class BootstrapCdnAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/src';

    public $css = [
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
    ];

    public $cssOptions = [
        'integrity' => 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u',
        'crossorigin' => 'anonymous'
    ];

    public $js = [
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        // https://github.com/yiisoft/yii2-jui/issues/73 - устраняем конфликт с jquery ui
        'noconflict.js'
    ];

//    public $jsOptions = [
//        'integrity' => 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa',
//        'crossorigin' => 'anonymous'
//    ];

    public $depends = [
        JqueryAsset::class
    ];
}
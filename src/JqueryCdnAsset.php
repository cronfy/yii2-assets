<?php
/**
 * Created by PhpStorm.
 * User: cronfy
 * Date: 15.06.17
 * Time: 13:01
 */

namespace cronfy\yii2Assets;

use yii\web\AssetBundle;

class JqueryCdnAsset extends AssetBundle
{
    public $js = [
        'https://code.jquery.com/jquery-3.2.1.min.js'
    ];

    public $jsOptions = [
        'integrity' => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=',
        'crossorigin' => 'anonymous'
    ];
}
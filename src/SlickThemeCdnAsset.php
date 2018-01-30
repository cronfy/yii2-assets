<?php
/**
 * Created by PhpStorm.
 * User: cronfy
 * Date: 15.06.17
 * Time: 13:01
 */

namespace cronfy\yii2Assets;

use yii\web\AssetBundle;

class SlickThemeCdnAsset extends AssetBundle
{
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'
    ];
}
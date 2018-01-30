<?php
/**
 * Created by PhpStorm.
 * User: cronfy
 * Date: 15.06.17
 * Time: 13:01
 */

namespace cronfy\yii2Assets;

use yii\web\AssetBundle;

class SlickCdnAsset extends AssetBundle
{
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'
    ];

    public $cssOptions = [
        'integrity' => 'sha256-jySGIHdxeqZZvJ9SHgPNjbsBP8roij7/WjgkoGTJICk=',
        'crossorigin' => 'anonymous'
    ];

    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'
    ];

    public $jsOptions = [
        'integrity' => 'sha256-4Cr335oZDYg4Di3OwgUOyqSTri0jUm2+7Gf2kH3zp1I=',
        'crossorigin' => 'anonymous'
    ];
}
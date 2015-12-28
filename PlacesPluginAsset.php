<?php

namespace nevermnd\places;

use yii\web\AssetBundle;

/**
 * Class PlacesPluginAsset
 *
 * @author Thiago Oliveira <thiago.oliveira.gt14@gmail.com>
 */
class PlacesPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/typeahead-addresspicker/dist';
    public $js = [
        'typeahead-addresspicker.js'
    ];
    public $depends = [
        'nevermnd\places\PlacesAsset',
        'nevermnd\places\TypeAheadAsset'
    ];
}
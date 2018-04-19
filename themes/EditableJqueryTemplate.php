<?php

namespace yii2mod\editable\themes;

use yii\web\AssetBundle;

/**
 * Class EditableBootstrapAsset
 *
 * @package yii2mod\editable\bundles
 */
class EditableJqueryTemplate extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/x-editable/dist/jquery-editable';

    /**
     * @var array
     */
    public $css = [
        'css/jquery-editable.css',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];

    /**
     * Init object
     */
    public function init()
    {
        $this->js[] = YII_DEBUG ? 'js/jquery-editable-poshytip.js' : 'js/jquery-editable-poshytip.min.js';
    }
}

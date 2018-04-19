<?php

namespace yii2mod\editable\themes;

use yii\web\AssetBundle;

/**
 * Class EditableBootstrapAsset
 *
 * @package yii2mod\editable\bundles
 */
class EditableJqueryUITemplate extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/x-editable/dist/jqueryui-editable';

    /**
     * @var array
     */
    public $css = [
        'css/jqueryui-editable.css',
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
        $this->js[] = YII_DEBUG ? 'js/jqueryui-editable.js' : 'js/jqueryui-editable.min.js';
    }
}

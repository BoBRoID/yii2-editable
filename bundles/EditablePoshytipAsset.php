<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 19.04.18
 * Time: 14:22
 */

namespace yii2mod\editable\bundles;

use yii\web\AssetBundle;

class EditablePoshytipAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/yii2mod/yii2-editable/assets/poshytip';

    /**
     * @var array
     */
    public $js = [
        'jquery.poshytip.js',
    ];

}

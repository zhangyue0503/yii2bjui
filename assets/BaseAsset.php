<?php
namespace zyblog\bjui\assets;

use yii\web\AssetBundle;

/**
 * DwzJui AssetBundle
 * @since 1.0
 * zhangyue
 */
class BaseAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zyblog/yii2-bjui/B-JUI';
    public $cssOptions = ['media'=>'screen'];
    public $publishOptions = [
        'except'=>[
            '/*.html',           //试用完请打开注释，根目录下的示例不用去资源目录，这里配合left.php中直接显示dwz.js的演示
//            'html/',
            '*.txt',
            '*.md',
            '*.ico',
        ]
    ];
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
    ];




}

<?php
namespace zyblog\bjui\assets;


/**
 * BJuiLteIE9Asset AssetBundle
 * @since 0.1
 * IE Hack文件加载
 */
class BJuiLteIE9Asset extends BaseAsset
{
    public $jsOptions = ['condition' => 'lte IE9','position' => \yii\web\View::POS_END];
    public $css = [
    ];
    public $js = [
        'B-JUI/other/html5shiv.min.js',
        'B-JUI/other/respond.min.js',
        'B-JUI/other/jquery.iframe-transport.js'
    ];
    public $depends = [
    ];


}

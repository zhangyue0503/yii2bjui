<?php
namespace zyblog\bjui\assets;


/**
 * BJuiLteIE7Asset AssetBundle
 * @since 0.1
 * IE Hack文件加载
 */
class BJuiLteIE7Asset extends BaseAsset
{
    public $jsOptions = ['condition' => 'lte IE7','position' => \yii\web\View::POS_END];
    public $css = [
        'B-JUI/themes/css/ie7.css'
    ];
    public $js = [
    ];
    public $depends = [
    ];
}

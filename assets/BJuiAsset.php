<?php
namespace zyblog\bjui\assets;


/**
 * DwzJui AssetBundle
 * @since 1.0
 * zhangyue
 */
class BJuiAsset extends BaseAsset
{
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $cssOptions = ['media'=>'screen'];
    public $css = [
        //bootstrap - css
        'B-JUI/themes/css/bootstrap.css',
        //core - css
        'B-JUI/themes/css/style.css',
        ['B-JUI/themes/blue/core.css',"id"=>"bjui-link-theme"], //id="bjui-link-theme"
        ['B-JUI/themes/css/fontsize.css','id'=>'bjui-fonts'], //id="bjui-link-theme"
        //plug - css
        'B-JUI/plugins/kindeditor_4.1.11/themes/default/default.css',
        'B-JUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css',
        'B-JUI/plugins/nice-validator-1.0.7/jquery.validator.css',
        'B-JUI/plugins/bootstrapSelect/bootstrap-select.css',
        'B-JUI/plugins/webuploader/webuploader.css',
        'B-JUI/themes/css/FA/css/font-awesome.min.css',
        'B-JUI/plugins/uploadify/css/uploadify.css',
        //ighlight && ZeroClipboard
        'assets/prettify.css',
        'assets/ZeroClipboard.css'
    ];
    public $js = [
        //jquery
        'B-JUI/js/jquery-1.11.3.min.js',
        'B-JUI/js/jquery.cookie.js',
        //bjui
        'B-JUI/js/bjui-all.min.js',
        //swfupload for kindeditor
        'B-JUI/plugins/swfupload/swfupload.js',
        //webuploader
        'B-JUI/plugins/webuploader/webuploader.js',
        //kindeditor
        'B-JUI/plugins/kindeditor_4.1.11/kindeditor-all-min.js',
        'B-JUI/plugins/kindeditor_4.1.11/lang/zh-CN.js',
        //colorpicker
        'B-JUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js',
        //ztree
        'B-JUI/plugins/ztree/jquery.ztree.all-3.5.js',
        //nice validate
        'B-JUI/plugins/nice-validator-1.0.7/jquery.validator.js',
        'B-JUI/plugins/nice-validator-1.0.7/jquery.validator.themes.js',
        //bootstrap plugins
        'B-JUI/plugins/bootstrap.min.js',
        'B-JUI/plugins/bootstrapSelect/bootstrap-select.min.js',
        'B-JUI/plugins/bootstrapSelect/defaults-zh_CN.min.js',
        //icheck
        'B-JUI/plugins/icheck/icheck.min.js',
        //HighCharts
        'B-JUI/plugins/highcharts/highcharts.js',
        'B-JUI/plugins/highcharts/highcharts-3d.js',
        'B-JUI/plugins/highcharts/themes/gray.js',
        //other plugins
        'B-JUI/plugins/other/jquery.autosize.js',
        'B-JUI/plugins/uploadify/scripts/jquery.uploadify.min.js',
        'B-JUI/plugins/download/jquery.fileDownload.js',
        //ighlight && ZeroClipboard
        'assets/prettify.js',
        'assets/ZeroClipboard.js',
        //IE10 viewport hack for Surface/desktop Windows 8 bug
        'B-JUI/other/ie10-viewport-bug-workaround.js'
    ];
    public $depends = [

    ];




}

<?php
namespace zyblog\bjui\helpers;

/**
 * 参考Yii 1.1: dwzinterface
 * http://www.yiiframework.com/extension/dwzinterface/
 * Class BJuiHelper
 * @package zyblog\bjui\helpers
 * bjui1.3基本上操作都放在了data-options中去处理了，返回值官方文档上也只列出了statusCode和message两个
 * 源码中似乎也取消了根据返回值来进行的操作
 * 因此，此处也只返回这两个字段
 */
class BJuiHelper
{
	
	static public function jsonOk($message,$statusCode='200'){
		echo json_encode(
						array(
							'statusCode'=>$statusCode, 'message'=>$message,
						)
				);
		\Yii::$app->end();
	}
	
	static public function jsonError($message,$statusCode='300'){
		echo json_encode(
				array(
						'statusCode'=>$statusCode, 'message'=>$message,
				)
		);
		\Yii::$app->end();
	}
}
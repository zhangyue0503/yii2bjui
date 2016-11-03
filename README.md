#Yii2 B-JUI富文本后台框架

=======================================

##安装说明

composer安装：

```
php composer.phar require zyblog/yii2-bjui "*"
```

手动安装：

githup下载后，在vendor目录下创建zyblog目录，代码放进去，去yiisoft\extensions.php下方增加：

```
'zyblog/bjui' =>  array (
    'name' => 'zyblog/bjui',
    'version' => '1.0',
    'alias' =>
        array (
            '@zyblog/bjui' => $vendorDir . '/zyblog/yii2-bjui',
        ),
),
```
##使用

配置文件中：

```php
'view' => [
    'theme' => [
        'pathMap' => [
            '@app/views' => '@vendor/zyblog/yii2-bjui/example-views'
        ],
    ],
],
```

或者直接把example-views里的内容拷贝到项目中替换原文件

##集成：

**B-JUI框架1.31**

http://www.b-jui.com/

使用问题及各种插件请查阅官方文档及相关DEMO

#kindeditor上传文件

可参考kindeditor相关示例自己写

上传配置：

```html
<textarea data-options="{uploadJson:'上传路径'}" >

```


<!--[if lte IE 7]>
<div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
<![endif]-->
<div id="bjui-top" class="bjui-header">
    <div class="container_fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapsenavbar" data-target="#bjui-top-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse" id="bjui-top-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="datetime"><a><span id="bjui-date">0000/00/00</span> <span id="bjui-clock">00:00:00</span></a></li>
                <li><a href="#">账号：BJUI</a></li>
                <!-- 建一个ExampleController，actionTest方法，里面调用BJuiHelper::jsonOk来调试 -->
                <li><a data-toggle="doajax" data-options="{reload:false,url:'<?= urldecode(\yii\helpers\Url::toRoute("example/test")); ?>'}">角色：管理员</a></li>
                <script type="text/javascript">
                    //测试doajax及okCallback拦截
                    //data-options里增加okCallback=okcel来调试拦截
                    function okcel(json,option){
                        alert(JSON.stringify(json));
                        alert(option.reload); //是否刷新当前页面
                    };
                    </script>
                <li><a href="<?= $dwzAssetsUrl?>/changepassword.html" data-toggle="dialog" data-id="sys_user_changepass" data-mask="true" data-width="400" data-height="300">修改密码</a></li>
                <li><a href="<?= $dwzAssetsUrl?>/login.html" style="font-weight:bold;">&nbsp;<i class="fa fa-power-off"></i> 注销登陆</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle bjui-fonts-tit" data-toggle="dropdown" title="更改字号"><i class="fa fa-font"></i> 大</a>
                    <ul class="dropdown-menu" role="menu" id="bjui-fonts">
                        <li><a href="javascript:;" class="bjui-font-a" data-toggle="fonts"><i class="fa fa-font"></i> 特大</a></li>
                        <li><a href="javascript:;" class="bjui-font-b" data-toggle="fonts"><i class="fa fa-font"></i> 大</a></li>
                        <li><a href="javascript:;" class="bjui-font-c" data-toggle="fonts"><i class="fa fa-font"></i> 中</a></li>
                        <li><a href="javascript:;" class="bjui-font-d" data-toggle="fonts"><i class="fa fa-font"></i> 小</a></li>
                    </ul>
                </li>
                <li class="dropdown active"><a href="#" class="dropdown-toggle theme" data-toggle="dropdown" title="切换皮肤"><i class="fa fa-tree"></i></a>
                    <ul class="dropdown-menu" role="menu" id="bjui-themes">
                        <!--
                        <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                        <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i class="fa fa-tree"></i> 橘子红了</a></li>
                        -->
                        <li><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i class="fa fa-tree"></i> 紫罗兰</a></li>
                        <li class="active"><a href="javascript:;" class="theme_blue" data-toggle="theme" data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 天空蓝</a></li>
                        <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i class="fa fa-tree"></i> 绿草如茵</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;" onclick="bjui_index_exchange()" title="横向收缩/充满屏幕"><i class="fa fa-exchange"></i></a></li>
            </ul>
        </nav>
    </div>
</div>
<header class="navbar bjui-header" id="bjui-navbar">
    <div class="container_fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" id="bjui-navbar-collapsebtn" data-toggle="collapsenavbar" data-target="#bjui-navbar-collapse" aria-expanded="false">
                <i class="fa fa-angle-double-right"></i>
            </button>
            <a class="navbar-brand" href="http://b-jui.com"><img src="<?= $dwzAssetsUrl?>/images/logo.png" height="30"></a>
        </div>
        <nav class="collapse navbar-collapse" id="bjui-navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="bjui-hnav-navbar">
                <?php
                //代码中去实现
                //比如我在登录成功后，在index方法中根据权限获取菜单
                //左侧菜单根据/BJUI/json/menu-*.json来组织
//                $assetPath = $this->getView()->getAssetManager()->getPublishedUrl('@vendor/zyblog/yii2-bjui/B-JUI');
//                $menus = [
//                    "测试"=>urldecode(Url::toRoute("example/example-menu-json")),
//                    "表单相关"=>$assetPath."/json/menu-form.json",
//                    "基础组件"=>$assetPath."/json/menu-base.json",
//                    "数据表格(Datagrid)"=>$assetPath."/json/menu-datagrid.json",
//                ];
//                $view = Yii::$app->view;

                //example/example-menu-json
//                public function actionExampleMenuJson(){
//                    $menu = [
//                        "name"=>"测试",
//                        "children"=>[
//                            ["id"=>"a",
//                                "name"=>"试试",
//                                "target"=>"navtab",
//                                "url"=>"site/a"]
//                        ]
//
//                    ];
//                    echo json_encode($menu,true);exit;
//                }

                $i = 0;
                if($this->params['menus'] && is_array($this->params['menus']) && count($this->params['menus'])>0){
                    foreach ($this->params['menus'] as $key=>$value){
                ?>
                <li <?php if($i==0){echo 'class="active"';} ?>>
                    <a href="<?= $value?>" data-toggle="sidenav" data-id-key="targetid"><?= $key?></a>
                </li>
                <?php $i++;}} ?>
<!--                <li>-->
<!--                    <a href="--><?//= $dwzAssetsUrl?><!--/json/menu-base.json" data-toggle="sidenav" data-id-key="targetid">基础组件</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="--><?//= $dwzAssetsUrl?><!--/json/menu-datagrid.json" data-toggle="sidenav" data-id-key="targetid">数据表格(Datagrid)</a>-->
<!--                </li>-->
                <li>
                    <a href="javascript:;" data-toggle="sidenav" data-tree="true" data-tree-options="{onClick:MainMenuClick}" data-id-key="targetid">待续……</a>
                    <script class="items"></script>
                </li>
                <li>
                    <a href="1.2" target="_blank">旧版DEMO</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
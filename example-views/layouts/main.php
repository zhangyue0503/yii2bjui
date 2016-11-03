<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

zyblog\bjui\assets\BJuiLteIE7Asset::register($this);
zyblog\bjui\assets\BJuiAsset::register($this);
zyblog\bjui\assets\BJuiLteIE9Asset::register($this);
$dwzAssetsUrl = $this->getAssetManager()->getPublishedUrl('@vendor/zyblog/yii2-bjui/B-JUI');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>B-JUI 前端管理框架</title>
	<meta name="Keywords" content="B-JUI,Bootstrap,jquery,ui,前端,框架,开源,OSC,开源框架,knaan"/>
	<meta name="Description" content="B-JUI(Best jQuery UI)前端管理框架。轻松开发，专注您的业务，从B-JUI开始！"/>
	<?= Html::csrfMetaTags() ?>
	<?php $this->head() ?>
	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" href="<?= $dwzAssetsUrl?>/assets/ico/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" href="<?= $dwzAssetsUrl?>/assets/ico/favicon.png">
	<script type="text/javascript">
		var YIIAsserPath = "<?= $dwzAssetsUrl?>/";
		$(function() {
			BJUI.init({
				JSPATH       : '<?= $dwzAssetsUrl?>/B-JUI',         //[可选]框架路径
				PLUGINPATH   : '<?= $dwzAssetsUrl?>/B-JUI/plugins/', //[可选]插件路径
				loginInfo    : {url:'login_timeout.html', title:'登录', width:440, height:240}, // 会话超时后弹出登录对话框
				statusCode   : {ok:200, error:300, timeout:301}, //[可选]
				ajaxTimeout  : 300000, //[可选]全局Ajax请求超时时间(毫秒)
				alertTimeout : 3000,  //[可选]信息提示[info/correct]自动关闭延时(毫秒)
				pageInfo     : {total:'totalRow', pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
				keys         : {statusCode:'statusCode', message:'message'}, //[可选]
				ui           : {
					sidenavWidth     : 220,
					showSlidebar     : true, //[可选]左侧导航栏锁定/隐藏
					overwriteHomeTab : false //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
				},
				debug        : true,    // [可选]调试模式 [true|false，默认false]
				theme        : 'green' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
			})
			//时钟
			var today = new Date(), time = today.getTime()
			$('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
			setInterval(function() {
				today = new Date(today.setSeconds(today.getSeconds() + 1))
				$('#bjui-clock').html(today.formatDate('HH:mm:ss'))
			}, 1000)
		})

		/*window.onbeforeunload = function(){
		 return "确定要关闭本系统 ?";
		 }*/

		//菜单-事件-zTree
		function MainMenuClick(event, treeId, treeNode) {
			if (treeNode.target && treeNode.target == 'dialog' || treeNode.target == 'navtab')
				event.preventDefault()

			if (treeNode.isParent) {
				var zTree = $.fn.zTree.getZTreeObj(treeId)

				zTree.expandNode(treeNode)
				return
			}

			if (treeNode.target && treeNode.target == 'dialog')
				$(event.target).dialog({id:treeNode.targetid, url:treeNode.url, title:treeNode.name})
			else if (treeNode.target && treeNode.target == 'navtab')
				$(event.target).navtab({id:treeNode.targetid, url:treeNode.url, title:treeNode.name, fresh:treeNode.fresh, external:treeNode.external})
		}

		// 满屏开关
		var bjui_index_container = 'container_fluid'

		function bjui_index_exchange() {
			bjui_index_container = bjui_index_container == 'container_fluid' ? 'container' : 'container_fluid'

			$('#bjui-top').find('> div').attr('class', bjui_index_container)
			$('#bjui-navbar').find('> div').attr('class', bjui_index_container)
			$('#bjui-body-box').find('> div').attr('class', bjui_index_container)
		}
	</script>
</head>
<body>
<?php $this->beginBody() ?>
<?= $this->render('header.php',['dwzAssetsUrl'=>$dwzAssetsUrl]) ?>
<div id="bjui-body-box">
	<div class="container_fluid" id="bjui-body">
		<?= $this->render('left.php',['dwzAssetsUrl'=>$dwzAssetsUrl]) ?>
		<div id="bjui-navtab" class="tabsPage">
			<div id="bjui-sidenav-btn" data-toggle="tooltip" data-title="显示左侧菜单" data-placement="right">
				<i class="fa fa-bars"></i>
			</div>
			<div class="tabsPageHeader">
				<div class="tabsPageHeaderContent">
					<ul class="navtab-tab nav nav-tabs">
						<li><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
					</ul>
				</div>
				<div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
				<div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
				<div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
			</div>
			<ul class="tabsMoreList">
				<li><a href="javascript:;">#maintab#</a></li>
			</ul>
			<div class="navtab-panel tabsPageContent">
				<div class="navtabPage unitBox">
					<?= $content ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

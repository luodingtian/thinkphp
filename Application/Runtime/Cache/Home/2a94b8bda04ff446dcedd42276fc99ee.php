<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>泛能船舶后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <!--<link rel="stylesheet" type="text/css" href="/think/Public/frame/global.css" media="all">-->
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/layui/css/layui.css" media="all">
    <!--<link rel="stylesheet" type="text/css" href="/think/Public/mylib/css/common.css" media="all">-->
    <link rel="stylesheet" href="//at.alicdn.com/t/font_lhdrjs93f475vcxr.css">
    <script type="text/javascript" src="/think/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
	<link rel="stylesheet" type="text/css" href="/think/Public/app/css/adminstyle.css" media="all">

    
</head>
<body>

	<div class="layui-layout layui-layout-admin" id="layui_layout">
		<!-- 顶部区域 -->
		<div class=" header header-demo">
			<!-- logo区域 -->
			<div class="admin-logo-box">
				<span class="logo-td">
					<i class="iconfont icon-admin my-font-25 "></i>
					<span class="logo-name my-margin-l10" title="logo">后台管理</span>
				</span>
			</div>
			<!--<div class="larry-side-menu">
				<i class="iconfont icon-3dot-v my-font-30" aria-hidden="true"></i>
			</div>-->
			<!-- 右侧导航 -->
			<span class="account">
					<img class="header-img my-valign-m" src="/think/Public/app/img/head.png" alt="头像" >
					<span class="my-valign-m my-margin-l5"><?php echo ($username); ?></span>
				</span>
			<div class="account-wrap">
				<span class="exit">
					<a href="<?php echo U('Login/dologout');?>" >
						<i class="iconfont icon-shutdown my-font-25 my-cl-them"></i>
					</a>
				</span>
			</div>
		</div>
		<!-- 左侧侧边导航开始 -->
		<div class="layui-side layui-side-bg layui-larry-side" id="larry-side">
			<div class="layui-side-scroll" id="larry-nav-side" lay-filter="side">
				<!-- 左侧菜单 -->
				<ul class="layui-nav layui-nav-tree">
					<!--<li class="layui-nav-item layui-this">
						<a href="javascript:;" data-url="main.html">
							<i class="iconfont icon-explore" ></i>
							<span>后台首页</span>
						</a>
					</li>-->
					<!-- 个人信息 -->
					<li class="layui-nav-item layui-nav-itemed">
						<a href="javascript:;">
							<i class="iconfont icon-statistic" ></i>
							<span>后台管理</span>
							<em class="layui-nav-more"></em>
						</a>
						<dl class="layui-nav-child">
							<dd class="layui-this">
								<a href="javascript:;" data-url="<?php echo U('shipList');?>">
									<i class="iconfont icon-ship"></i>
									<span>船舶列表</span>
								</a>
							</dd>
							<dd>
								<a href="javascript:;" data-url="<?php echo U('dataCenter');?>">
									<i class="iconfont icon-shuju"></i>
									<span>数据中心</span>
								</a>
							</dd>
							<dd>
								<a href="javascript:;" data-url="<?php echo U('shipControl');?>">
									<i class="iconfont icon-control" ></i>
									<span>控制船舶</span>
								</a>
							</dd>
							<dd>
								<a href="javascript:;" data-url="<?php echo U('shipPosition');?>">
									<i class="iconfont icon-dingwei" ></i>
									<span>船舶定位</span>
								</a>
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>

		<!-- 左侧侧边导航结束 -->
		<!-- 右侧主体内容 -->
		<div class="layui-body" id="larry-body" style="bottom: 0;border-left: solid 5px #0099ff;">
			<div class="layui-tab layui-tab-card larry-tab-box" id="larry-tab" lay-filter="demo" lay-allowclose="true">
				<ul class="layui-tab-title">
					<li class="layui-this" id="admin-home"><i class="iconfont icon-ship"></i><em>船舶列表</em></li>
				</ul>
				<div class="layui-tab-content" style="min-height: 150px; ">
					<div class="layui-tab-item layui-show">
						<iframe class="larry-iframe" data-id='0' src="<?php echo U('Home/Index/shipList');?>"></iframe>
					</div>
				</div>
			</div>


		</div>
		<!-- 底部区域 -->
		<div class="layui-footer layui-larry-foot" id="larry-footer">
			<div class="layui-mian">
				<div class="larry-footer-left my-bolder">
					泛能船舶管理&copy;2017
				</div>
			</div>
		</div>
	</div>
	<!-- 加载js文件-->


    <script type="text/javascript" src="/think/Public/frame/layui/layui.js"></script>
    <script>
        //实例化 layer
        layui.use('layer', function(){
            var layer = layui.layer;

        });

        $('.search-input').on('focus',function(){
            layer.tips('输入搜索内容', '.search-input', {
                tips: [1, '#111'] //还可配置颜色
            });
        })
    </script>



	<script type="text/javascript" src="/think/Public/app/js/larry.js"></script>
	<!--<script type="text/javascript" src="/think/Public/app/js/index.js"></script>-->

</body>
</html>
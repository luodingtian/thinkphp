<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>泛能船舶管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/mylib/css/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/frame/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/mylib/css/myBase.css" media="all">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_xu6iuc22e351att9.css">
    <script type="text/javascript" src="/thinkphp/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/app/css/adminstyle.css" media="all">

    
    <style>

        .info-title{
            padding: 5px 0;
            display: inline-block;
            border-bottom:3px solid #0099ff;
            margin: 10px auto 0 auto;
        }
        .total-ul li{
            width: 23.5%;
            min-width: 200px;
            float: left;
        }
        .total-ul li:not(:first-child){
            margin-left:1.5%;
        }
        .total-wrap{
            background: #fff;
            width: 100%;
            border-radius: 10px;
            border-bottom:10px solid #0099ff;
            text-align: center;
            padding-bottom: 40%;
            position: relative;
            box-shadow: 0 0 1px 1px #eee;
            margin-top:10px;

        }
        .total-td{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -moz-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            -o-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        .layui-elem-quote{

        }
        .search-wrap{
            position: relative;
        }
        .icon-search{
            position: absolute;
            right: 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 20px;
            color: #999999;
        }

        .search-wrap:hover .search-input{
            border: 1px solid #0099ff!important;
        }
        .search-wrap:hover .icon-search{
            color: #0099ff;
        }
        .layui-elem-quote{
            padding: 10px 15px;
        }
        .number{
            font-size: 3rem;
            color: #0099ff;
        }
        .unit{
            position: absolute;
            top: 12px;
            right: -16px;
            color: #0099ff;
        }
        .num-wrap{
            position: relative;
        }
        .num-title{
            color: #888;
        }
        .today-tab {
            border-collapse: separate;
            border-radius: 10px;
        }
        .today-tab thead th:first-child{
            border-radius: 10px 0 0 0 ;
        }
        .today-tab thead th:last-child{
            border-radius:0 10px 0 0 ;
        }
        .today-tab td{
            text-align: center;
            white-space: nowrap;
        }
        .today-tab thead th{
            text-align: center;
            color: #fff;
            background: #0099ff;
            padding: 10px 0;
            white-space: nowrap;
        }
        .today-tab thead th:not(:last-child):after{
            content: '';
            display: inline-block;
            width: 1px;
            height: 18px;
            vertical-align: middle;
            background: #fff;
            float: right;
        }
        .icon-download{
            cursor: pointer;
        }
        .checkout-btn{
            background: #fff;
            border: 1px solid #0099ff;
            border-radius: 100px;
            color: #0099ff;
            padding: 3px 0;
            width: 60px;
        }
        .checkout-btn:hover{
            background: #0099ff;
            color: #fff;
        }
        .control-btn{
            background: #fff;
            border: 1px solid #55bb88;
            border-radius: 100px;
            color: #55bb88;
            padding: 3px 0;
            width: 60px;
        }
        .control-btn:hover{
            background: #55bb88;
            color: #fff;
        }
        #form1{
            display: inline-block;
        }
        .bt-submit{
            position: fixed;
            bottom: -15px;
            left: 0;
            width: 100%;

        }
        .header{
            height: 50px;
            line-height: 50px;
            width: 100%;
            background: #393D49;
            font-size: 20px;
            color: #fff;
            text-align: center;
            border-bottom:5px solid #0099ff;
        }
        .sidebar{
            position: fixed;
            top: 50px!important;
            left: 0;
            background: #393D49;
        }
    </style>

</head>
<body>

    <div class="header">
       蓝色方程-参考资料
    </div>
    <div class="layui-side layui-side-bg  layui-larry-side sidebar" id="larry-side">
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
                    <!--<a href="javascript:;">
                        <i class="iconfont icon-lesson" ></i>
                        <span>我的课程</span>
                        <em class="layui-nav-more"></em>
                    </a>-->
                    <dl class="layui-nav-child">
                        <dd class="layui-this">
                            <a href="javascript:;" data-url="img-word">
                                <i class="iconfont icon-tuwen"></i>
                                <span>图文教程</span>
                            </a>
                        </dd>
                    </dl>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;" data-url="http://www.jq22.com/">
                                <i class="iconfont icon-play"></i>
                                <span>视频教程</span>
                            </a>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <!-- 右侧主体内容 -->
    <div class="layui-body" id="larry-body" style="bottom: 0;border-left: solid 5px #0099ff;">
        <div class="layui-tab layui-tab-card larry-tab-box" id="larry-tab" lay-filter="demo" lay-allowclose="true">
            <div class="layui-tab-content" style="min-height: 150px; ">
                <div class="layui-tab-item layui-show">
                    <iframe class="larry-iframe" data-id='0' src="https://ww.baidu.com"></iframe>
                </div>
            </div>
        </div>
        <div class="layui-footer layui-larry-foot" id="larry-footer">
            <div class="layui-mian">
                <div class="larry-footer-left my-bolder">
                    蓝色方程学习系统&copy;2017
                </div>
            </div>
        </div>

    </div>
    <!-- 底部区域 -->





    <script type="text/javascript" src="/thinkphp/Public/frame/layui/layui.js"></script>
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


    <script type="text/javascript" src="/thinkphp/Public/mylib/js/fontchange.js"></script>


    <script type="text/javascript" src="/thinkphp/Public/app/js/larry.js"></script>

    <script>
        layui.use(['layer','element'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var element = layui.element()

        });



    </script>

</body>
</html>
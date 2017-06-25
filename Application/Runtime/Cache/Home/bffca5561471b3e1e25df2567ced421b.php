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
    <!--<link rel="stylesheet" type="text/css" href="/thinkphp/Public/mylib/css/common.css" media="all">-->
    <link rel="stylesheet" href="//at.alicdn.com/t/font_lhdrjs93f475vcxr.css">
    <script type="text/javascript" src="/thinkphp/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
    
    <style>
       
    </style>


</head>
<body>

    <a href="">调试刷新</a>
    <div class="map-wrap">
        <img src="/thinkphp/Public/mylib/img/map.jpg" alt="funnenergy">

    </div>


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


    <script>

    </script>

</body>
</html>
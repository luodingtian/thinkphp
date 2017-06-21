<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增用户</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/mylib/css/common.css" media="all">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_9vhc88qfufc7hkt9.css">
    <script type="text/javascript" src="/think/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
    
    <style>
        .account-panel{
            width: 600px;
            padding: 15px;
            margin: 20px auto;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        .account-tab td{
            padding:5px 0 ;
        }
        .layui-input-inline input{
            width: 310px;
        }
        .layui-form .layui-input-inline input{
            width: 100px;
        }
    </style>


</head>
<body>

    <a href="">刷新</a>
    <div class="account-panel">
        <table class="my-width-100 account-tab">
            <tr>
                <td>单次清洗费用</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="number" name="phone"   placeholder="输入单次清洗费用" autocomplete="off" class="layui-input">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit" class="layui-btn" style="width: 200px">提交保存</button>
                </td>
            </tr>
        </table>
    </div>


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


    <script type="text/javascript" src="/think/Public/mylib/js/fontchange.js"></script>


    <script>

    </script>

</body>
</html>
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
        .control-ul li{
            width: 32%;
            float: left;
            display: table;
            background: #fff;
            border-radius:5px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
            padding:50px 0px;

        }
        .control-ul li:not(:first-child){
            margin-left: 2%;
        }
        .control-ul li{
            display: table-cell;
            vertical-align: middle;

        }
        .control-ul li img{
            width: 150px;
            height: 150px;
        }
        .control-ul li button:hover{
            background: #0099ff!important;
            color: #fff;
            
        }
    </style>


</head>
<body>

    <a href="">刷新</a>
    <blockquote class="layui-elem-quote my-bg-white choose-wrap ">
        <div class="layui-form">
            <span class="my-margin-l5">船舶选择</span>
            <div class="layui-input-inline">
                <select name="shipId" lay-verify="required" id="shipSel">
                    <option value="0">--请选择船舶--</option>

                        <option value="<?php echo ($vo["id"]); ?>">船舶1</option>
                        <option value="<?php echo ($vo["id"]); ?>">船舶3</option>
                        <option value="<?php echo ($vo["id"]); ?>">船舶5</option>

                </select>

            </div>
        </div>

    </blockquote>
    <div class="control-wrap my-padding-10">
        <ul class="control-ul my-cf">
            <li>
                <div align="center">
                    <img src="/thinkphp/Public/mylib/img/danger.png" alt="">
                    <div class="my-margin-t15 my-font-16 my-bolder">故障提醒</div>
                    <button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary">已开启</button>
                </div>

            </li>
            <li>
                <div align="center">
                    <img src="/thinkphp/Public/mylib/img/off1.png" alt="">
                    <div class="my-margin-t15 my-font-16 my-bolder">切断2#放电</div>
                    <button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary">已开启</button>
                </div>

            </li>
            <li>
                <div align="center">
                    <img src="/thinkphp/Public/mylib/img/off2.png" alt="">
                    <div class="my-margin-t15 my-font-16 my-bolder">切断2#放电</div>
                    <button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary">已关闭</button>
                </div>

            </li>
        </ul>
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
        layui.use(['form'], function () {
            var form = layui.form();
        });
        $(function () {
            $(' .control-ul li button').on('click', function () {
                if($(this).hasClass('my-bg-them')){
                    $(this).removeClass('my-bg-them my-cl-white').text('已关闭');
                }else{
                    $(this).addClass('my-bg-them my-cl-white').text('已开启');
                }
            })
        })
    </script>

</body>
</html>
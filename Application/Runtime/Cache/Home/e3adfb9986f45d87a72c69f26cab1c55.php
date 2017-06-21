<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>今日清洗</title>
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
        body{
            padding: 15px;
        }
        .info-title{
            padding: 5px 0;
            display: inline-block;
            border-bottom:3px solid #009688;
            margin: 10px auto 0 auto;
        }
        .total-ul li{
            width: 49%;
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
            border-bottom:10px solid #009688;
            text-align: center;
            padding-bottom: 20%;
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
            display: -webkit-flex; /* Safari */
            display: flex;
            flex-direction: row;
            justify-content: space-between;
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
        .search-input{
            padding-right: 50px;
            height: 34px;
            line-height: 34px;
            font-size: 14px;
        }
        .search-wrap:hover .search-input{
            border: 1px solid #009688!important;
        }
        .search-wrap:hover .icon-search{
            color: #009688;
        }
        .layui-elem-quote{
            padding: 10px 15px;
        }
        .refresh-btn{
            height: 34px;
            line-height: 34px;
            font-size: 14px;
        }
        .number{
            font-size: 3rem;
            color: #009688;
        }
        .unit{
            position: absolute;
            top: 12px;
            right: -16px;
            color: #009688;
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
            margin-top: 25px;
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
            background: #009688;
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
    </style>

</head>
<body>

    <blockquote class="layui-elem-quote my-bg-white">
        <div style="line-height: 30px;font-size: 16px">用户概览</div>
        <div>
            <div class="layui-input-inline search-wrap">
                <input type="text" placeholder="搜索"  class="layui-input search-input">
                <i class="iconfont icon-search my-pointer"></i>
            </div>
            <a href="">
                <button class="layui-btn   my-fr my-margin-l30 refresh-btn"><i class="iconfont icon-refresh my-margin-r5"></i>刷新</button>
            </a>
        </div>
    </blockquote>
    <ul class="total-ul my-cf">
        <li>
            <div class="total-wrap">
                <div class="total-td">
                    <div class="num-wrap">
                        <span class="number">600</span>
                        <span class="unit">人</span>
                    </div>
                    <p class="num-title">新增用户</p>
                </div>
            </div>
        </li>
        <li>
            <div class="total-wrap">
                <div class="total-td">
                    <div class="num-wrap">
                        <span class="number">5600</span>
                        <span class="unit">人</span>
                    </div>
                    <p class="num-title">已有用户</p>
                </div>
            </div>
        </li>
    </ul>
    <table class="layui-table today-tab " lay-skin="line">
        <thead>
        <tr class="my-bg-them my-text-center">
            <th>门店名称</th>
            <th>手机号码</th>
            <th>所属地区</th>
            <th>详细地址</th>
            <th>累计充值(元)</th>
            <th>操作</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>路飞洗车店</td>
            <td>15505929092</td>
            <td>内蒙古地区-呼和浩特市-特科哈尔干区</td>
            <td>盟里路亚-双水村58号</td>
            <td>88888</td>
            <td><button class="layui-btn">编辑</button></td>
        </tr>
        <tr>
            <td>路飞洗车店</td>
            <td>15505929092</td>
            <td>内蒙古地区-呼和浩特市-特科哈尔干区</td>
            <td>盟里路亚-双水村58号</td>
            <td>88888</td>
            <td><button class="layui-btn">编辑</button></td>
        </tr>
        <tr>
            <td>路飞洗车店</td>
            <td>15505929092</td>
            <td>内蒙古地区-呼和浩特市-特科哈尔干区</td>
            <td>盟里路亚-双水村58号</td>
            <td>88888</td>
            <td><button class="layui-btn">编辑</button></td>

        </tr>
        <tr>
            <td>路飞洗车店</td>
            <td>15505929092</td>
            <td>内蒙古地区-呼和浩特市-特科哈尔干区</td>
            <td>盟里路亚-双水村58号</td>
            <td>88888</td>
            <td><button class="layui-btn edit-btn">编辑</button></td>
        </tr>


        </tbody>
    </table>
    <div class="larry-table-page clearfix">
        <div id="page" class="page"></div>
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
        layui.use(['jquery','layer','element','laypage'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var element = layui.element();
            var laypage = layui.laypage;
            laypage({
                cont: 'page',
                pages: 10 //总页数
                ,
                groups: 5 //连续显示分页数
                ,
                jump: function(obj, first) {
                    //得到了当前页，用于向服务端请求对应数据
                    var curr = obj.curr;
                    if(!first) {
                        //layer.msg('第 '+ obj.curr +' 页');
                    }
                }
            });

            $('.edit-btn').on('click', function () {
                var index = layer.open({
                    type: 2,
                    title:'修改用户信息',
                    content: "<?php echo U('test/edit');?>",
                    area: ['90%', '90%'],
                    maxmin: true
                });
            })

        });
    </script>

</body>
</html>
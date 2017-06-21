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
    <link rel="stylesheet" href="//at.alicdn.com/t/font_gimrgenqdsvjwcdi.css">
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
            margin-left:2%;
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
        <div style="line-height: 30px;font-size: 16px" class="layui-form">
           时间范围筛选
            <div class="layui-input-inline my-margin-l5">
                <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
            </div>
            至
            <div class="layui-input-inline">
                <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
            </div>
            <button class="layui-btn my-margin-l20" >确定筛选</button>
            <span style="margin-left: 50px;color: #009688;cursor: pointer" ><i class="iconfont icon-excel my-margin-r5"></i>导出表格</span>
        </div>
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
                        <span class="number">85600</span>
                        <span class="unit">￥</span>
                    </div>
                    <p class="num-title">充值金额</p>
                </div>
            </div>
        </li>
        <li>
            <div class="total-wrap">
                <div class="total-td">
                    <div class="num-wrap">
                        <span class="number">5600</span>
                        <span class="unit">次</span>
                    </div>
                    <p class="num-title">充值次数</p>
                </div>
            </div>
        </li>
    </ul>
    <span class="info-title">消费明细</span>
    <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
        <thead >
        <tr class="my-bg-them my-text-center" >
            <th>账号</th>
            <th>时间</th>
            <th>门店名称</th>
            <th>充值金额(元)</th>
            <th>账户余额(元)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>15505929092</td>
            <td>2017-04-04 12:30</td>
            <td>集美宝马4S店</td>
            <td>888</td>
            <td>1208</td>
        </tr>
        <tr>
            <td>15505929092</td>
            <td>2017-04-04 12:30</td>
            <td>集美宝马4S店</td>
            <td>888</td>
            <td>1208</td>
        </tr>
        <tr>
            <td>15505929092</td>
            <td>2017-04-04 12:30</td>
            <td>集美宝马4S店</td>
            <td>888</td>
            <td>1208</td>
        </tr>
        <tr>
            <td>15505929092</td>
            <td>2017-04-04 12:30</td>
            <td>集美宝马4S店</td>
            <td>888</td>
            <td>1208</td>
        </tr>
        <tr>
            <td>15505929092</td>
            <td>2017-04-04 12:30</td>
            <td>集美宝马4S店</td>
            <td>888</td>
            <td>1208</td>
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


    <script type="text/javascript" src="/think/Public/frame/layui/lay/modules/form.js"></script>
    <script type="text/javascript" src="/think/Public/frame/layui/lay/modules/laydate.js"></script>

    <script>
        layui.use(['jquery','layer','element','laypage','laydate','form'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var form = layui.form();
            var element = layui.element(),
                    laypage = layui.laypage;
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


            var laydate = layui.laydate;
            var start = {
                min: laydate.now()
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                    end.min = datas; //开始日选好后，重置结束日的最小日期
                    end.start = datas //将结束日的初始值设定为开始日
                }
            };

            var end = {
                min: laydate.now()
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                    start.max = datas; //结束日选好后，重置开始日的最大日期
                }
            };
            document.getElementById('LAY_demorange_s').onclick = function(){
                start.elem = this;
                laydate(start);
            }
            document.getElementById('LAY_demorange_e').onclick = function(){
                end.elem = this
                laydate(end);
            }
        });
    </script>

</body>
</html>
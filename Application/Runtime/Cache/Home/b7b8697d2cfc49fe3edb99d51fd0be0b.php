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
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/mylib/css/common.css" media="all">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_lhdrjs93f475vcxr.css">
    <script type="text/javascript" src="/think/Public/mylib/js/jquery-1.11.1.min.js"></script>
    


    
    <style>
        body{
            padding: 15px;
        }
        .info-title{
            padding: 5px 0;
            display: inline-block;
            border-bottom:3px solid #0099ff;
            margin: 10px auto 0 auto;
        }
        .total-ul li{
            width: 33.33%;
            min-width: 200px;
            float: left;
            position: relative;
        }
       .v-title,.a-title,.r-title{
           position: absolute;
           left: 50%;
           bottom: 20px;
           -webkit-transform: translateX(-50%);
           -moz-transform: translateX(-50%);
           -ms-transform: translateX(-50%);
           -o-transform: translateX(-50%);
           transform: translateX(-50%);
       }
        .total-wrap{
            background: #fff;
            width: 100%;
            border-radius: 10px;
            border-bottom:10px solid #0099ff;
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
            border: 1px solid #0099ff!important;
        }
        .search-wrap:hover .icon-search{
            color: #0099ff;
        }
        .layui-elem-quote{
            padding: 10px 15px;
        }
        .refresh-btn{
            height: 30px;
            line-height: 30px;
            font-size: 12px;
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
        .layui-input{
            height: 30px;
            line-height: 30px;
        }
        .icon-download{
            cursor: pointer;
        }
        .choose-wrap .layui-input{
            width: 120px;}
        .border-checked{
            border: 1px solid #0099ff;
        }
        .data-ul li{
            width: 49%;
            box-sizing: content-box;
        }
        .today-tab td:nth-child(odd){
            background: #ddd;
        }
         .today-tab td:nth-child(even){
             width: 25%;
        }
        
        .data-ul li:nth-child(even){
            float: right;
        }
        .data-ul li:nth-child(odd){
            float: left;
        }
        .system-title{
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
    </style>

</head>
<body>

    <blockquote class="layui-elem-quote my-bg-white choose-wrap">
        <div style="line-height: 30px;font-size: 14px ;width: 100%;" class="layui-form">
           时间筛选
            <div class="layui-input-inline my-margin-l5">
                <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
            </div>
            至
            <div class="layui-input-inline">
                <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
            </div>
            <span class="my-margin-l5">船舶选择</span>
            <div class="layui-input-inline">
                <select name="city" lay-verify="required">
                    <option value=""></option>
                    <option value="0">育德轮1235885</option>
                    <option value="1">清华山</option>
                    <option value="2">广州号</option>
                    <option value="3">深圳号</option>
                    <option value="4">杭州号</option>
                </select>

            </div>
            <span style="margin-left: 20px;color: #0099ff;cursor: pointer" ><i class="iconfont icon-excel my-margin-r5"></i>导出表格</span>

            <span class="my-fr">
                <a href="">
                    <button class="layui-btn layui-btn-small my-fr my-margin-l30 refresh-btn"><i class="iconfont icon-refresh my-margin-r5"></i>刷新</button>
                </a>
            </span>

        </div>
    </blockquote>
    <ul class="total-ul my-cf">
        <li>
            <div id="panel-v" style="width: 100%;height:300px;"></div>
            <span class="v-title">电压/V</span>
        </li>
        <li>
            <div id="panel-r" style="width: 100%;height:300px;"></div>
            <span class="r-title">转速/km</span>
        </li>
        <li>
            <div id="panel-a" style="width: 100%;height:300px;"></div>
            <span class="a-title">电流/A</span>
        </li>
    </ul>
    <span class="info-title">系统状态</span>
    <div class="data-wrap my-cf my-margin-t20">
        <ul class="data-ul my-cf">
            <li>
                <div class="my-cl-grey system-title">太阳能发系统</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>左光伏充电电压（V）</td>
                        <td>576</td>
                        <td>右光伏充电电压（V）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>左光伏充电电流（A）</td>
                        <td>25.8</td>
                        <td>右光伏充电电流（A）</td>
                        <td>888</td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <li>
                <div class="my-cl-grey system-title">防火系统</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr >
                        <td>状态</td>
                        <td class="my-bg-green my-cl-white">安全</td>
                        <td>报警</td>
                        <td class="my-bg-danger my-cl-white">0</td>
                    </tr>

                    </tbody>
                </table>
            </li>
        </ul>


        <ul class="data-ul my-cf">
            <li>
                <div class="my-cl-grey system-title">#1锂电池</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>电压（V）</td>
                        <td>0</td>
                        <td>电量（V）</td>
                        <td>89%</td>
                    </tr>
                    <tr>
                        <td>单体（mv）</td>
                        <td>25.8</td>
                        <td>单体（mv）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>放电流（A）</td>
                        <td>25.8</td>
                        <td>放电流（A）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>温度（A）</td>
                        <td>25.8</td>
                        <td>故障</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <li>
                <div class="my-cl-grey system-title">#1锂电池</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>电压（V）</td>
                        <td>0</td>
                        <td>电量（V）</td>
                        <td>89%</td>
                    </tr>
                    <tr>
                        <td>单体（mv）</td>
                        <td>25.8</td>
                        <td>单体（mv）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>放电流（A）</td>
                        <td>25.8</td>
                        <td>放电流（A）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>温度（A）</td>
                        <td>25.8</td>
                        <td>故障</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <li>
                <div class="my-cl-grey system-title">#1锂电池</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>电压（V）</td>
                        <td>0</td>
                        <td>电量（V）</td>
                        <td>89%</td>
                    </tr>
                    <tr>
                        <td>单体（mv）</td>
                        <td>25.8</td>
                        <td>单体（mv）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>放电流（A）</td>
                        <td>25.8</td>
                        <td>放电流（A）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>温度（A）</td>
                        <td>25.8</td>
                        <td>故障</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <li>
                <div class="my-cl-grey system-title">#1锂电池</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>电压（V）</td>
                        <td>0</td>
                        <td>电量（V）</td>
                        <td>89%</td>
                    </tr>
                    <tr>
                        <td>单体（mv）</td>
                        <td>25.8</td>
                        <td>单体（mv）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>放电流（A）</td>
                        <td>25.8</td>
                        <td>放电流（A）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>温度（A）</td>
                        <td>25.8</td>
                        <td>故障</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <li>
                <div class="my-cl-grey system-title">#1锂电池</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>电压（V）</td>
                        <td>0</td>
                        <td>电量（V）</td>
                        <td>89%</td>
                    </tr>
                    <tr>
                        <td>单体（mv）</td>
                        <td>25.8</td>
                        <td>单体（mv）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>放电流（A）</td>
                        <td>25.8</td>
                        <td>放电流（A）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>温度（A）</td>
                        <td>25.8</td>
                        <td>故障</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </li>
            <li>
                <div class="my-cl-grey system-title">#1锂电池</div>
                <table class="layui-table today-tab my-radius-10 " lay-skin="line" >
                    <tbody>
                    <tr>
                        <td>电压（V）</td>
                        <td>0</td>
                        <td>电量（V）</td>
                        <td>89%</td>
                    </tr>
                    <tr>
                        <td>单体（mv）</td>
                        <td>25.8</td>
                        <td>单体（mv）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>放电流（A）</td>
                        <td>25.8</td>
                        <td>放电流（A）</td>
                        <td>888</td>
                    </tr>
                    <tr>
                        <td>温度（A）</td>
                        <td>25.8</td>
                        <td>故障</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </li>


        </ul>
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
    <script type="text/javascript" src="/think/Public/mylib/js/echarts.min.js"></script>

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

//echarts
        // 基于准备好的dom，初始化echarts实例
        var myChartV = echarts.init(document.getElementById('panel-v'));
        var myChartR = echarts.init(document.getElementById('panel-r'));
        var myChartA = echarts.init(document.getElementById('panel-a'));

        // 指定图表的配置项和数据
        optionV = {
            tooltip : {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                feature: {
                    restore: {},
                    saveAsImage: {}
                }
            },
            series: [
                {
                    name: '电流',
                    type: 'gauge',
                    detail: {formatter:'{value}%'},
                    data: [{value: 50, name: ''}]
                }
            ]
        };
        optionR = {
            tooltip : {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                feature: {
                    restore: {},
                    saveAsImage: {}
                }
            },
            series: [
                {
                    name: '转速',
                    type: 'gauge',
                    detail: {formatter:'{value}%'},
                    data: [{value: 80, name: ''}]
                }
            ]
        };
        optionA = {
            tooltip : {
                formatter: "{a} <br/>{b} : {c}%"
            },
            toolbox: {
                feature: {
                    restore: {},
                    saveAsImage: {}
                }
            },
            series: [
                {
                    name: '电流',
                    type: 'gauge',
                    detail: {formatter:'{value}%'},
                    data: [{value: 60, name: ''}]
                }
            ]
        };
        myChartV.setOption(optionV);
        myChartR.setOption(optionR);
        myChartA.setOption(optionA);



    </script>

</body>
</html>
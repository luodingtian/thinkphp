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
    <link rel="stylesheet" href="//at.alicdn.com/t/font_g3iv24fqqat0rudi.css">
    <script type="text/javascript" src="/thinkphp/Public/mylib/js/jquery-1.11.1.min.js"></script>
    


    
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

    </style>

</head>
<body>

    <blockquote class="layui-elem-quote my-bg-white my-cf">
        <span >系统环境配置</span>
        <span class="my-mgl-50">
            <span>计时</span>
            <span id="showtime" class="my-mgl-10 my-cl-them">
                <span>00</span>
                <span>:</span>
                <span>00</span>
                <span>:</span>
                <span>00</span>
            </span>
        </span>
        <a href="<?php echo U('studyInfo');?>" target="_blank" class="my-mgl-20">
            <button class="layui-btn layui-btn-small  my-fr my-mgl-30 ">参考资料</button>
        </a>
    </blockquote>
    <blockquote class="layui-elem-quote layui-quote-nm">
        <p>任务一</p>
        <p>1.制作一个表单</p>
        <p>2.实现计算器的功能</p>
        <img src="/thinkphp/Public/mylib/img/jisuanqi.png" alt="">
    </blockquote>
    <a class="my-mgl-20">
        <button class="layui-btn layui-btn-small  my-fr my-mgl-30 upload-btn ">提交项目</button>
    </a>
   


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
        layui.use(['layer','element'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var element = layui.element();

//信息框-例2
            $('.upload-btn').click(function(){
                var uploadContent=
                        '<div class="upload-wrap my-pd-15" align="center">'+
                        '<p>请上传您的代码ZIP压缩包</p>'+
                        '<input type="file" class="my-mgt-15">'+
                        '<hr>'+
                        '<div class="btn-wrap">'+
                        '<button class="layui-btn submit-btn">提交</button>'+
                        '<button class="layui-btn layui-btn-danger my-mgl-50 off-btn" onclick="layer.closeAll()">取消</button>'+
                        '</div>'+
                        '</div>';
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,
                    shadeClose: true,
                    skin: 'yourclass',
                    content: uploadContent
                });


            });
            $('body').on('click','.submit-btn',function(){
                var uploadContent=
                        '<div class="upload-wrap my-pd-15" align="center">'+
                        '<p>提交成功请等待</p>'+
                        '<input type="file" class="my-mgt-15">'+
                        '<hr>'+
                        '<div class="btn-wrap">'+
                        '<button class="layui-btn submit-btn">等待中...</button>'+
                        '<a class=" my-mgl-15 off-btn my-cl-grey my-pointer" onclick="layer.closeAll()">开启下一个任务（不推荐）</a>'+
                        '</div>'+
                        '</div>';
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,
                    shadeClose: true,
                    skin: 'yourclass',
                    content: uploadContent
                });


            });

          /*  layer.msg('确定提交项目？', {
                time: 0 //不自动关闭
                ,btn: ['确定', '手抖']
                ,yes: function(index){
                    layer.close(index);
                    window.parent.layer.closeAll();
                    window.parent.location.href=data.url;
                },
                btn2:function(index){
                    $('.name-input').val(null)
                }
            });*/


        });

        $(function () {
            var min=0;
            var sec=0;
            var ms=0;
            var timer=null;
            var count=0;
            clearInterval(timer);
            timer=setInterval(show,10)
            function show(){
                ms++;
                if(sec==60){
                    min++;sec=0;
                }
                if(ms==100){
                    sec++;ms=0;
                }
                var msStr=ms;
                if(ms<10){
                    msStr="0"+ms;
                }
                var secStr=sec;
                if(sec<10){
                    secStr="0"+sec;
                }
                var minStr=min;
                if(min<10){
                    minStr="0"+min;
                }
                $('#showtime span:eq(0)').html(minStr);
                $('#showtime span:eq(2)').html(secStr);
                $('#showtime span:eq(4)').html(msStr);
            }
        })

    </script>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>船舶控制</title>
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
        #shipSel{
            width: 200px;
            font-size: 14px;
           height: 30px;

        }
    </style>


</head>
<body>

    <blockquote class="layui-elem-quote my-bg-white choose-wrap my-margin-t10">
        <span class="my-margin-l5">船舶选择</span>
        <div class="layui-input-inline my-margin-l5">
            <select name="shipId"  id="shipSel">
                <?php if(is_array($shipList)): $i = 0; $__LIST__ = $shipList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $ship['id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <a href="" class="my-margin-l20">
            <button class="layui-btn layui-btn-small   my-fr my-margin-l30 refresh-btn"><i class="iconfont icon-refresh my-margin-r5"></i>刷新</button>
        </a>
    </blockquote>
    <div class="control-wrap my-padding-10">
        <ul class="control-ul my-cf">
            <li>
                <div align="center">
                    <img src="/thinkphp/Public/mylib/img/danger.png" alt="">
                    <div class="my-margin-t15 my-font-16 my-bolder">故障提醒</div>
                    <?php if($btn[0] == 1): ?><button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary my-bg-them my-cl-white" data-index="0">已开启</button>
                    <?php else: ?>
                        <button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary" data-index="0">已关闭</button><?php endif; ?>
                </div>

            </li>
            <li>
                <div align="center">
                    <img src="/thinkphp/Public/mylib/img/off1.png" alt="">
                    <div class="my-margin-t15 my-font-16 my-bolder">切断1#放电</div>
                    <?php if($btn[1] == 1): ?><button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary my-bg-them my-cl-white" data-index="1">已开启</button>
                        <?php else: ?>
                        <button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary" data-index="1">已关闭</button><?php endif; ?>
                </div>

            </li>
            <!--<li>
                <div align="center">
                    <img src="/thinkphp/Public/mylib/img/off2.png" alt="">
                    <div class="my-margin-t15 my-font-16 my-bolder">切断2#放电</div>
                    <button class="my-margin-t15 layui-btn layui-btn-radius layui-btn-primary">已关闭</button>
                </div>

            </li>-->
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
        var shipId = "<?php echo ($ship['id']); ?>";
        layui.use(['form'], function () {
            var form = layui.form();
        });
        $(function () {
            $('#shipSel').change(function(){
                shipId = $('#shipSel option:selected').val();
                window.location.href="index.php?s=/Home/Index/shipControl/shipId/"+shipId;
            });
            $(' .control-ul li button').on('click', function () {
                var code;
                var index = $(this).data('index');
                if($(this).hasClass('my-bg-them')){
                    $(this).removeClass('my-bg-them my-cl-white').text('已关闭');
                    code = 0;
                }else{
                    $(this).addClass('my-bg-them my-cl-white').text('已开启');
                    code = 1;
                }
                $.post(
                        "<?php echo U('ajax_shipControl');?>",
                        {shipId:shipId,index:index,code:code},
                        function(data){

                        },
                        'json'
                );
            })
        })
    </script>

</body>
</html>
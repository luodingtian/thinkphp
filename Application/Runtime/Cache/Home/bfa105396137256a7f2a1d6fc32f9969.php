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
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/mylib/css/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/frame/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/mylib/css/myBase.css" media="all">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_xu6iuc22e351att9.css">
    <script type="text/javascript" src="/thinkphp/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
    
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
            width: 410px;
        }
    </style>


</head>
<body>

    <a href="">刷新</a>
    <div class="account-panel">
        <!--<form action="<?php echo U();?>" method="post">-->
        <table class="my-width-100 account-tab">
            <tr>
                <td>船舶名称</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="tel" name="name"    placeholder="请输入船舶名称" autocomplete="off" class="layui-input name-input">
                    </div>
                </td>
            </tr>
            <!--<tr>
                <td>采集器编号</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="password" name="psw"  placeholder="请输入采集器编号" autocomplete="off" class="layui-input">
                    </div>
                </td>
            </tr>-->
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                   <button type="submit" class="layui-btn submit-btn" style="width: 200px">提交保存</button>
                </td>
            </tr>
        </table>
        <!--</form>-->
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
        layui.use(['form', 'layedit', 'laydate'], function(){
            var form = layui.form()
                    ,layer = layui.layer
                    ,layedit = layui.layedit
                    ,laydate = layui.laydate;

            //创建一个编辑器
            var editIndex = layedit.build('LAY_demo_editor');

            //自定义验证规则
            form.verify({
                title: function(value){
                    if(value.length < 5){
                        return '标题至少得5个字符啊';
                    }
                }
                ,pass: [/(.+){6,12}$/, '密码必须6到12位']
                ,content: function(value){
                    layedit.sync(editIndex);
                }
            });

            $('.submit-btn').click(function(){
                var name = $('input[name="name"]').val();
                $.post(
                        "<?php echo U('');?>",
                        {name:name},
                        function(data){
                            if(data.status==1){
                                layer.msg('添加船舶成功！', {
                                    time: 0 //不自动关闭
                                    ,btn: ['确定', '继续添加']
                                    ,yes: function(index){
                                        layer.close(index);
                                        window.parent.layer.closeAll();
                                        window.parent.location.href=data.url;
                                    },
                                    btn2:function(index){
                                        $('.name-input').val(null)
                                    }
                                });
                            }else {
                                layer.msg(data.info);
                            }
                        },
                        'json'
                );
            });


        });
    </script>

</body>
</html>
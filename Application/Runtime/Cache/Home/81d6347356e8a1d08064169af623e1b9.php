<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>重庆时时彩</title>

    <!-- Bootstrap -->
    <link href="/think/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/think/Public/css/common.css" rel="stylesheet">
    <link href="/think/Public/css/media.css" rel="stylesheet">
    <link href="/think/Public/css/base.css" rel="stylesheet">
    
</head>
<body style="padding-top: 90px;">

    
    <div class="base-page">
        <header class="header-box">
            <div class="container-fluid nav-box bg-gradient">
                <nav class="navbar navbar-default navbar-fix-top navbar-box-in" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse perlist-box-out" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav perlist-box">
                                <li ><a href="#" class="active">首页 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">投注管理</a></li>
                                <li><a href="#">账户管理</a></li>
                                <li><a href="#">会员管理</a></li>
                                <li><a href="#">走势分析</a></li>
                                <li><a href="#">玩法规则</a></li>
                                <li><a href="#">开奖历史</a></li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="exit-btn ">退出</li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
    </div>
   
 




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/think/Public/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('.perlist-box li a').on('click',function(){
            $(this).addClass('active');
            $(this).parent('li').siblings('li').children('a').removeClass('active')

        })

    })
</script>

</body>
</html>
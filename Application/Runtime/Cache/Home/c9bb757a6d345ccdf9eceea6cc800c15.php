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
    <!--<link rel="stylesheet" type="text/css" href="/think/Public/frame/global.css" media="all">-->
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/layui/css/layui.css" media="all">
    <!--<link rel="stylesheet" type="text/css" href="/think/Public/mylib/css/common.css" media="all">-->
    <link rel="stylesheet" href="//at.alicdn.com/t/font_lhdrjs93f475vcxr.css">
    <script type="text/javascript" src="/think/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=K9qGcsvhbGfGuo2wZqCSgCAxriolXeYW"></script>

    
    <style type="text/css">
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
        .map-wrap{
            width: 100%;
            height: 100vh;
        }
        #shipSel{
            width: 200px;
            font-size: 14px;
            height: 30px;

        }
    </style>


</head>
<body>

    <blockquote class="layui-elem-quote my-bg-white choose-wrap my-margin-t10 ">
            <span class="my-margin-l5">船舶选择</span>
            <div class="layui-input-inline my-margin-l5">
                <select name="shipId"  id="shipSel">
                    <option value="0">--请选择船舶--</option>
                    <?php if(is_array($shipList)): $i = 0; $__LIST__ = $shipList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        <a href="" class="my-margin-l20">
            <button class="layui-btn layui-btn-small   my-fr my-margin-l30 refresh-btn"><i class="iconfont icon-refresh my-margin-r5"></i>刷新</button>
        </a>
    </blockquote>
    <div class="map-wrap" id="dituContent">


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


    <!--<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>-->

    <script type="text/javascript">
        layui.use(['form'], function () {
            var form = layui.form();
        });
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addPolyline();//向地图中添加线


        }

        //创建地图函数：
        function createMap(){
            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
            var point = new BMap.Point(122.263053,29.726606);//定义一个中心点坐标
            map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
            window.map = map;//将map变量存储在全局

            /*var geolocation = new BMap.Geolocation();
            geolocation.getCurrentPosition(function(r){
                if(this.getStatus() == BMAP_STATUS_SUCCESS){
                    var mk = new BMap.Marker(r.point);
                    map.addOverlay(mk);
                    map.panTo(r.point);
                    alert('您的位置：'+r.point.lng+','+r.point.lat);
                }
                else {
                    alert('failed'+this.getStatus());
                }
            },{enableHighAccuracy: true})*/
        }

        //地图事件设置函数：
        function setMapEvent(){
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }

        //地图控件添加函数：
        function addMapControl(){
            //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(ctrl_nav);
            //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            map.addControl(ctrl_sca);
        }

        //标注线数组
        var plPoints = [{
            weight:2,
            color:"blue",
            opacity:0.6,
            points:[
                "122.251285|29.732870",
                "122.25734|29.735576",
                "122.26043|29.731436",
                "122.256262|29.728614",
                "122.257418|29.7253407",
                "122.257783|29.722075",
                "122.2649623|29.720381"
            ]
        }];
        //向地图中添加线函数
        function addPolyline(){
            for(var i=0;i<plPoints.length;i++){
                var json = plPoints[i];
                var points = [];
                for(var j=0;j<json.points.length;j++){
                    var p1 = json.points[j].split("|")[0];
                    var p2 = json.points[j].split("|")[1];
                    points.push(new BMap.Point(p1,p2));
                }
                var line = new BMap.Polyline(points,{strokeWeight:json.weight,strokeColor:json.color,strokeOpacity:json.opacity});
                map.addOverlay(line);
                addArrow(line);

            }
        }

        function addArrow(line){ //绘制标注的函数
            var linePoint=line.getPath();//线的坐标串
            var arrowCount=linePoint.length;
            var end = new BMap.Marker(linePoint[linePoint.length-1]);  // 创建标注
            map.addOverlay(end);               // 将标注添加到地图中
            end.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
            var myIcon = new BMap.Icon("http://api0.map.bdimg.com/images/stop_icon.png", new BMap.Size(11,11));
            for(var i =0;i<arrowCount;i++){ //在拐点处添加标注
                var marker = new BMap.Marker(linePoint[i],{icon:myIcon});  // 创建标注
                map.addOverlay(marker);              // 将标注添加到地图中
                var label = new BMap.Label("北斗第"+(i+1)+"星",{offset:new BMap.Size(20,-10)});
                label.setStyle({
                    color : "blue",
                    fontSize : "10px",
                    height : "15px",
                    lineHeight : "15px",
                    backgroundColor:"rgba(255, 255, 255, 0.8) none repeat scroll 0 0 !important",//设置背景色透明
                    border:"1px solid blue"
                });
                marker.setLabel(label);
            }
        }

        initMap();//创建和初始化地图
    </script>
    <script>

    </script>

</body>
</html>
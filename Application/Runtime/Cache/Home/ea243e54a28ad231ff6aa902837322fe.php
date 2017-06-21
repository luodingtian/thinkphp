<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>实用jQuery数字滚动摇奖老虎机抽奖</title>
<script type="text/javascript" src="/think/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/think/Public/js/easing.js"></script>
<style>
html,body{margin:0;padding:0;}
body{background:url(/think/Public/img/body_bg.jpg) 0px 0px repeat-x #000;}
.main_bg{background:url(/think/Public/img/main_bg.jpg) top center no-repeat;height:100vh;}
.main{width:100%;height:500px;position:relative;margin:0 auto;}
.num_mask{background:url(/think/Public/img/num_mask.png) 0px 0px no-repeat;height:184px;width:740px;position:absolute;left:50%;top:340px;margin-left:-370px;z-index:9;}
.num_box{height:200px;width:100%;position:absolute;left:50%;top:340px;margin-left: -50%;z-index:8;overflow:hidden;text-align:center;background:url(/think/Public/img/.png) 0 0  no-repeat;}
.num{background:url(/think/Public/img/num.png) top center repeat-y;width:200px;height:200px;float:left;margin-right:6px;border-radius:50%;}
.btn{background:url(/think/Public/img/btn_start.png) 0px 0px no-repeat;width:264px;height:89px;position:absolute;left:50%;bottom:50px;margin-left:-132px;cursor:pointer;clear:both;top: 100px;}
.perball-bg{display: inline-block;width: 200px;height: 200px; border-radius:50%;background:url(/think/Public/img/oneball.png) no-repeat;background-size: cover;}
</style>
</head>
<body>
<div class="main_bg">
  <div class="main">
    <div id="res" style="text-align:center;color:#fff;padding-top:15px;"></div>
    <div class="num_box">
		<div class="perball-bg">
			<div class="num"></div>
		</div>
		<div class="perball-bg">
			<div class="num"></div>
		</div>
		<div class="perball-bg">
			<div class="num"></div>
		</div>
		<div class="perball-bg">
			<div class="num"></div>
		</div>
		<div class="perball-bg">
			<div class="num"></div>
		</div>
	</div>
	  <div class="btn"></div>
  </div>
</div>
</body>
</html>
<script>
function numRand() {
	var x = 99999; //上限
	var y = 11111; //下限
	var rand = parseInt(Math.random() * (x - y + 1) + y);//接受后台数据
	return rand;
}
var isBegin = false;
$(function(){
	var u = 200;
	$('.btn').click(function(){
		if(isBegin) return false;
		isBegin = true;
		$(".num").css('backgroundPositionY',0);
		var result = numRand();
		$('#res').text('随机摇奖结果 = '+result);
		var num_arr = (result+'').split('');
		$(".num").each(function(index){
			var _num = $(this);
			setTimeout(function(){
				_num.animate({ 
					backgroundPositionY: (u*60) - (u*num_arr[index])
				},{
					duration: 6000+index*3000,
					easing: "easeInOutCirc",
					complete: function(){
						if(index==3) isBegin = false;
					}
				});
			}, index * 300);
		});
	});	
});
</script>
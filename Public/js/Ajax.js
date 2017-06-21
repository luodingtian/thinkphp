
/*Ajax上传文本  版本：20161024
 * 使用方法
 *
 *  引入文件
 <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/Ajax.js"></script>
 *
 function addpage(){    //onclick 执行函数
 var url="{:U('ads/addpage')}";
 var jsondata = {url:$('#url').val()};
 ajaxGet(url,jsondata,res);
 }

 function res(data){    //返回处理的函数 注意命名
 alert(data.word);
 }
 *
 * */
var g=1;
function ajaxGet(url,jsondata,resfun){
 if(g == 1){
  g = 0;
  jQuery.getJSON(url,jsondata,
      function(data){
       if(data){
        resfun(data);
        g=1;
       }else{
        alert('网页出错，请重试！');
       }
      }
  );
 }

}
/*
 -- funtion.php --
 function jsonReturn($data){
 $json_str = json_encode($data);
 // 返回JSON数据格式到客户端 包含状态信息
 header('Content-Type:application/json; charset=utf-8');
 //处理json中包含的‘null’，将其替换成空字符串
 $search = 'null';
 $replace = '""';
 $returndata = str_replace($search, $replace, $json_str);
 //  testAddDataIntoTestTable(null,$returndata);
 exit($returndata);
 }
 */
var p=1;
function ajaxPost(url,jsondata,resfun){
 if(p == 1) {
  p = 0;
  jQuery.post(url, jsondata,
      function (data) {
       if (data) {
        resfun(data);
        p=1;
       } else {
        alert('网页出错，请重试！');
       }
      }, "json"
  );
 }
}

/*Ajax 上传图片
 *
 * 使用说明
 *
 * 引入文件
 *
 <script type="text/javascript" src="__PUBLIC__/js/Ajax.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
 <script src="__PUBLIC__/js/jquery.form.js"></script>
 <script src="__PUBLIC__/js/ajaxImg.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/jquery.json.min.js"></script>

 *
 <form tag="img_file_upload" id="file_upload" name="file_upload" method="post" enctype="multipart/form-data">
 <input type="hidden" value="1" name="num">
 <input type="file" id="img" name="file" onchange="ajaxImg('{:U('index/fileUpload')}',test)">
 </form>

 <!--执行结果需要-->
 <img tag="show_photo_upload_img" src="" alt=""/>
 --js -----------------------------
 function test(data){
 var json_obj = JSON.parse(data);
 var show_img = $("[tag='show_photo_upload_img']");
 show_img.attr('src','/Uploads/'+json_obj.img_path);
 alert(json_obj.word);
 }
 *
 *
 * */
function ajaxImg(url,resimg){
 if ($("#img").val() == "") {
  alert("请选择一个图片文件，再点击上传。");
  return;
 }
 var file_form = $("[tag='img_file_upload']");
 var options = {
  type : 'post',
  url : url,
  dataType: 'text',
  contentType: "application/json; charset=utf-8",
  beforeSubmit:function(){
   //alert('正在上传');
  },
  success:function(data) {
   resimg(data);
  },
  error:function(XmlHttpRequest, textStatus, errorThrown){
   alert(textStatus);
   alert(errorThrown);
  }
 };
 file_form.ajaxSubmit(options);
}

function ajaxImgByid(fid,url,resimg){
 if ($("#img").val() == "") {
  alert("请选择一个图片文件，再点击上传。");
  return;
 }
 var file_form = $("#"+fid);
 var options = {
  type : 'post',
  url : url,
  dataType: 'text',
  contentType: "application/json; charset=utf-8",
  beforeSubmit:function(){
   //alert('正在上传');
  },
  success:function(data) {
   resimg(data);
  },
  error:function(XmlHttpRequest, textStatus, errorThrown){
   alert(textStatus);
   alert(errorThrown);
  }
 };
 file_form.ajaxSubmit(options);
}

function ajaxImgTwo(url,resimg,formID){
 var file_form = $("#"+formID);

/* if (file_form == "") {
  alert("请选择一个图片文件，再点击上传。");
  return false;
 }*/

 var options = {
  type : 'post',
  url : url,
  dataType: 'text',
  contentType: "application/json; charset=utf-8",
  beforeSubmit:function(){
   //layer.msg('正在上传');
  },
  success:function(data) {
   resimg(data);
  },
  error:function(XmlHttpRequest, textStatus, errorThrown){
   //错误提示

   alert(textStatus);
   alert(errorThrown);
  }
 };
 file_form.ajaxSubmit(options);
}


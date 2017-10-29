<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\phpStudy\WWW\TMS\TP5\public/../application/index\view\index\login.html";i:1508380557;s:75:"D:\phpStudy\WWW\TMS\TP5\public/../application/index\view\common\common.html";i:1508376843;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>TMS教学系统</title>
	<style type="text/css">
	</style>
	
<style>
    .main{
        margin-top: 45px;
        margin-right: 60px;
    }
    .layui-btn{
        margin-left: 110px;
        margin-top: 8px;
    }
</style>

	<link rel="stylesheet" type="text/css" href="__LAYUI__/css/layui.css">
</head>
<body>

 <div class="main">
     <form class="layui-form">
         <div class="layui-form-item">
             <label class="layui-form-label">用户名:</label>
             <div class="layui-input-block">
                 <input type="text" class="layui-input" name="name">
             </div>
         </div>
         <div class="layui-form-item">
             <label class="layui-form-label">密码:</label>
             <div class="layui-input-block">
                 <input type="password" class="layui-input" name="password">
             </div>
         </div>
         <div class="layui-form-item">
             <label class="layui-form-label">验证码</label>
             <div class="layui-input-block">
                 <img src="<?php echo captcha_src(); ?>" alt="验证码" id="verify-img">
             </div>
         </div>
         <div class="layui-form-item">
             <label class="layui-form-label">请输入:</label>
             <div class="layui-input-block">
                 <input type="text" class="layui-input" name="verify">
             </div>
         </div>
         <div class="layui-form-item">
             <input type="button" class="layui-btn" id="submit" value="登录">
             <input type="reset" name="" class="layui-btn layui-btn-primary">
         </div>
     </form>
 </div>

	<script type="text/javascript" src="__LAYUI__/layui.js"></script>
	<script type="text/javascript" src="__LAYUI__/tms.js"></script>
	<script type="text/javascript">
		layui.use(['element','form'],function(){
			var element = layui.element,
				form = layui.form;
		});
	</script>

<script type="text/javascript">
    layui.use(['jquery','layer'],function () {
        var $  =layui.$,
            layer = layui.layer;
        //提交数据
        $("#submit").click(function () {
            $.ajax({
                type:'post',
                url:"<?php echo url('index/doLogin'); ?>",
                data:$("form").serialize(),
                success:function (res) {
                    if(res.status==1){
                        layer.msg(res.message);
                        window.location.href = "<?php echo url('index/index'); ?>";
                    }else{
                        layer.msg(res.message);
                        return false
                    }
                }
            });
        });
        // 验证码刷新
        $("#verify-img").on('click',function(){
            var S = new Date();
            var time = S.getTime();
            $(this).attr('src',$("#verify-img").attr("src").toString().split("?")[0]+'?time='+time);
        });
    });
</script>

</body>
</html>
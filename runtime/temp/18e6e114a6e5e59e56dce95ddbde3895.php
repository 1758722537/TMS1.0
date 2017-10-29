<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\admin\login.html";i:1507694798;s:72:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\public\base.html";i:1507024722;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="__LAYUI__/css/layui.css">
	
	<style type="text/css">
		body{
			width: 100%;
			background-image: url(__SRC__/images/a.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.login-form{
			width: 320px;
			height: 210px;
			background-color: #9A754A;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-left: -160px;
			margin-top: -105px;
			padding-top: 26px;
			border-radius: 10px;
		}
		#verify-img{
			width: 110px;
			height: 30px;
			margin: -16px;
			padding: 0;
			cursor: pointer;
		}
	</style>

</head>
<body>
	
	<div class="login-form">
		<form class="layui-form layui-form-pane">
			  <div class="layui-form-item">
			    <label class="layui-form-label"><i class="layui-icon">&#xe612;</i></label>
			    <div class="layui-input-block">
			      <input type="text" name="username" placeholder="请输入用户名" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label"><img src="<?php echo captcha_src(); ?>" id="verify-img"></label>
			    <div class="layui-input-block">
			      <input type="text" name="verify" placeholder="请输入验证码" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label"><i class="layui-icon">&#xe6b2;</i></label>
			    <div class="layui-input-block">
			      <input type="password" name="password" placeholder="请输入密码" class="layui-input">
			    </div>
			  </div>
			    <div class="layui-form-item" style="margin-left: -100px">
			    <div class="layui-input-block">
			    	<input type="button" name="" id="submit" class="layui-btn" value="登录">
			      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
			    </div>
			  </div>
		</form>
	</div>	

	<script type="text/javascript" src="__LAYUI__/layui.js"></script>
	
	<script type="text/javascript">
		layui.use(['jquery','layer'],function(){
			var $ = layui.$,
			layer = layui.layer;
			$("#submit").click(function(){
				$.ajax({
                    type:'post',        //提交方式
                    url:'<?php echo url('admin/dologin'); ?>',  //后台处理
                    data:$("form").serialize(),//序列化
                    dataType:'json',
                    success:function(data){   //返回1时 执行
                         if(data.status==1){
                             window.location.href="<?php echo url('index/index'); ?>";
                         }
                         if(data.status==0){
                         	layer.msg(data.message);
                             return false;
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
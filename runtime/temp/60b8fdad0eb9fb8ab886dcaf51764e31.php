<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\phpStudy\WWW\TMS\TP5\public/../application/index\view\index\register.html";i:1508380389;s:75:"D:\phpStudy\WWW\TMS\TP5\public/../application/index\view\common\common.html";i:1508376843;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>TMS教学系统</title>
	<style type="text/css">
	</style>
	
	<style type="text/css">
		.main{
			margin-top:45px;
			margin-right:60px;
		}
		.error,#error{
			color: #f00;
			font-size: 14px;
			display: none;
		}
		.success{
			color: #0f0;
			font-size: 14px;
			display: none;
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
					<input type="hidden" name="" id="flag">
					<input type="text" name="name" placeholder="用户名不能超过8位" class="layui-input" maxlength="8">
					<span class="error">用户名已被注册</span>
					<span class="success">用户名可用</span>
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">邮箱:</label>
				<div class="layui-input-block">
					<input type="email" name="email" placeholder="输入邮箱" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">密码:</label>
				<div class="layui-input-block">
					<input type="password" name="password" placeholder="输入密码" class="layui-input" id="passwd">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">确认密码:</label>
				<div class="layui-input-block">
					<input type="password" name="" placeholder="再次输入密码" class="layui-input" id="r_passwd">
					<span id="error">密码不一致</span>
				</div>
			</div>
				<div class="layui-form-item">
					<input type="button" class="layui-btn" id="submit" value="注册">
				<input type="reset" name="" class="layui-btn layui-btn-primary">
				</div>
			</div> 
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
		layui.use(['jquery'],function(){
			var $ = layui.$;
			//验证用户名是否可用
			$("input[name='name']").blur(function(){
				name = $(this).val();
					$.post("<?php echo url('index/checkUserName'); ?>",{name:name},function(data){
					if(data.status==1){
						$(".success").show();
						$(".error").hide();
						$("flag").data({'errorNum':0});
					}else{
						$(".success").hide();
						$(".error").show();
						$("#flag").data({'errorNum':1});
					}
				});
			});
			//验证两次密码是否一致
			$("#r_passwd").blur(function(){
				r_passwd = $(this).val();
				passwd = $("#passwd").val();
				if(r_passwd!=passwd){
					$("#error").show();
					$(this).data({'errorNum':1});
				}else{
					$(this).data({'errorNum':0});
				}
			});
			$("#submit").click(function(){
				error = $("#r_passwd").data('errorNum');
				if (error==0) {
					$.ajax({
						type:'post',
						url:"<?php echo url('index/doregister'); ?>",
						data:$("form").serialize(),
						dataType:'json',
						success:function(data){
							if(data.status==1){
								alert(data.message);
								//window.location.href="<?php echo url('index/index'); ?>";
							}else{
								alert(data.message);
							}
						}
					});
				}else{
					return false;
				}
			});
		});
	</script>

</body>
</html>
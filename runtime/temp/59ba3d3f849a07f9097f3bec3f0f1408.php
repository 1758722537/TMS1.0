<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\phpStudy\WWW\TMS1.0\public/../application/index\view\index\userinfo.html";i:1509357777;s:72:"D:\phpStudy\WWW\TMS1.0\public/../application/index\view\common\base.html";i:1509355924;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>TMS教学系统</title>
	<style type="text/css">
		li a{
			color: #101010;
		}
	</style>
	
	<style type="text/css">
		.layui-main{
			height: 660px;
			margin-top: 20px !important;
		}
		#submit{
			margin-left: 107px;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="__LAYUI__/css/layui.css">
</head>
<body>
	<!-- 导航开始 -->
	<div class="header">
	<ul class="layui-nav">
		<li class="layui-nav-item layui-this"><a href="">首页</a></li>
		<li class="layui-nav-item"><a href="">课程<span class="layui-badge-dot"></span></a></li>
		<li class="layui-nav-item"><a href="javascript:;">资料</a>
		<dl class="layui-nav-child">
			<dd><a href="">数据结构</a></dd>
			<dd><a href="">地理数据</a></dd>
			<dd><a href="">ArcGIS制图</a></dd>
		</dl>
		</li>
		<li class="layui-nav-item"><a href="">选课</a></li>
			<?php if(!empty(\think\Session::get('user_sinfo'))): ?>
			<div class="layui-inline" style="float: right;margin-right: 20px;">
				<li class="layui-nav-item">
		   	<a href=""><i class="layui-icon">&#xe63a;<span class="layui-badge">3</span></i></a>
		   </li>
			<li class="layui-nav-item"><a href="">我</a>
				<dd class="layui-nav-child">
					<dl><a href="<?php echo url('index/userInfo',['id'=>\think\Session::get('user_sinfo.id')]); ?>">基本信息</a></dl>
					<dl><a href="">足迹</a></dl>
					<dl><a href="<?php echo url('index/logout'); ?>">退出</a></dl>
				</dd>
		   </li>
			</div>
			<?php else: ?>
			<div class="layui-inline" style="float: right;margin: 0 auto;">
				<li class="layui-nav-item">
					<a href="javascript:;" onclick="register('注册','<?php echo url('index/register'); ?>',550,450)">注册</a>
			   </li>
			   <li class="layui-nav-item">
			   	<a href="<?php echo url('index/login'); ?>">登录</a>
			   </li>
			</div>
			<?php endif; ?>
	</ul>
</div>
	<!-- 导航结束 -->	

	<div class="layui-main">
		<form class="layui-form" method="post" action="<?php echo url("","",true,false);?>">
			<div class="layui-form-item">
				<label class="layui-form-label">用户名:</label>
				<div class="layui-input-block">
					<input type="text" name="name" class="layui-input" maxlength="8" value="<?php echo $info['name']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">邮箱:</label>
				<div class="layui-input-block">
					<input type="email" name="email" class="layui-input" value="<?php echo $info['email']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">密码:</label>
				<div class="layui-input-block">
					<input type="password" name="password" class="layui-input" id="passwd" value="<?php echo $info['password']; ?>">
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">确认密码:</label>
				<div class="layui-input-block">
					<input type="password" name="" class="layui-input" value="">
				</div>
			</div>
				<div class="layui-form-item">
				  <input type="submit" name="" class="layui-btn" id="submit">
				</div>
			</form>
	</div>

	<!-- 底部开始 -->
	<div class="footer">
		<div class="layui-bg-cyan">
		   <div class="layui-container">
		   	 <div class="layui-row">
		   	 	<!-- 友情链接begin-->
		   	 	<div class="friends-link">
		   	 		<div class="layui-col-md4">
		   	 		<ul>
		   	 			<li><a href="##">友情链接</a></li>
		   	 			<li><a href="##">PHP中文网</a></li>
		   	 			<li><a href="##">慕课网</a></li>
		   	 			<li><a href="##">云之梦</a></li>
		   	 			<li><a href="##">虚位以待</a></li>
		   	 		</ul>
		   	 	</div>
		   	 	<div class="layui-col-md4">
		   	 		<ul>
		   	 			<li><a href="##">友情链接</a></li>
		   	 			<li><a href="##">PHP中文网</a></li>
		   	 			<li><a href="##">慕课网</a></li>
		   	 			<li><a href="##">云之梦</a></li>
		   	 			<li><a href="##">虚位以待</a></li>
		   	 		</ul>
		   	 	</div>
		   	 	<div class="layui-col-md4">
		   	 		<ul>
		   	 			<li><a href="##">友情链接</a></li>
		   	 			<li><a href="##">PHP中文网</a></li>
		   	 			<li><a href="##">慕课网</a></li>
		   	 			<li><a href="##">云之梦</a></li>
		   	 			<li><a href="##">虚位以待</a></li>
		   	 		</ul>
		   	 	</div>
		   	 	</div>
		   	 	<!-- 友情链接end-->
		   	 </div>
		   </div>
	    </div>
	</div>
	<!-- 底部结束 -->
	<script type="text/javascript" src="__LAYUI__/layui.js"></script>
	<script type="text/javascript" src="__LAYUI__/tms.js"></script>

</body>
</html>
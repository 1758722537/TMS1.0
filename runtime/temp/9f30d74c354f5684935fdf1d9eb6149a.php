<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\phpStudy\WWW\TMS\TP5\public/../application/index\view\index\index.html";i:1508379810;s:73:"D:\phpStudy\WWW\TMS\TP5\public/../application/index\view\common\base.html";i:1508381891;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>TMS教学系统</title>
	<style type="text/css">
	</style>
	
<style type="text/css">
	.layui-main{
		background-color: #ccc;
		height: 100px;
	}
	.carousel{
		width: 100%;
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
					<dl><a href="">基本信息</a></dl>
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

<!-- 轮播图begin -->
<div class="layui-carousel" id="header-carousel">
	<div carousel-item>
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$val): if($val['status']==1): ?>
		   	  <div><a href="<?php echo $val['url']; ?>"><img src="<?php echo $val['src']; ?>" class="carousel" alt="<?php echo $val['desc']; ?>"></a></div>
		   <?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<!-- 轮播图end -->
<div class="layui-main" style="height: 600px;">
</div>

	<!-- 底部开始 -->
	<div class="footer">
		<div class="layui-bg-cyan">
		   <div class="layui-container">
		   	 <div class="layui-row">
		   	 	<!-- 友情链接begin-->
		   	 	<div class="friends-link">
		   	 		<div class="layui-col-md6 layui-col-md-offset3">
		   	 		<ul>
		   	 			<li><a href="##">友情链接</a></li>
		   	 			<li><a href="www.php.cn">PHP中文网</a></li>
		   	 			<li><a href="www.imooc.com">慕课网</a></li>
		   	 			<li><a href="www.yzmedu.com">云之梦</a></li>
		   	 			<li><a href="##">虚位以待</a></li>
		   	 		</ul>
		   	 	</div>
		   	 	<div class="layui-col-md6">		   	 		
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

<script type="text/javascript">
	layui.use(['element','jquery','carousel','layer'],function(){
		var element = layui.element,
			$ = layui.$,
			carousel = layui.carousel,
			layer =  layui.layer;
			//轮播图
			carousel.render({
				elem:'#header-carousel',
				width:'100%',
				height:'260px',
				anim:'fade'
			});
			//注册弹层
	});
</script>
	<script type="text/javascript">
			function register(title,url,w,h) {
				openPage(title,url,w,h);
			}
			function login(title,url,w,h){
				openPage(title,url,w,h);
			}
	</script>

</body>
</html>
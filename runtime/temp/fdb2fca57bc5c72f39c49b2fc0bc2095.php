<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\index\index.html";i:1507200663;s:74:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\common\header.html";i:1507363041;s:70:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\common\js.html";i:1507120356;}*/ ?>
  <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            教学管理系统
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="__STATIC__/admin/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="__STATIC__/admin/css/x-admin.css" media="all">
        <link rel="stylesheet" type="text/css" href="__BS__/css/bootstrap.css">
    </head>
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
                <div class="layui-main">
                    <a class="logo" href="./index.html">
                        后台管理
                    </a>
                    <ul class="layui-nav" lay-filter="">
                      <li class="layui-nav-item"><img src="__STATIC__/admin/images/logo.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
                      <li class="layui-nav-item">
                        <a href="javascript:;"><?php echo session('user_info.name'); ?></a> <!-- 获取Session中的信息 -->
                        <dl class="layui-nav-child"> <!-- 二级菜单 -->
                          <dd><a href="">个人信息</a></dd>
                          <dd><a href="">切换帐号</a></dd>
                          <dd><a href="<?php echo url('admin/logout'); ?>">注销</a></dd>
                        </dl>
                      </li>
                      <!-- <li class="layui-nav-item">
                        <a href="" title="消息">
                            <i class="layui-icon" style="top: 1px;">&#xe63a;</i>
                        </a>
                        </li> -->
                      <li class="layui-nav-item x-index"><a href="/" target="_blank">前台首页</a></li>
                    </ul>
                </div>
            </div>
            <div class="layui-side layui-bg-black x-side">
                <div class="layui-side-scroll">
                    <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>问题管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('info/questionList'); ?>">
                                            <cite>问题列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('info/questionDel'); ?>">
                                            <cite>删除问题</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="<?php echo url('info/bannerList'); ?>">
                                            <cite>轮播列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./category.html">
                                        <cite>分类列表</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe606;</i><cite>评论管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./comment-list.html">
                                        <cite>评论列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./feedback-list.html">
                                        <cite>意见反馈</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>管理员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('admin/adminList'); ?>">
                                        <cite>管理员列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="<?php echo url('admin/adminRole'); ?>">
                                        <cite>角色管理</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe629;</i><cite>系统统计</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts1.html">
                                        <cite>拆线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts2.html">
                                        <cite>柱状图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts3.html">
                                        <cite>地图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts4.html">
                                        <cite>饼图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts5.html">
                                        <cite>雷达图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts6.html">
                                        <cite>k线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts7.html">
                                        <cite>热力图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./echarts8.html">
                                        <cite>仪表图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="http://echarts.baidu.com/examples.html" target="_blank" _href="./welcome.html">
                                        <cite>更多案例</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-set.html">
                                        <cite>系统设置</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-data.html">
                                        <cite>数字字典</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-shield.html">
                                        <cite>屏蔽词</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-log.html">
                                        <cite>系统日志</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-link.html">
                                        <cite>友情链接</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="./sys-qq.html">
                                        <cite>第三方登录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item" style="height: 30px; text-align: center">
                        </li>
                    </ul>
                </div>

            </div>
            <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true">
                <div class="x-slide_left"></div>
                <ul class="layui-tab-title">
                    <li class="layui-this">
                        我的桌面
                        <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
                    </li>
                </ul>
                <div class="layui-tab-content site-demo site-demo-body">
                    <div class="layui-tab-item layui-show">
                        <iframe frameborder="0" src="<?php echo url('index/welcome'); ?>" class="x-iframe"></iframe>
                    </div>
                </div>
            </div>
            <div class="site-mobile-shade">
            </div>
        </div>
                <script src="__STATIC__/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/admin/js/x-admin.js"></script>
        <script src="__STATIC__/admin/js/x-layui.js" charset="utf-8"></script>
    </body>
</html>
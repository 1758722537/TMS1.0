<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\phpStudy\WWW\TMS\TP5\public/../application/admin\view\index\welcome.html";i:1507118559;s:75:"D:\phpStudy\WWW\TMS\TP5\public/../application/admin\view\common\header.html";i:1507363041;s:71:"D:\phpStudy\WWW\TMS\TP5\public/../application/admin\view\common\js.html";i:1507120356;}*/ ?>
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
        <div class="x-body">
            <blockquote class="layui-elem-quote">
                欢迎登录后台!
            </blockquote>
            <p>登录次数：<?php echo $data->login_count; ?> </p>
            <p>登录IP：<?php echo \think\Request::instance()->ip(); ?>  登录时间： <?php echo date('Y-m-d H:i:s',$data->login_time); ?></p>
            <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default" href="">信息统计</a></legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>统计</th>
                        <th>资讯库</th>
                        <th>图片库</th>
                        <th>产品库</th>
                        <th>用户</th>
                        <th>管理员</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>总数</td>
                        <td>92</td>
                        <td>9</td>
                        <td>0</td>
                        <td>8</td>
                        <td><?php echo $count; ?></td>
                    </tr>
                    <tr>
                        <td>今日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td><?php echo $todaynum; ?></td>
                    </tr>
                    <tr>
                        <td>本周</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td><?php echo $weeknum; ?></td>
                    </tr>
                    <tr>
                        <td>本月</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td><?php echo $mouthnum; ?></td>
                    </tr>
                </tbody>
            </table>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">服务器信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>当前系统用户名 </td>
                        <td><?php echo \think\Session::get('user_info.name'); ?></td>
                    </tr>
                    <tr>
                        <th width="30%">服务器计算机名</th>
                        <td><span id="lbServerName"><?php echo \think\Request::instance()->host(); ?></span></td>
                    </tr>
                    <tr>
                        <td>服务器IP地址</td>
                        <td><?php echo \think\Request::instance()->ip(); ?></td>
                    </tr>
                    <tr>
                        <td>服务器域名</td>
                        <td><?php echo \think\Request::instance()->domain(); ?></td>
                    </tr>
                    <tr>
                        <td>服务器端口 </td>
                        <td>80</td>
                    </tr>
                    <tr>
                    <tr>
                        <td>服务器脚本超时时间 </td>
                        <td>30000秒</td>
                    </tr>
                    <tr>
                        <td>PHP版本</td>
                        <td><?php echo PHP_VERSION; ?></td>
                    </tr>
                    <tr>
                        <td>当前请求URL</td>
                        <td><?php echo \think\Request::instance()->url(true); ?></td>
                    </tr>
                    <tr>
                        <td>服务器当前时间 </td>
                        <td><?php echo date('Y-m-d H:i:s'); ?></td>
                    </tr>
                    <tr>
                        <td>当前Session数量 </td>
                        <td id="time"><?php echo count($_SESSION); ?></td>
                    </tr>
                    <tr>
                        <td>当前SessionID </td>
                        <td><?php echo session('user_id'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="layui-footer footer footer-demo">
            <div class="layui-main">
                <p>
                    <a href="javascript:;" target="_blank">
                        本后台系统由X前端框架提供前端技术支持
                    </a>
                </p>
            </div>
        </div>
                <script src="__STATIC__/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/admin/js/x-admin.js"></script>
        <script src="__STATIC__/admin/js/x-layui.js" charset="utf-8"></script>
        <script type="text/javascript">
            
        </script>
    </body>
</html>
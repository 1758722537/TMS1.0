<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\info\banner-edit.html";i:1507275492;s:74:"D:\phpStudy\WWW\TMS1.0\public/../application/admin\view\common\header.html";i:1507363041;}*/ ?>
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
            <form class="layui-form" method="post" action="<?php echo url('info/editImage'); ?>" enctype="multilpart/form-data">
                <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
                <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>轮播图
                    </label>
                    <div class="layui-input-inline">
                      <div class="site-demo-upbar">
                        <input type="file" name="image" class="layui-btn-primary" id="test">
                      </div>
                    </div>
                </div>              
                <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>链接
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="link" name="url" required="" lay-verify="required" value="<?php echo $list['url']; ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="desc" class="layui-form-label">
                        <span class="x-red">*</span>描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="desc" name="desc" required="" lay-verify="required" value="<?php echo $list['desc']; ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <input type="submit" name="" value="修改" class="layui-btn">
                </div>
            </form>
        </div>

    </body>

</html>
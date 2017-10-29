<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy\WWW\TMS\TP5\public/../application/admin\view\admin\admin-list.html";i:1507265041;s:75:"D:\phpStudy\WWW\TMS\TP5\public/../application/admin\view\common\header.html";i:1507363041;s:75:"D:\phpStudy\WWW\TMS\TP5\public/../application/admin\view\common\jquery.html";i:1507193144;}*/ ?>
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
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>管理员列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" style="width:80%">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                    <label class="layui-form-label">日期范围</label>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入登录名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <!-- 如果是admin将显示所有管理员 -->
            <?php if(\think\Session::get('user_info.name') == 'admin'): ?>
                <xblock><button class="layui-btn layui-btn-danger" id="delAll"><i class="layui-icon">&#xe640;</i>批量删除</button>
                    <button class="layui-btn" onclick="admin_add('添加用户','<?php echo url('admin/add'); ?>','600','500')"><i class="layui-icon">&#xe608;</i>添加</button>
                    <span class="x-right" style="line-height:40px">共有数据：<?php echo $num; ?> 条</span></xblock>
            <?php endif; ?>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" id="allcheck">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            登录名
                        </th>
                        <th>
                            手机
                        </th>
                        <th>
                            邮箱
                        </th>
                        <th>
                            角色
                        </th>
                        <th>
                            加入时间
                        </th>
                        <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$val): ?>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" value="<?php echo $val['id']; ?>" name="userid">
                        </td>
                        <td>
                            <?php echo $val['id']; ?>
                        </td>
                        <td>
                            <?php echo $val['name']; ?>
                        </td>
                        <td >
                            <?php echo $val['mobile']; ?>
                        </td>
                        <td >
                            <?php echo $val['email']; ?>
                        </td>
                        <td >
                            <?php echo $val['role']; ?>
                        </td>
                        <td>
                            <?php echo $val['create_time']; ?>
                        </td>
                        <td class="td-status">
                            <?php echo !empty($val['status']) && $val['status']==1?'<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>': '<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>'; ?>
                        </td>
                        <td class="td-manage">
                            <?php if(\think\Session::get('user_info.name') == 'admin'): ?>
                             <!-- <a style="text-decoration:none" href="<?php echo url('admin/setStatus',['id'=>$val['id']]); ?>">
                                <i class="layui-icon">&#xe601;</i>
                            </a> -->
                            <a style="text-decoration:none" href="<?php echo url('admin/changeStatus',['id'=>$val['id']]); ?>">
                                <i class="layui-icon">&#xe601;</i>
                            </a>   
                            <?php endif; ?>
                            <!-- <a title="编辑" href="<?php echo url('admin/adminEdit',['id'=>$val['id']]); ?>" class="ml-5" style="text-decoration:none"> 
                                <i class="layui-icon">&#xe642;</i>
                            </a> -->
                            <a title="编辑" href="javascript:;" onclick="admin_edit()" class="ml-5" style="text-decoration:none"> 
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <?php if(\think\Session::get('user_info.name') == 'admin'): ?>
                            <a href="javascript:" class="del" id="<?php echo $val['id']; ?>">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
                <?php if(isset($page)): ?>
                    <?php echo $page; endif; ?>
        </div>
        <script src="__STATIC__/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="__STATIC__/admin/js/x-layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
        <script type="text/javascript">
            //删除
            $('.del').click(function(){
                id=this.id;
                obj=$(this);   //单击的a链接
                $.post("<?php echo url('admin/delUser'); ?>",{id:id},function(status){
                    if(status==1){
                        alert("success");
                        obj.parent().parent().hide(100);
                    }else{
                        alert("fail");
                    }
                });
            });
            //批量删除
            $("#delAll").on('click',function(){
                str = "";
                $("[name='checkbox'][checked]").each(function(){
                    str+=$(this).val();
                });
                alert(str);
            });
        </script>
        <script type="text/javascript">
            
        </script>
        <script>
            layui.use(['laydate','element','laypage','layer'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层

              //以上模块根据需要引入

              laypage({
                cont: 'page'
                ,pages: 100
                ,first: 1
                ,last: 100
                ,prev: '<em><</em>'
                ,next: '<em>></em>'
              }); 
              
              var start = {
                min: laydate.now()
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  end.min = datas; //开始日选好后，重置结束日的最小日期
                  end.start = datas //将结束日的初始值设定为开始日
                }
              };
              
              var end = {
                min: laydate.now()
                ,max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  start.max = datas; //结束日选好后，重置开始日的最大日期
                }
              };
              
              document.getElementById('LAY_demorange_s').onclick = function(){
                start.elem = this;
                laydate(start);
              }
              document.getElementById('LAY_demorange_e').onclick = function(){
                end.elem = this
                laydate(end);
              }
              
            });

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
             /*添加*/
            function admin_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }

             /*停用*/
            function admin_stop(obj,id){
                layer.confirm('确认要停用吗？',function(index){
                    //发异步到后台
                    $.get("<?php echo url("","",true,false);?>",{id:id});
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                });
            }
            /*启用*/
            function admin_start(obj,id){
                layer.confirm('确认要启用吗？',function(index){
                    //发异步把用户状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                });
            }
            //编辑
            function admin_edit(){
                layer.open({
                    type:2,
                    title:'修改信息',
                    content:"<?php echo url('admin/adminEdit',['id'=>$val['id']]); ?>",     //传入id
                    area:['500px','400px'],
                    closeBtn:1
                });
            }        
            </script>
</html>
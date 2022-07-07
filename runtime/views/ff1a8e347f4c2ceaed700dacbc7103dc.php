<?php /*a:1:{s:64:"F:\work\work\funadmin-webadmin\app/backend/view/login\index.html";i:1657151733;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FunAdmin后台管理系统</title>
    <meta name="keywords" content="FunAdmin-webman 基于webman,thinkphp6,thinkphp,layui,easywechat框架,框架,组件">
    <meta name="description" content="FunAdmin-webman 是一款采用 layui开发的极简后台管理框架 基于thinkphporm ,开发的后台管理系统,webman,thinkphp,cms,php,插件后台管理系统,商城,cms系统,restful api,thinkphp后台管理系统">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name=App-Config content="fullscreen=yes,useHistoryState=yes,langition=yes">
    <meta content=yes name=apple-mobile-web-app-capable>
    <meta content=yes name=apple-touch-fullscreen>
    <meta content="telephone=no,email=no" name=format-detection>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="renderer" content="webkit">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/backend/css/login.css" media="all">
</head>
<body>
<script>
    window.Config = <?php echo json_encode($config); ?>;
    window.Config.formData = <?php echo isset($formData)?(json_encode($formData)):'""'; ?>,
    window.STATIC ='__STATIC__'
    window.ADDONS = '__ADDONS__'
    window.PLUGINS = '__PLUGINS__';
</script>
<style>
    body{background:url("<?php echo htmlentities($bg); ?>") 0% 0% / cover no-repeat}
</style>
<div class="layui-container">
    <div class="layui-login-body">
        <div class="layui-form layui-card-body ">
            <div class="layui-header">
<!--                <div class="layui-icon-header"><i class="layui-icon">&#xe770;</i></div>-->
                <div class="layui-card-header">
                    FunAdmin系统
                </div>
            </div>
            <form class="layui-form layui-form-pane" action="">
                <?php echo token_field(); ?>
                <div class="layui-form-item">
                    <label class="layui-icon layui-icon-username"></label>
                    <input type="text" name="username" lay-verify="required" placeholder="<?php echo lang('UserName Or Email'); ?>" autocomplete="off" class="layui-input" value="">
                </div>
                <div class="layui-form-item">
                    <label class="layui-icon layui-icon-password"></label>
                    <input type="password" name="password" lay-verify="pass" placeholder="<?php echo lang('Password'); ?>" autocomplete="off" class="layui-input" value="">
                </div>
                <?php if(config('funadmin.captcha.check')): ?>
                <div class="layui-form-item">
                    <label class="layui-icon layui-icon-vercode" ></label>
                    <input type="text" name="captcha" lay-verify="required" placeholder="<?php echo lang('Verify'); ?>" autocomplete="off" class="layui-input verification captcha" value="">
                    <div class="captcha-img">
                        <img  id="captchaPic" src="<?php echo __u('ajax/verify'); ?>?<?php echo time(); ?>" alt="captcha" onclick="this.src='<?php echo __u("ajax/verify"); ?>?'+'id='+Math.random()"/>
                    </div>
                </div>
                <?php endif; ?>
                <div class="layui-form-item">
                    <input type="checkbox" name="rememberMe" checked value="true" lay-skin="primary" title="<?php echo lang('Keep Login'); ?>">
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="login"><?php echo lang('Login In'); ?></button>
                </div>
                <div class="layui-form-item copyright">
                    © 2018-2028 <a href="http://www.FunAdmin.com" target="_blank">FunAdmin</a> All Rights Reserved.
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/static/plugins/layui/layui.js" charset="utf-8"></script>
<script defer src="/static/require<?php echo syscfg('site','app_debug')?'':'.min'; ?>.js?v=<?php echo syscfg('site','app_debug')?time():syscfg('site','site_version'); ?>" data-main="/static/js/require-backend<?php echo syscfg('site','app_debug')?'':'.min'; ?>.js?v=<?php echo syscfg('site','app_debug')?time():syscfg('site','site_version'); ?>" charset="utf-8"></script>


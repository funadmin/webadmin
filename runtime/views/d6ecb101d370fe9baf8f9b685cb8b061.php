<?php /*a:2:{s:66:"F:\work\work\funadmin-webadmin\app/backend/view/index\console.html";i:1656989650;s:64:"F:\work\work\funadmin-webadmin\app/backend/view/layout\main.html";i:1657019448;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo syscfg('site','sys_name'); ?>后台管理</title>
    <meta property="og:keywords" content="<?php echo syscfg('site','site_seo_keywords'); ?>" />
    <meta property="og:description" content="<?php echo syscfg('site','site_seo_desc'); ?>" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="referrer" content="never">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/static/backend/css/comm.css" media="all">
    <link rel="stylesheet" href="/static/backend/css/global.css" media="all" />
    <script src="/static/plugins/jquery/jquery-3.6.0.min.js"></script>
    <script src="/static/plugins/layui/layui.js" charset="utf-8"></script>
    <?php echo token_meta(); ?>
</head>
<script>
    window.Config = <?php echo json_encode($config); ?>;
    window.Config.formData = <?php echo isset($formData)?(json_encode($formData)):'""'; ?>,
    window.STATIC = Config.__STATIC__
    window.ADDONS = Config.__ADDONS__
    window.PLUGINS = Config.__PLUGINS__;
</script>
<body style="padding: 10px;background: #fff">

<div class="fun-container" id="app" style="">


<style>
    body{padding:10px}
    .layui-card .layui-card-header .layui-badge.pull-right{top:50%;margin-top:-10px;}
    .pull-right{float: right;}
    .layui-badge{height:20px;line-height:19px;box-sizing:border-box}
    .layui-badge-green{color:#52c41a;background:#f6ffed;border:1px solid #b7eb8f}
    .layui-badge-blue{color:#1890ff;background:#e6f7ff;border:1px solid #91d5ff}
    .layui-badge-red{color:#f5222d;background:#fff1f0;border:1px solid #ffa39e}
    .lay-big-font{font-size:36px;line-height:36px;padding:5px 0 10px;overflow:hidden;white-space:nowrap;word-break:break-all;text-overflow:ellipsis}
    .console-app-group{padding:16px;border-radius:4px;text-align:center;background-color:#fff;cursor:pointer}
    .console-app-group .console-app-icon{width:32px;height:32px;line-height:32px;margin-bottom:6px;display:inline-block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-size:32px;color:#69c0ff}
    .layui-status-img img{width:40px}
</style>
<body>
<div class="fun-app" id="app">
    <div class="fun-container" style="background:#f2f2f2">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-header">
                        访问量<span class="layui-badge layui-badge-green pull-right">日</span>
                    </div>
                    <div class="layui-card-body">
                        <p class="lay-big-font">28,848</p>
                        <p>总访问量<span class="pull-right">290 万</span></p>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-header">
                        销售额<span class="layui-badge layui-badge-blue pull-right">月</span>
                    </div>
                    <div class="layui-card-body">
                        <p class="lay-big-font"><span style="font-size: 26px;line-height: 1;">¥</span>16,000</p>
                        <p>总销售额<span class="pull-right">88 万</span></p>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-header">
                        订单量<span class="layui-badge layui-badge-red pull-right">周</span>
                    </div>
                    <div class="layui-card-body">
                        <p class="lay-big-font">1,380</p>
                        <p>转化率<span class="pull-right">20%</span></p>
                    </div>
                </div>
            </div>
            <div class="layui-col-xs12 layui-col-sm6 layui-col-md3">
                <div class="layui-card">
                    <div class="layui-card-header">
                        新增用户
                        <span class="icon-text pull-right" lay-tips="指标说明" lay-direction="4" lay-offset="5px,5px">
                        <i class="layui-icon layui-icon-tips"></i>
                    </span>
                    </div>
                    <div class="layui-card-body">
                        <p class="lay-big-font">128 <span style="font-size: 24px;line-height: 1;">位</span></p>
                        <p>总用户<span class="pull-right">13800 人</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-row layui-col-space15">
            <div class="layui-col-sm6" style="padding-bottom: 0;">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group" title="用户" lay-id="<?php echo __u('member.member/index'); ?>" data-iframe
                             data-url="<?php echo __u('member.member/index'); ?>">
                            <i class="console-app-icon layui-icon layui-icon-group"
                               style="font-size: 26px;padding-top: 3px;margin-right: 6px;"></i>
                            <div class="console-app-name">用户</div>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group" title="分析" lay-id="<?php echo __u('member.member/index'); ?>" data-iframe
                             data-url="<?php echo __u('member.member/index'); ?>">
                            <i class="console-app-icon layui-icon layui-icon-chart" style="color: #95de64;"></i>
                            <div class="console-app-name">分析</div>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group" title="商品" lay-id="<?php echo __u('member.member/index'); ?>" data-iframe
                             data-url="<?php echo __u('member.member/index'); ?>">
                            <i class="console-app-icon layui-icon layui-icon-cart" style="color: #ff9c6e;"></i>
                            <div class="console-app-name">商品</div>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group" title="订单" lay-id="<?php echo __u('member.member/index'); ?>" dat-iframe
                             data-url="<?php echo __u('member.member/index'); ?>">
                            <i class="console-app-icon layui-icon layui-icon-form"
                               style="color: #b37feb;font-size: 30px;"></i>
                            <div class="console-app-name">订单</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-sm6" style="padding-bottom: 0;">
                <div class="layui-row layui-col-space15">
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group">
                            <i class="console-app-icon layui-icon layui-icon-layer"
                               style="color: #ffd666;font-size: 34px;"></i>
                            <div class="console-app-name">票据</div>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group">
                            <i class="console-app-icon layui-icon layui-icon-email"
                               style="color: #5cdbd3;font-size: 36px;"></i>
                            <div class="console-app-name">消息</div>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group">
                            <i class="console-app-icon layui-icon layui-icon-note"
                               style="color: #ff85c0;font-size: 28px;"></i>
                            <div class="console-app-name">标签</div>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3">
                        <div class="console-app-group">
                            <i class="console-app-icon layui-icon layui-icon-slider" style="color: #ffc069;"></i>
                            <div class="console-app-name">配置</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-row layui-col-space15">
            <div class="layui-col-sm8">

                <div class="layui-card">
                    <div class="layui-row layui-col-space15">
                        <div class="layui-col-sm6">
                            <div class="layui-card">
                                <div class="layui-card-header">本周活跃用户列表</div>
                                <div class="layui-card-body">
                                    <table class="layui-table layui-page-table" lay-skin="line">
                                        <thead>
                                        <tr>
                                            <th>用户名</th>
                                            <th>最后登录时间</th>
                                            <th>状态</th>
                                            <th>获得赞</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><span class="first">胡歌</span></td>
                                            <td><i class="layui-icon layui-icon-log"> 11:20</i></td>
                                            <td><span>在线</span></td>
                                            <td>22 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        <tr>
                                            <td><span class="second">彭于晏</span></td>
                                            <td><i class="layui-icon layui-icon-log"> 10:40</i></td>
                                            <td><span>在线</span></td>
                                            <td>21 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        <tr>
                                            <td><span class="third">靳东</span></td>
                                            <td><i class="layui-icon layui-icon-log"> 01:30</i></td>
                                            <td><i>离线</i></td>
                                            <td>66 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        <tr>
                                            <td>吴尊</td>
                                            <td><i class="layui-icon layui-icon-log"> 21:18</i></td>
                                            <td><i>离线</i></td>
                                            <td>45 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        <tr>
                                            <td>许上进</td>
                                            <td><i class="layui-icon layui-icon-log"> 09:30</i></td>
                                            <td><span>在线</span></td>
                                            <td>21 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        <tr>
                                            <td>小蚊子</td>
                                            <td><i class="layui-icon layui-icon-log"> 21:18</i></td>
                                            <td><i>在线</i></td>
                                            <td>45 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Fun</td>
                                            <td><i class="layui-icon layui-icon-log"> 09:30</i></td>
                                            <td><span>在线</span></td>
                                            <td>21 <i class="layui-icon layui-icon-praise"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="layui-col-sm6">
                            <div class="layui-card">
                                <div class="layui-card-header">用户全国分布</div>
                                <div class="layui-card-body">
                                    <div class="layui-row layui-col-space15">
                                        <div class="layui-col-sm12">
                                            <table class="layui-table layui-page-table" lay-skin="line">
                                                <thead>
                                                <tr>
                                                    <th>排名</th>
                                                    <th>地区</th>
                                                    <th>人数</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>浙江</td>
                                                    <td>62310</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>上海</td>
                                                    <td>59190</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>广东</td>
                                                    <td>55891</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>北京</td>
                                                    <td>51919</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>山东</td>
                                                    <td>39231</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>湖北</td>
                                                    <td>37109</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-card">
                    <div class="layui-col-md12">
                        <div class="layui-card">
                            <div class="layui-tab layui-tab-brief layadmin-latestData">
                                <ul class="layui-tab-title">
                                    <li class="layui-this">今日热搜</li>
                                    <li>今日热帖</li>
                                </ul>
                                <div class="layui-tab-content">
                                    <div class="layui-tab-item layui-show">
                                        <table id="LAY-index-topSearch"></table>
                                        <div class="layui-form layui-border-box layui-table-view"
                                             lay-filter="LAY-table-1"
                                             style=" ">
                                            <div class="layui-table-box">
                                                <div class="layui-table-header">
                                                    <table cellspacing="0" cellpadding="0" border="0"
                                                           class="layui-table"
                                                           lay-skin="line">
                                                        <thead>
                                                        <tr>
                                                            <th data-field="0" data-key="1-0-0" data-unresize="true"
                                                                class=" layui-table-col-special">
                                                                <div class="layui-table-cell laytable-cell-1-0-0 laytable-cell-numbers">
                                                                    <span></span></div>
                                                            </th>
                                                            <th data-field="keywords" data-key="1-0-1"
                                                                data-minwidth="300"
                                                                class="">
                                                                <div class="layui-table-cell laytable-cell-1-0-1">
                                                                    <span>关键词</span></div>
                                                            </th>
                                                            <th data-field="frequency" data-key="1-0-2"
                                                                data-minwidth="120"
                                                                class=" layui-unselect">
                                                                <div class="layui-table-cell laytable-cell-1-0-2">
                                                                    <span>搜索次数</span><span
                                                                        class="layui-table-sort layui-inline"><i
                                                                        class="layui-edge layui-table-sort-asc"
                                                                        title="升序"></i><i
                                                                        class="layui-edge layui-table-sort-desc"
                                                                        title="降序"></i></span></div>
                                                            </th>
                                                            <th data-field="userNums" data-key="1-0-3"
                                                                class=" layui-unselect">
                                                                <div class="layui-table-cell laytable-cell-1-0-3">
                                                                    <span>用户数</span><span
                                                                        class="layui-table-sort layui-inline"><i
                                                                        class="layui-edge layui-table-sort-asc"
                                                                        title="升序"></i><i
                                                                        class="layui-edge layui-table-sort-desc"
                                                                        title="降序"></i></span></div>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="layui-table-body layui-table-main">
                                                    <div class="layui-none">无数据</div>
                                                </div>
                                                <div class="layui-table-fixed layui-table-fixed-l">
                                                    <div class="layui-table-header">
                                                        <table cellspacing="0" cellpadding="0" border="0"
                                                               class="layui-table" lay-skin="line">
                                                            <thead>
                                                            <tr>
                                                                <th data-field="0" data-key="1-0-0" data-unresize="true"
                                                                    class=" layui-table-col-special">
                                                                    <div class="layui-table-cell laytable-cell-1-0-0 laytable-cell-numbers">
                                                                        <span></span></div>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="layui-table-body">
                                                        <table cellspacing="0" cellpadding="0" border="0"
                                                               class="layui-table" lay-skin="line">
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="layui-table-page">
                                                <div id="layui-table-page1"></div>
                                            </div>
                                            <style>.laytable-cell-1-0-0 {
                                                width: 40px;
                                            }

                                            .laytable-cell-1-0-1 {
                                            }

                                            .laytable-cell-1-0-2 {
                                            }

                                            .laytable-cell-1-0-3 {
                                            }</style>
                                        </div>
                                    </div>
                                    <div class="layui-tab-item" style="">
                                        <table id="LAY-index-topCard"></table>
                                        <div class="layui-form layui-border-box layui-table-view"
                                             lay-filter="LAY-table-2"
                                             style=" ">
                                            <div class="layui-table-box">
                                                <div class="layui-table-header">
                                                    <table cellspacing="0" cellpadding="0" border="0"
                                                           class="layui-table"
                                                           lay-skin="line">
                                                        <thead>
                                                        <tr>
                                                            <th data-field="0" data-key="2-0-0" data-unresize="true"
                                                                class=" layui-table-col-special">
                                                                <div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">
                                                                    <span></span></div>
                                                            </th>
                                                            <th data-field="title" data-key="2-0-1" data-minwidth="300"
                                                                class="">
                                                                <div class="layui-table-cell laytable-cell-2-0-1">
                                                                    <span>标题</span></div>
                                                            </th>
                                                            <th data-field="username" data-key="2-0-2" class="">
                                                                <div class="layui-table-cell laytable-cell-2-0-2">
                                                                    <span>发帖者</span></div>
                                                            </th>
                                                            <th data-field="channel" data-key="2-0-3" class="">
                                                                <div class="layui-table-cell laytable-cell-2-0-3">
                                                                    <span>类别</span></div>
                                                            </th>
                                                            <th data-field="crt" data-key="2-0-4"
                                                                class=" layui-unselect">
                                                                <div class="layui-table-cell laytable-cell-2-0-4">
                                                                    <span>点击率</span><span
                                                                        class="layui-table-sort layui-inline"><i
                                                                        class="layui-edge layui-table-sort-asc"
                                                                        title="升序"></i><i
                                                                        class="layui-edge layui-table-sort-desc"
                                                                        title="降序"></i></span></div>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div class="layui-table-body layui-table-main">
                                                    <div class="layui-none">无数据</div>
                                                </div>
                                                <div class="layui-table-fixed layui-table-fixed-l">
                                                    <div class="layui-table-header">
                                                        <table cellspacing="0" cellpadding="0" border="0"
                                                               class="layui-table" lay-skin="line">
                                                            <thead>
                                                            <tr>
                                                                <th data-field="0" data-key="2-0-0" data-unresize="true"
                                                                    class=" layui-table-col-special">
                                                                    <div class="layui-table-cell laytable-cell-2-0-0 laytable-cell-numbers">
                                                                        <span></span></div>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="layui-table-body">
                                                        <table cellspacing="0" cellpadding="0" border="0"
                                                               class="layui-table" lay-skin="line">
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="layui-table-page">
                                                <div id="layui-table-page2"></div>
                                            </div>
                                            <style>.laytable-cell-2-0-0 {
                                                width: 40px;
                                            }
                                            .laytable-cell-2-0-1 {
                                            }

                                            .laytable-cell-2-0-2 {
                                            }

                                            .laytable-cell-2-0-3 {
                                            }

                                            .laytable-cell-2-0-4 {
                                            }</style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-sm4">
                <div class="layui-card">
                    <div class="layui-card-header">版本信息</div>
                    <div class="layui-card-body">
                        <table class="layui-table layui-text">
                            <colgroup>
                                <col width="90">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <td>当前版本</td>
                                <td>v<?php echo config('app.version'); ?>   <a href="https://gitee.com/funadmin/funadmin"
                                                                   target="_blank">更新日志</a></td>
                            </tr>
                            <tr>
                                <td>基于框架</td>
                                <td>thinkphp6</td>
                            </tr>
                            <tr>
                                <td>webman版本</td>
                                <td><?php echo getVersion(); ?></td>
                            </tr>
                            <tr>
                                <td>基于</td>
                                <td>layui-v2.6.11</td>
                            </tr>
                            <tr>
                                <td>基于</td>
                                <td>Requirejs</td>
                            </tr>
                            <!--                        <tr>-->
                            <!--                            <td>基于</td>-->
                            <!--                            <td>easywechat</td>-->
                            <!--                        </tr>-->
                            <tr>
                                <td>主要特色</td>
                                <td>开源免费 / 响应式 / CURD / 低代码 /易二开</td>
                            </tr>
                            <tr>
                                <td>获取渠道</td>
                                <td>
                                    <a href="https://gitee.com/funadmin/funadmin" target="_blank"
                                       class="layui-btn">立即下载</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="layui-card">
                    <div class="layui-card-header">动态</div>
                    <div class="layui-card-body">
                        <dl class="layui-card-status">
                            <dd>
                                <div class="layui-status-img"><a href="javascript:;"><img
                                        src="http://www.funadmin.com/static/addons/bbs/images/avatar/5.jpg"></a></div>
                                <div>
                                    <p>胡歌 在 <a lay-href="http://www.FunAdmin.com">FunAdmin专区</a> 回答问题</p>
                                    <span>几秒前</span>
                                </div>
                            </dd>
                            <dd>
                                <div class="layui-status-img"><a href="javascript:;"><img
                                        src="http://www.funadmin.com/static/addons/bbs/images/avatar/5.jpg"></a></div>
                                <div>
                                    <p>彭于晏 在 <a lay-href="http://www.Funadmin.com">FunAdmin专区</a> 进行了 <a
                                            lay-href="http://www.FunAdmin.comcolumn/quiz/">提问</a></p>
                                    <span>2天前</span>
                                </div>
                            </dd>
                            <dd>
                                <div class="layui-status-img"><a href="javascript:;"><img
                                        src="http://www.funadmin.com/static/addons/bbs/images/avatar/5.jpg"></a></div>
                                <div>
                                    <p>Fun 将 <a lay-href="http://www.layui.com/">layui</a> 更新至 2.6.8 版本</p>
                                    <span>7天前</span>
                                </div>
                            </dd>
                            <dd>
                                <div class="layui-status-img"><a href="javascript:;"><img
                                        src="http://www.funadmin.com/static/addons/bbs/images/avatar/5.jpg"></a></div>
                                <div>
                                    <p>吴尊 在 <a lay-href="http://fly.layui.com/">funadmin社区</a> 发布了 <a
                                            lay-href="http://fly.layui.com/column/suggest/">建议</a></p>
                                    <span>7天前</span>
                                </div>
                            </dd>
                            <dd>
                                <div class="layui-status-img"><a href="javascript:;"><img
                                        src="http://www.funadmin.com/static/addons/bbs/images/avatar/5.jpg"></a></div>
                                <div>
                                    <p>许上进 在 <a lay-href="http://fly.layui.com/">funadmin社区</a> 发布了 <a
                                            lay-href="http://fly.layui.com/column/suggest/">建议</a></p>
                                    <span>8天前</span>
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
</body>
</html>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script defer src="/static/require.min.js?v=<?php echo syscfg('site','site_version'); ?>" data-main="/static/js/require-backend<?php echo syscfg('site','app_debug')?'':'.min'; ?>.js?v=<?php echo syscfg('site','app_debug')?time():syscfg('site','site_version'); ?>" charset="utf-8"></script>

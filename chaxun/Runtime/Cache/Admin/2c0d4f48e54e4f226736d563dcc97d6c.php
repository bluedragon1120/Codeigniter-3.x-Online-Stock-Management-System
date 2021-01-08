<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title>后台管理系统</title>
<link rel="stylesheet" type="text/css" href="/chongzhi/Public/Admin/css/css.css">
<script src="/chongzhi/Public/Admin/js/jquery-1.9.1.js"></script>
<script src="/chongzhi/Public/Admin/js/base.js"></script>
<script src="/chongzhi/Public/Common/Layer-1.9.3/layer.js"></script>
<link rel="stylesheet" type="text/css" href="/chongzhi/Public/Admin/css/nav.css">
<link rel="stylesheet" type="text/css" href="/chongzhi/Public/Admin/font/iconfont.css">
<script type="text/javascript" src="/chongzhi/Public/Admin/js/nav.js"></script>
<script> 
function logout(){
    layer.confirm('你确定要退出吗？', {icon: 3}, function(index){
        layer.close(index);
        window.location.href="<?php echo U('Index/logout');?>";
    });
}
</script>
</head>
<body>
<!--header -->
<div class="header">
    <div class="logo">
        <div class="nav-div1">
            <span><b>充值管理</b></span>
        </div>
    </div>
    <div class="top">   
        <div class="top_link">
            <div style="line-height:80px; float:left; margin-right:20px;color: #fff;">
                您好 [ &nbsp;&nbsp;<?php echo ($_SESSION['account']); ?> &nbsp;&nbsp;] ，欢迎回来！
            </div>
            <ul>
                <li class="top_link_left"></li>
                <li class="top_link_bg"><a class="annex" target="_blank" href="/chongzhi">前台充值</a></li>
                <li class="top_link_bg"><a class="annex" href="javascript:;" onclick="return logout();">退出</a></li>
                <li class="top_link_right"></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="nav" style="float:left;">
    <ul>
        <li class="nav-item">
            <a href="<?php echo U('Index/index');?>"><i class="my-icon nav-icon icon_2"></i><span>充值管理</span></a>
        </li>
        <li class="nav-item">
            <a href="<?php echo U('Index/user');?>"><i class="my-icon nav-icon icon_3"></i><span>用户管理</span></a>
        </li>
    </ul>
</div>
<!-- right -->
<div class="right">
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>跳转提示</title>
    <style type="text/css">
    *{ padding: 0; margin: 0; }
    body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 14px; }

    .message{width: 300px;height: 200px;margin:auto;border:1px solid #1B8F24;margin-top: 120px;}
    .head{width: 100%;height: 30px;background: rgb(222,245,194);text-align: center;padding-top: 5px;}
    .content{height: 100px;width: 100%;}
    .success ,.error{text-align: center;margin-top: 20px;}
    .jump{text-align: center;margin-top: 10px;}
    </style>

    </head>

    <body>
    <div class="message">

    <div class="head"><span>系统提示信息</span></div>

    <div class="content">

    <?php if(isset($message)) {?>

    <p class="success"><span style="color:#00F; font-size:20px;"><?php echo($message); ?></span></p>

    <?php }else{?>

    <p class="error"><span style="color:#F00;"><?php echo($error); ?></span></p>

    <?php }?>

    <p class="detail"></p>

    <p class="jump">

    <a id="href" href="<?php echo($jumpUrl); ?>">如果你的浏览器没有自动跳转，请点击这里...</a>

    <br /><br />

    等待时间： <b id="wait"><?php echo($waitSecond); ?></b> &nbsp; 秒

    </p>

    </div>

    </div>

    <script type="text/javascript">

    (function(){

    var wait = document.getElementById('wait'),href = document.getElementById('href').href;

    var interval = setInterval(function(){

    var time = --wait.innerHTML;

    if(time <= 0) {

    location.href = href;

    clearInterval(interval);

    };

    }, 1000);

    })();

    </script>

    </body>

    </html>
</div>
</body>
</html>
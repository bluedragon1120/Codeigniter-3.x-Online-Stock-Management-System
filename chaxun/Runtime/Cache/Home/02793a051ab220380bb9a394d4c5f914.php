<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>跳转提示</title>
    <style type="text/css">
    * {padding: 0; margin: 0; } 
    body {background: #fff; font-family: '微软雅黑'; color: #333; font-size: 14px; } 
    .message {width: 300px; height: 200px; margin: auto; border: 1px solid #1B8F24; margin-top: 120px; } 
    .head {width: 100%; height: 30px; background: rgb(222, 245, 194); text-align: center; padding-top: 5px; } 
    .content {height: 100px; width: 100%; } 
    .success, .error {text-align: center; margin-top: 20px; } 
    .jump {text-align: center; margin-top: 10px; } 
    </style>
</head>

<body>
    <div class="message">
        <div class="head"><span>系统提示信息</span></div>
        <div class="content">
            <?php if(isset($message)) {?>
            <p class="success"><span style="color:#00F; font-size:20px;">
                    <?php echo($message); ?></span></p>
            <?php }else{?>
            <p class="error"><span style="color:#F00;">
                    <?php echo($error); ?></span></p>
            <?php }?>
            <p class="detail"></p>
            <p class="jump">
                <a id="href" href="<?php echo($jumpUrl); ?>">如果你的浏览器没有自动跳转，请点击这里...</a>
                <br /><br />
                等待时间： <b id="wait">
                    <?php echo($waitSecond); ?></b> &nbsp; 秒
            </p>
        </div>
    </div>
    <script type="text/javascript">
    (function() {
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href;
        var interval = setInterval(function() {
            var time = --wait.innerHTML;
            if (time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
    </script>
</body>
</html>
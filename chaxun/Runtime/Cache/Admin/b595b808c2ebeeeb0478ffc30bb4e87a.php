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
    <!-- <iframe frameborder="0" id="iframe" name="iframe"  src="main.html"></iframe> -->
<div style="padding-top: 20px;margin-left:180px;margin-right:20px;">
    <div class="ddiv1">
        <span class="ddiv1_span1">充值管理</span>
        <div class="ddiv1_d1" style="width:400px; line-height:50px;"></div>  
    </div>
    
    <div style="margin-top: 10px;">
        <form action="/chongzhi/admin.php/Index/add" method="post" onsubmit="return checkAdd();">
            <label>&nbsp;请输入需要添加的会员卡数量:（一次最多生成500张）</label>
            <input  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="3" size="14" name="num" id="num" required type="text"  placeholder="生成数量"/>
            <input type="text" required name="prefix" id="prefix" placeholder="卡号前缀" maxlength="3">
            <input onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="3" size="14" name="amount" id="amount" required type="text"  placeholder="面值"/>
            <button type="submit" class="button">立即添加</button>
        </form>
    </div>
    
    <div style="margin-top: 10px;">
        <form action="/chongzhi/admin.php/Index/export" method="post" onsubmit="return checkExport();">
            <label>&nbsp;导出卡号和卡密:&nbsp;&nbsp;</label>
            <input type="text" required name="id_1" id="id_1" placeholder="起始序号">&nbsp;-
            <input type="text" required name="id_2" id="id_2" placeholder="结束序号">
            <button type="submit" class="button">&nbsp;&nbsp;导出</button>
        </form>
    </div>
    
    <div class="ddiv2">
        <div class="ddiv2_1">
            <a href="<?php echo U('index');?>" <?php if(($use) == ""): ?>class="hover"<?php endif; ?>>全部</a>
            <a href="<?php echo U('index',array('use'=>1));?>" <?php if(($use) == "1"): ?>class="hover"<?php endif; ?>>已使用</a>
            <a href="<?php echo U('index',array('use'=>0));?>" <?php if(($use) == "0"): ?>class="hover"<?php endif; ?>>未使用</a>
        </div>
        <div class="ddiv2_2">
            <div class="ddiv2_2ul1">
                <ul>
                    <li class="li1">序号</li>
                    <li class="li2">卡号</li>
                    <li class="li3">卡密</li>
                    <li class="li4">面值</li>
                    <li class="li5">绑定电话</li>
                    <li class="li6">使用情况</li>
                    <div style="clear:both"></div>
                </ul>
            </div>
            <?php if(!empty($list)): ?><div class="ddiv2_2ul2">
                <ul>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                        <div class="li_fr1">
                            <p class="li1"><?php echo ($val["id"]); ?></p>
                            <p class="li2"><?php echo ($val["account"]); ?></p>
                            <p class="li3"><?php echo ($val["pwd"]); ?></p>
                            <p class="li4"><?php echo ($val["amount"]); ?></p>
                            <p class="li5"><?php echo ((isset($val["mobile"]) && ($val["mobile"] !== ""))?($val["mobile"]):"未使用"); ?></p>
                            <p class="li6"><?php if($val["isuse"] == 1): ?><font color="green">已使用</font><?php else: endif; ?></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <?php else: ?>
                <div align="center" style="margin-top:20px;">暂无数据 </div><?php endif; ?>
        </div>
    </div>
    <!-- 分页 -->
    <div class="page">
        <div align="center"><?php echo ($page); ?> </div>
    </div>
</div>


</div>
</body>
</html>
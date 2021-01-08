<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title>登录</title>
<link rel="stylesheet" href="/chongzhi/Public/Admin/css/login.css">
<script src="/chongzhi/Public/Admin/js/jquery-1.9.1.js"></script>
<script src="/chongzhi/Public/Common/Layer-1.9.3/layer.js"></script>
<script>
function check_login(){
	var account = $('#account').val();
	var password = $('#password').val();
	var code = $('#check_code').attr('name');
	if(account == ''){
		layer.tips('请输入用户名', '#account');
		return false;
	}
	if(password == ''){
		layer.tips('请输入密码', '#password');
		return false;
	}
	return true;
}
</script>
</head>
<body>
<div class="main">
	<div class="login">
	<form name="loginform" id="loginform" method="post" action="<?php echo U('Public/login');?>" onSubmit="return check_login()">
	  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
	    <tr>
	      <td style="width:24%;text-align: right;margin-right: 5px;">用户名：</td>
	      <td width="39%"><input type="text" name="account" id="account" class="infoInput" maxlength="20" value="" style="width:180px; height:30px; margin-top:5px; font-size:16px; padding-left:3px;" /></td>
        </tr>
	    <tr>
	      <td style="width:24%;text-align: right;margin-right: 5px;">密&nbsp;&nbsp;&nbsp;码：</td>
	      <td><input type="password" name="password" id="password" value="" style="width:180px; height:30px; margin-top:12px; font-size:16px; padding-left:3px;" /></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td><input type="submit" name="submit" value="登&nbsp;&nbsp;&nbsp;录" style="width:185px; height:38px; cursor:pointer; background:#06F; border:0; color:#FFF; font-size:14px; font-weight:600; border-radius:4px; position:relative; top:15px;" />
          <span name="0" id="check_code"></span></td>
        </tr>
      </table>
	  </form>
	</div>
	<div class="End">版权所有 2020</div>
</div>


</body>
</html>
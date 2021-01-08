<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>订单查询</title>
    <style type="text/css">
    * {box-sizing: border-box; } 
    body {display: flex; flex-direction: column; justify-content: center; text-align: left; font-family: 'Lato', sans-serif; min-height: 100vh; padding: 1rem; background-color: #fafafa; } 
    li {list-style: none; float: left; border: #CCC 1px solid; text-align: center; line-height: 30px; } 
    div {clear: both; width: 90%; margin: auto; } 
    </style>
</head>

<body>
    <div style="text-align:center; font-size:36px;">客户对账单</div>
    <div style="text-align:center; line-height:50px;">客户：<?php echo ($contact["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：<?php echo ($contact["number"]); ?></div>
    <?php if(!empty($contact['list'])): if(is_array($contact['list'])): $i = 0; $__LIST__ = $contact['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if(!empty($val['sub'])): ?><div>
                <ul>
                    <li style="width:30%;">单据日期：<?php echo ($val["billdate"]); ?></li>
                    <li style="width:30%;">单据编号：<?php echo ($val["billno"]); ?></li>
                    <li style="width:30%;">本次付款：<?php echo ($val["rpamount"]); ?></li>
                </ul>
                <ul>
                    <li style="width:30%;">商品编号</li>
                    <li style="width:30%;">商品名称</li>
                    <li style="width:5%;">数量</li>
                    <li style="width:5%;">单位</li>
                    <li style="width:10%;">单价</li>
                    <li style="width:10%;">金额</li>
                </ul>
                <?php if(is_array($val['sub'])): $i = 0; $__LIST__ = $val['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; $num = abs($v['qty']);?>
                    <ul>
                        <li style="width:30%;"><?php echo ($v["number"]); ?></li>
                        <li style="width:30%;"><?php echo ($v["name"]); ?></li>
                        <li style="width:5%;"><?php echo ($num); ?></li>
                        <li style="width:5%;"><?php echo ($v["unitname"]); ?></li>
                        <li style="width:10%;"><?php echo ($v["price"]); ?></li>
                        <li style="width:10%;"><?php echo ($v['price']*$num); ?></li>
                    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                <ul>
                    <li style="width:50%;">店铺名称：<?php echo ($val['sub'][0]['sname']); ?></li>
                    <li style="width:40%;"><a href="#">点击查看处方>></a></li>
                </ul>
                <div style="height:40px;"></div>
            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    <?php else: ?>
        <div align="center" style="margin-top:20px;color:red;">没有查询到订单数据！ </div><?php endif; ?>
    <div style="display:none;">
        <ul>
            <li style="width:30%;">单据日期：2020-03-28</li>
            <li style="width:30%;">单据编号：XS202009261999999</li>
            <li style="width:30%;">本次付款：800</li>
        </ul>
        <ul>
            <li style="width:30%;">商品编号</li>
            <li style="width:30%;">商品名称</li>
            <li style="width:5%;">数量</li>
            <li style="width:5%;">单位</li>
            <li style="width:10%;">单价</li>
            <li style="width:10%;">金额</li>
        </ul>
        <ul>
            <li style="width:30%;">SA1600004C04</li>
            <li style="width:30%;">潮流SA1600004C04</li>
            <li style="width:5%;">2</li>
            <li style="width:5%;">付</li>
            <li style="width:10%;">100</li>
            <li style="width:10%;">200</li>
        </ul>
        <ul>
            <li style="width:30%;">SA1600004C04</li>
            <li style="width:30%;">潮流SA1600004C04</li>
            <li style="width:5%;">2</li>
            <li style="width:5%;">付</li>
            <li style="width:10%;">100</li>
            <li style="width:10%;">200</li>
        </ul>
        <ul>
            <li style="width:50%;">店铺名称：天下汇店</li>
            <li style="width:41%;"><a href="#">点击查看处方>></a></li>
        </ul>
        <div style="height:40px;"></div>
    </div>
</body>

</html>
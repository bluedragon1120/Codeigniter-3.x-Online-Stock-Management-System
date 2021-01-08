<?php
/**
 * 公用方法
 *
 * @author        金哥 <1216547706@qq.com>
 * @since         File available since Release v1.0         
 * @copyright     Copyright (c) 2015-2016 . All rights reserved. 
 */

 /**
 * 随机生成8位字母
 */
function randSZ($n){
    $code = '';
    for($i=1;$i<=$n;$i++){
        $code .=rand(1,9);
    }
    return $code;
}
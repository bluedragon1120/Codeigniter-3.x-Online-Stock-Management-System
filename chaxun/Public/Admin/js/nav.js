$(function(){
    // nav收缩展开
    $('.nav-item>a').on('click',function(){
        if (!$('.nav').hasClass('nav-mini')) {
            if ($(this).next().css('display') == "none") {
                //展开未展开
                $('.nav-item').children('ul').slideUp(300);
                $(this).next('ul').slideDown(300);
                $(this).parent('li').addClass('nav-show').siblings('li').removeClass('nav-show');
            }else{
                //收缩已展开
                $(this).next('ul').slideUp(300);
                $('.nav-item.nav-show').removeClass('nav-show');
            }
        }
    });
    //nav-mini切换
    $('#mini').on('click',function(){
        if (!$('.nav').hasClass('nav-mini')) {
            $('.nav-item.nav-show').removeClass('nav-show');
            $('.nav-item').children('ul').removeAttr('style');
            $('.nav').addClass('nav-mini');
        }else{
            $('.nav').removeClass('nav-mini');
        }
    });


    $('.nav .nav-item a').each(function(){  
        console.log($($(this))[0].href+' '+String(window.location))
        if($($(this))[0].href==String(window.location)){
           $(this).addClass('navahover'); 
        }else{
            $(this).removeClass('navahover');
        } 
    });

});

function checkAdd(){
    var num = $('#num').val();
    var prefix = $('#prefix').val();
    var amount = $('#amount').val();
    if(num == ''){
        layer.tips('请输入生成数量', '#num');
        return false;
    }
    if(prefix == ''){
        layer.tips('请输入前缀', '#prefix');
        return false;
    }
    if(amount == ''){
        layer.tips('请输入面值', '#amount');
        return false;
    }
    return true;
}

function checkExport(){
    var id_1 = $('#id_1').val();
    var id_2 = $('#id_2').val();
    if(id_1 && id_2){
        if(id_1>id_2){
            layer.tips('起始序号不能大于结束序号');
            return false;
        } 
    }
    return true;
}

function checkImport(){
    var id_1 = $('#file_name').val();
    if(id_1==''){
        layer.tips('请选择上传文件', '#file_name');
        return false;
    }
    return true;
}
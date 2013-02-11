
/**
 * check ,'class'=>'necessary'
 * Производится проверка обязательных полей
 */
$.checkNecessary = function(type) {
    $.resetBorderNacessary();
    var fals=1;
    if(type==0)
    {
        $('.necessary').each(function(){
            if($(this).val()==''){
                fals=0;
                $(this).css({
                    'border-color':'red'
                });
            }
        })
        $('.s_necessary').each(function(){
            if($(this).val()=='' || $(this).val()=='0') {
                fals=0;
                $(this).css({
                    'border-color':'red'
                });
            }
        })
    }
    if(type==1)
    {
        $('.p_necessary').each(function(){
            if($(this).val()=='' || $(this).val()=='0') {
                fals=0;
                $(this).css({
                    'border-color':'red'
                });
            }
        })  
    }

    if(fals==0) return true;
    return false;
}

/**
 * Стираем стили бордероов 
 * обязательных полей
 * в случае, если они были отмечены
 * при проверке 
 */
$.resetBorderNacessary = function(){
    $('.necessary,.s_necessary,.p_necessary').css({
        'border-color':''
    }); 
}
/**
 * разрешаем ввод в поле только цифр
 */
function checkNumber(selector) {
    $(selector).live('keypress',function(e){
        if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
        {
            //Вывод сообщения об ошибке
            //$("#errmessage").html("Ошибка: Только цифры").show().delay(1000).fadeOut("slow");
            return false;
        }
    })
}






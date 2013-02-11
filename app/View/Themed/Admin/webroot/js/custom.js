function uniqid() {
    var newDate = new Date;
    return newDate.getTime(); 
}

/*
 * Замена
 **/
// str_replace("что заменяем", "чем заменяем", "исходная строка")
function str_replace(search, replace, subject) {
    return subject.split(search).join(replace);
}     

function SetSlideshowImageUrl( fileUrl ){
    $('#PageImageUrl').val(fileUrl);
}

$(function () {

    // Drag&drop filters
    $(".dragPages").tableDnD({
        onDragClass: "dragRow",
        onDrop: function(table, row) {
            var rows = table.tBodies[0].rows;
            var messageString= Array();
            for (var i=0; i<rows.length; i++) {
                messageString=messageString+"&page["+rows[i].id+"]=1";
            }
            var _data=messageString;
            var url="/admin/ajax/resort_pages/";

            $.post(url, _data, function(){
                redrawOdds()
            }, 'json');
        }
    });
    
    // mark export
    $(".MarkerExport").click(function(){
        var id = $(this).val();
        if (id){
            $.post('/admin/objects/setexport/'+id, {
                'export':$(this).attr('checked')
            }, function(json){
                },
                'json');
            if ($(this).attr('checked'))
                alert('Выгрузка активна');
            else
                alert('Выгрузка не активна');
            
        }
        
    });
    
    // send subscribe
    $(".send_subscribe").click(function(){
        var subscribe_id=$(this).parent().parent().attr('id');
        $.post('/admin/ajax/create_subscribe/', {
            'subscribe_id':subscribe_id
        }, function(json){
            if (json.result==true){
                alert('Subscribe is done');                
            }
        },
        'json');
    });
    
    $(".delete_page").click(function(){
        var title_page=$(this).parent().parent().find('td:first').next().find('a').html();
        if (confirm('Delete page "'+title_page+'"')){
            var object=$(this);
            var page_id=$(this).parent().parent().attr('id');
            $.post('/admin/ajax/delete_page/', {
                'page_id':page_id
            }, function(json){
                if (json.result==true){
                    object.parent().parent().remove();
                }
            },
            'json');
        }
        return false;
    });
    
    $(".hide_page").click(function(){
        var block=1;
        var object=$(this);
        var page_id=$(this).parent().parent().attr('id');
        if (object.find('img').attr('src')=='/images/icons/16/no_red.png')
            block = 0         
            
        $.post('/admin/ajax/hide_page/', {
            'page_id':page_id,
            method: 'block',
            block: block                
        }, function(json){
            if (json.result==true){
                if (block==1)
                    object.find('img').attr('src', '/images/icons/16/no_red.png');
                else 
                    object.find('img').attr('src', '/images/icons/16/no.png');                    
            }
        },
        'json');
        return false;
    });
    
    function redrawOdds(){
        $("table.highlight > tbody > tr").removeClass("odd");
        $("table.highlight > tbody > tr:visible:odd").addClass("odd");
    }
    
    
    
    $(".block_recipient").click(function(){
        var block=1;
        var object= $(this);
        var id = $(this).parent().parent().attr('id');
        
        if (object.find('img').attr('src')=='/images/icons/16/no_red.png')
            block = 0         
        $.post('/admin/ajax/manage_recipient/', {
            recipient_id:id, 
            method: 'block',
            block: block
        },function(json){
            if (json.result==true){
                if (block==1)
                    object.find('img').attr('src', '/images/icons/16/no_red.png');
                else 
                    object.find('img').attr('src', '/images/icons/16/no.png');
            }
        },'json');
        return false;
    });
    
    $(".delete_recipient").click(function(){
        var email = $(this).parent().parent().find('td:first').next().find('a').html();
        if (confirm('Delete email "'+email+'"?')){
            var id = $(this).parent().parent().attr('id');
            var object= $(this);
            $.post('/admin/ajax/manage_recipient/', {
                recipient_id:id, 
                method: 'delete'
            },function(json){
                if (json.result==true){
                    object.parent().parent().remove();
                }
            },'json');
        }
    });

    //    $("form").live('submit', function(){
    //        var result = true;
    //
    //        $(this).find("input.required").each(function(){
    //            if (!$(this).val()){
    //                alert('Please fill all the required fields.');
    //                $(this).focus();
    //                return result = false;
    //                
    //            }
    //        });
    //        return result;        
    //    })

 
    // Add pdf icons to pdf links
    $("a[href$='.pdf']").addClass("pdf");

    // Add txt icons to document links (doc, rtf, txt)
    $("a[href$='.doc'], a[href$='.txt'], a[href$='.rft']").addClass("txt");
 
    // Add zip icons to Zip file links (zip, rar)
    $("a[href$='.zip'], a[href$='.rar']").addClass("zip");  
 
    // Preload images
    $.preloadCssImages();
	
	
    // CSS tweaks
    $('#header #nav li:last').addClass('nobg');
    $('.block_head ul').each(function() {
        $('li:first', this).addClass('nobg');
    });
    $('.block table tr:odd').css('background-color', '#fbfbfb');
    $('.block form input[type=file]').addClass('file');
			
	
    // Web stats
    $('table.stats').each(function() {
        var statsType;
		
        if($(this).attr('rel')) {
            statsType = $(this).attr('rel');
        }
        else {
            statsType = 'area';
        }
		
        $(this).hide().visualize({
            type: statsType,	// 'bar', 'area', 'pie', 'line'
            width: '880px',
            height: '240px',
            colors: ['#6fb9e8', '#ec8526', '#9dc453', '#ddd74c']
        });
    });
	
	
    // Check / uncheck all checkboxes
    $('.check_all').click(function() {
        $(this).parents('form').find('input:checkbox').attr('checked', $(this).is(':checked'));
    });
		
	
    // Set WYSIWYG editor
    $('.wysiwyg').wysiwyg({
        css: "/css/wysiwyg.css"
    });
	
	
    // Modal boxes - to all links with rel="facebox"
    $('a[rel*=facebox]').facebox()
	
	
    // Messages
    $('.block .message').hide().append('<span class="close" title="Dismiss"></span>').fadeIn('slow');
    $('.block .message .close').hover(
        function() {
            $(this).addClass('hover');
        },
        function() {
            $(this).removeClass('hover');
        }
        );
		
    $('.block .message .close').live('click',function() {
        $(this).parent().fadeOut('slow', function() {
            $(this).remove();
        });
    });
	
	
    // Form select styling
    $("form select.styled").select_skin();
	
	
    // Tabs
    $(".tab_content").hide();
    $("ul.tabs li:first-child").addClass("active").show();
    $(".block").find(".tab_content:first").show();

    $("ul.tabs li").click(function() {
        $(this).parent().find('li').removeClass("active");
        $(this).addClass("active");
        $(this).parents('.block').find(".tab_content").hide();

        var activeTab = $(this).find("a").attr("href");
        $(activeTab).show();
        return false;
    });
	
	
    // Sidebar Tabs
    $(".sidebar_content").hide();
    $("ul.sidemenu li:first-child").addClass("active").show();
    $(".block").find(".sidebar_content:first").show();

    $("ul.sidemenu li").click(function() {
        $(this).parent().find('li').removeClass("active");
        $(this).addClass("active");
        $(this).parents('.block').find(".sidebar_content").hide();

        var activeTab = $(this).find("a").attr("href");
        $(activeTab).show();
        return false;
    });
	
	
    // Block search
    $('.block .block_head form .text').bind('click', function() {
        $(this).attr('value', '');
    });
	
	
    // Image actions menu
    $('ul.imglist li').hover(
        function() {
            $(this).find('ul').css('display', 'none').fadeIn('fast').css('display', 'block');
        },
        function() {
            $(this).find('ul').fadeOut(100);
        }
        );
	
    // Style file input
    $("input[type=file]").filestyle({
        image: "/images/upload.gif",
        imageheight : 30,
        imagewidth : 80,
        width : 250
    });
	
	
    // File upload
    if ($('#priceupload').length) {
        new AjaxUpload('priceupload', {
            action: '/import/upload/',
            autoSubmit: true,
            name: 'price',
            responseType: 'text/html',
            onSubmit : function(file , ext) {
                $('.priceupload #uploadmsg').addClass('loading').text('Uploading...');
                this.disable();
            },
            onComplete : function(file, response) {
                $('.priceupload #uploadmsg').removeClass('loading').html(response);
                this.enable();
            }
        });
    }
		
		
	
    // Date picker
    $('input.date_picker').date_input({
        'formatDate': "yy-mm-dd"
    });

    // Navigation dropdown fix for IE6
    if(jQuery.browser.version.substr(0,1) < 7) {
        $('#header #nav li').hover(
            function() {
                $(this).addClass('iehover');
            },
            function() {
                $(this).removeClass('iehover');
            }
            );
    }
    
    $('.lib_delete').click(function(){
        if(!confirm('Действительно удалить?')) return false; 
    });
    
    /*
    * Проверка полей класс necessary на заполненность
    */
    //    $('form').submit(function(){
    //        $.resetBorderNacessary();
    //        var necessary = $.checkNecessary(0);
    //        if(necessary==true) return false;    
    //    });
    //    
    /*Многоуровневый селект
      *данный метод принимает данные с селекта и возвращает
      *записи для дочернего селекта 
     * входные данные: 
     * атрибут alt селекта -это url
     * атрибус rel имя модели для нижнего селекта
     * атрибус title ключ по которому делается выборка
     * на выходе получаем json ответ с готовым набором option
    */
    $('select.first').change(function(){
        var id=$(this).val();
        var model=$(this).attr('rel');
        var fkey=$(this).attr('title');
        var object = $(this);
        if(id && model && fkey)
        {
            $.ajax({
                url:'/app/SelectAjax',
                dataType:"json",
                data:{
                    id:id,
                    model:model,
                    fkey:fkey
                },
                async:true,
                type:"post",
                success:function(json)
                {
                    $('select.second').eq(0).html(json.options1);
                    $('select.second').eq(1).html(json.options0);
                }
            });  
        } else {
            $('select.second').html('<option value=0>Выбрать наименование</option>');
        }
       
    });
    

    /*
    * +если есть площадь и вводят общую цену считается цена за метр
    */
    $('#ObjectsPrice,#ObjectsSquare').change(function(){
        var square = $('#ObjectsSquare').val();        
        var price = $('#ObjectsPrice').val();        
        if(square){
            $('#ObjectsPricePerMetre').val(Math.round(price/square)); 
        }

    });
    
    /*
    * +если есть площадь и вводят цену за метр считается общая цена
    */
    $('#ObjectsPricePerMetre').change(function(){
        var square = $('#ObjectsSquare').val();             
        var price_m = $('#ObjectsPricePerMetre').val();  
        if(square){
            $('#ObjectsPrice').val(price_m*square); 
        }
    });
    
    $('#ObjectsArchive').click(function(){
        var check =$('#ObjectsActive').attr('checked'); 
        if(check) return false;
    });
    
    $('#ObjectsActive').click(function(){
        var check =$('#ObjectsArchive').attr('checked'); 
        if(check) return false;
    });
    
    $(".post_avito").click(function(){
        var self = $(this);
        var id = $(this).parent().parent().parent().attr('id').split('object_')[1];
        var href = $(this).parent().attr('href');

        var parent = self.parent().parent();
        
        var insert = '<img alt="" src="/theme/Admin/images/loader.gif">';
        parent.html(insert);
        
        $.get(href, {}, function(data){
            if (data.result==true){
                var insert = '<img alt="" src="/theme/Admin/images/avito_no.png">';
                parent.html(insert);
            }
        }, 'json');
            
        return false;
    });
    
    $("input#addSpaceToObject").click(function(){
        var uid=uniqid();

        var insert="<tr>\n\
            <td><input name=\"data[Space]["+uid+"][total_area]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"TotalArea\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][trade_area]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"TradeArea\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][floor]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"Floor\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][floors]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"Floors\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][rooms]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"Rooms\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][ceiling]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"Ceiling\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][kw]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"Kw\"></td>\n\
            <td><input name=\"data[Space]["+uid+"][total_price]\" value=\"\" class=\"text big90p\" type=\"text\" id=\"Space"+uid+"TotalPrice\"></td>\n\
            <td><input type=\"hidden\" name=\"data[Space]["+uid+"][delete]\" id=\"Space"+uid+"Delete_\" value=\"0\"><input type=\"checkbox\" name=\"data[Space]["+uid+"][delete]\" value=\""+uid+"\" id=\"Space"+uid+"Delete\"></td>\n\
        </tr>";
        $("#SpacesOfObject tbody").append(insert);
        return false; 
    });

    
    $(".addExport").click(function(){
        
        var id = $(this).parent().parent().attr('id').split('object_')[1];
     
        if (id){
            $.post('/admin/objects/setexport/'+id, {
                'export':$(this).attr('checked')
            }, function(json){},
                'json');
            
        }        
        
    });
    
    if ($('#link_search_text').length) {
        
        var json_options = {
            script:'/admin/preparats/json_find/',
            varName:'?search',
            json:true,
            shownoresults:true,
            maxresults:10,
            callback: function (obj) {
                if ($("#link_search_id").length){
                    //alert(obj.price1);
                    $('#link_search_id').val(obj.id);
                //                    $('#link_search_price').val(obj.price);
                }
            //            $('#RequestId').html('you have selected: '+obj.id + ' ' + obj.value + ' (' + obj.info + ')');
            }
        };
        
        $('#link_search_text').autoComplete(json_options);
        
        // Добавление связи с товаром
        
        $("#link_add_button").click(function(){
            var namec = $('#link_search_text').val();
            var preparat_uid = $('#link_search_id').val();
            if (preparat_uid){
                
                var uid = uniqid();
            
                var insertLineLink="\
                <tr>\n\
                        <input type='hidden' id='Productpreparat" + uid + "PreparatUid' value='" + preparat_uid + "' name='data[Productpreparat][" + uid + "][preparat_uid]'>\n\
                        <td>" + namec + "</td>\n\
                        <td align='center'>\n\
                                <input type='hidden' value='0' id='Productpreparat" + uid + "Delete_' name='data[Productpreparat][" + uid + "][delete]'>\n\
                                <input type='checkbox' id='Productpreparat" + uid + "Delete' value='1' name='data[Productpreparat][" + uid + "][delete]'>\n\
                        </td>\n\
                </tr>";
                
                $("#link_table_content tbody").append(insertLineLink);
            }
            
            // очищаем форму            
            $('#link_search_text').val("");
            $('#link_search_id').val("");
            
        });
        
    }


    // IE6 PNG fix
    $(document).pngFix();
		
});
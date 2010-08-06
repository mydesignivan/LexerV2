var PictureGallery = new (function(){

   /* CONSTRUCTOR
    **************************************************************************/
   this.initializer = function(_params){
       params = _params;

       $(params.sel_iframe).bind('load', _iframe_load);
       $(params.sel_gallery+' li a.jq-removeimg').bind('click', _remove_image);
   };

  /* PUBLIC METHODS
   **************************************************************************/
   this.upluad = function(){
        if( $(params.sel_input).val() ){
            $(params.sel_button).hide();
            $(params.sel_ajaxloader).show();

            $(params.sel_form).attr('action', baseURI+'ajax_upload')
                              .attr('enctype', 'multipart/form-data')
                              .attr('target', params.sel_iframe.substr(1))
                              .submit();
        }
   };

   this.get_images_new = function(){
       var data = new Array();
        $(params.sel_gallery + ' li').each(function(){
            var li = $(this);
            var tagA = li.find('a.jq-image');
            var tagImg = tagA.find('img');

            if( li.data('au-newimg') ){
                var newImg = Image();
                newImg.src = tagImg.attr('src');

                data.push({
                    image_full  : _get_filename(tagA.attr('href')),
                    image_thumb : _get_filename(tagImg.attr('src')),
                    width       : newImg.width,
                    height      : newImg.height
                });


            }
        });
       return data;
   };

   this.get_images_del = function(){
       return array_images_del;
   };

   this.get_orders = function(){
       var data = new Array();
       var n = 0;
        $(params.sel_gallery + ' li').each(function(){
            n++;
            var li = $(this);
            data.push({
                image_full : _get_filename(li.find('a.jq-image').attr('href')),
                order      : n
            });
        });
        return data;
   };
      

   /* PRIVATE PROPERTIES
    **************************************************************************/
    var params;
    var array_images_del = new Array();

   /* PRIVATE METHODS
    **************************************************************************/
    var _iframe_load = function(){
        var content = this.contentDocument || this.contentWindow.document;
            content = content.body.innerHTML;

        if(content=='') return false;

        $(params.sel_button).show();
        $(params.sel_ajaxloader).hide();

        try{
            var data = JSON.decode(content);

        }catch(err){
            alert(content);
        }

        if( typeof(data)!="undefined" ){
            if( !data.error ){
                var ul = $(params.sel_gallery);
                var li = ul.find('li:first');

                if( ul.is(':visible') ) li = li.clone();

                li.find('a.jq-image').attr('href', data.image.href_image_full);
                li.find('img:first').attr('src', data.image.href_image_thumb);
                var audata = {width : data.image.thumb_width, height : data.image.thumb_height};

                if( !ul.is(':visible') ){
                    //li.find('a.jq-removeimg').bind('click', _remove_image);
                    li.data('au-data', audata);
                    li.data('au-newimg', true);
                    ul.show();
                }else{
                    ul.find('li:last').after('<li>'+li.html()+'</li>');
                    ul.find('li:last').find('a.jq-removeimg').bind('click', _remove_image);
                    ul.find('li:last').data('au-data', audata);
                    ul.find('li:last').data('au-newimg', true);
                }

                $(params.sel_input).val('');
                params.callback();

            }else alert(data.message);
        }

        return false;
    };

    var _get_filename = function(str){
        var arr = str.split('/');
        return arr[arr.length-1].toLowerCase();
    };

    var _remove_image = function(e){
        e.preventDefault();

        if( confirm('¿Está seguro de quitar la imágen?') ){
            var li = $(e.target).parent().parent();

            var remove = function(){
                var ul = $(params.sel_gallery);
                if( ul.find('li').length==1 ){
                    ul.hide();
                }else li.remove();
            };

            var tagA = li.find('a.jq-image');
            var tagImg = tagA.find('img');
            var image_full = tagA.attr('href');
            var image_thumb = tagImg.attr('src');

            if( li.data('au-newimg') ){

                $.post(baseURI+'ajax_upload/delete', {au_filename_image : image_full, au_filename_thumb : image_thumb}, function(data){
                    if( data=="ok" ){
                        remove();

                    }else alert("ERROR DELETE:\n"+data);
                });
            }else{
                array_images_del.push({
                    image_full  : _get_filename(image_full),
                    image_thumb : _get_filename(image_thumb)
                });
                remove();
            }
        }
    };


})();
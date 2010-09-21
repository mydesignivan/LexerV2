var Galeria = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(mode_edit){
        _mode_edit = mode_edit;

        $('#form1').bind('submit', _on_submit);
        
        // ESTO ES PARA LA GALERIA DE IMAGEN
        $(document).ready(function(){
            PictureGallery.initializer({
                sel_input      : '#txtUploadFile',
                sel_button     : '#btnUpload',
                sel_ajaxloader : '#ajax-loader1',
                sel_gallery    : '#gallery-image',
                sel_msgerror   : '#pg-msgerror',
                action         : baseURI+'paneladmin/galeria/ajax_upload_gallery',
                href_remove    : baseURI+'paneladmin/galeria/ajax_upload_delete',
                defined_size   : {
                    width  : 108,
                    height : 70
                },
                callback       : function(){
                    $('a.jq-image').fancybox();
                }
            });
        });

        $("#gallery-image").sortable({
                                stop : function(){
                                    $('a.jq-image').fancybox();
                                },
                                revert: true,
                                handle : '.handle'
                           }).disableSelection();
        // ----

        // Configura Fancybox
        $('a.jq-image').fancybox();

    };

    /* PRIVATE PROPERTIES
     **************************************************************************/
     var _mode_edit=false;

    /* PRIVATE METHODS
     **************************************************************************/
     var _Loader = {
         show : function(sel){
             var f = $(sel);
             f.find('img.jq-loading').show();
             f.find('.jq-submit')[0].disabled=true;
         },
         hide : function(sel){
             var f = $(sel);
             f.find('img.jq-loading').hide();
             f.find('.jq-submit')[0].disabled=false;
         }
     };

     var _on_submit = function(){
        _Loader.show('#form1');

        var data={};
        data.gallery={};
        data.gallery.images_new = PictureGallery.get_images_new();
        if( _mode_edit ) {
            data.gallery.images_del = PictureGallery.get_images_del();
            data.gallery.images_order = PictureGallery.get_orders();
        }
        data.mode_edit = _mode_edit;

        $('#json').val(JSON.encode(data));

        return true;
     }

})();

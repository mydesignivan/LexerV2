var Recomendacion = new (function(){
    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {
                txtAsunto: 'required',
                txtMensaje: 'required',
                txtEmail: {
                   required: true,
                   email: true
                }
            },
            submitHandler : function(form){
                loader.show();
                form.submit();
            },
            invalidHandler : function(){
                eval($('#captchaReload').attr('href'));
                loader.hide();
            }
        });
        $('#form1').validate(o);

    };

    


    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PRIVATE METHODS
     **************************************************************************/

})();


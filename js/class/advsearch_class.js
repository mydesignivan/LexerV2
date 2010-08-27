var Advsearch = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        /*var o = $.extend(true, jQueryValidatorOptDef, {
            rules : {
                cboUserType: 'required',
            },
            submitHandler : function(){
                loader.show();
            },
            invalidHandler : function(){
                eval($('#captchaReload').attr('href'));
                loader.hide();
            }

        });
        $('#form1').validate(o);*/

        $("#slider-range-peso").slider({
            range  : true,
            min    : 0,
            max    : 500,
            values : [75, 300],
            slide  : function(event, ui) {
                //$("#txtPeso").val('$' + ui.values[0] + ' - $' + ui.values[1]);
            }
        });
        //$("#txtPeso").val('$' + $("#slider-range").slider("values", 0) + ' - $' + $("#slider-range").slider("values", 1));
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PRIVATE METHODS
     **************************************************************************/

})();


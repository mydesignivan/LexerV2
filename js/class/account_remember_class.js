var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend(true, jQueryValidatorOptDef, {
            rules : {
                txtEmail: {
                   required: true,
                   email: true
                }
            }
        });
        $('#form1').validate(o);
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PRIVATE METHODS
     **************************************************************************/

})();


var Contact = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend(true, {
            rules : {
                txtName  : 'required',
                txtEmail : {
                   required: true,
                   email: true
                },
                txtSubject : 'required',
                cboAsunto  : 'required',
                txtMessage : 'required'                
            },

            invalidHandler : function(){
            }

        }, jQueryValidatorOptDef);
        $('#form1').validate(o);

    };


    /* PRIVATE PROPERTIES
     **************************************************************************/


    /* PRIVATE METHODS
     **************************************************************************/

})();


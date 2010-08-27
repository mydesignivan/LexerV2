var Contact = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend({}, jQueryValidatorOptDef,{
            rules : {
                txtName  : 'required',
                txtEmail : {
                   required: true,
                   email: true
                },
                txtSubject : 'required',
                cboArea  : 'required',
                txtMessage : 'required'
            }
        });
        $('#form1').validate(o);
        
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/


    /* PRIVATE METHODS
     **************************************************************************/

})();


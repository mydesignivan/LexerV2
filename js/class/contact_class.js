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
                cboArea  : 'required',
                txtMessage : 'required'
            },
            debug:true,
            errorPlacement : function(error, element){
                alert(element[0].nodeName);
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


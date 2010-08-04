var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        $('#form1').submit(function(){
            loader.show();

        }).validate({
            rules : {
                cboUserType: 'required',
                txtEmail: {
                   required: true,
                   email: true,
                   remote : {
                       url  : baseURI+'account/ajax_check_exists/',
                       type : "post"
                   }
                },
                txtConfirmEmail: {
                    required: true,
                    equalTo: "#txtEmail"
                },
                txtPass: {
                    required: true,
                    password: true
                },
                txtConfirmPass: {
                    required: true,
                    equalTo: "#txtPass"
                },
                chkPolitic: 'required',
                txtCaptcha: {
                    required : true,
                    remote : {
                        url  : baseURI+'captcha/validate/',
                        type : "post"
                    }
                }                
            },

            invalidHandler : function(){
                loader.hide();
            },
           
            success: 'valid-success',
            errorClass: 'valid-error',
            onfocusout: false
        });

    };


    /* PRIVATE PROPERTIES
     **************************************************************************/


    /* PRIVATE METHODS
     **************************************************************************/

})();


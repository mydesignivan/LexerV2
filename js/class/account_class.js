var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend(true, {
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
            }

        }, jQueryValidatorOptDef);
        $('#form1').submit(function(){loader.show();}).validate(o);

    };


    /* PRIVATE PROPERTIES
     **************************************************************************/


    /* PRIVATE METHODS
     **************************************************************************/

})();


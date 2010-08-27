var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend(true, jQueryValidatorOptDef, {
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
            submitHandler : function(){
                loader.show();
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


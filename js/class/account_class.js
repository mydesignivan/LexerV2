var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend({}, jQueryValidatorOptDef, {
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

    this.initializer2 = function(){
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {
                txtEmail: {
                   required: true,
                   email: true
                },
                txtPass: {
                    password: true
                },
                txtConfirmPass: {
                    equalTo: "#txtPass"
                }
            },
            submitHandler : function(){
                loader.show();
            },
            invalidHandler : function(){
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


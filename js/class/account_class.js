var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {
                cboUserType: 'required',
              txtUser : {
                    required : true,
                    remote : {
                       url  : baseURI+'account/ajax_check_exists/',
                       type : "post"
                    }/*,
                    username : true*/
               },
                txtPass: {
                    required: true,
                    password: true
                },
                txtConfirmPass: {
                    required: true,
                    equalTo: "#txtPass"
                },
                txtEmail: {
                   required: true,
                   email: true
                },
                txtConfirmEmail: {
                    required: true,
                    equalTo: "#txtEmail"
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

    this.initializer2 = function(){
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {
                txtEmail: {
                   required: true,
                   email: true
                },
                txtPassOld: {
                    remote : {
                       url  : baseURI+'paneluser/myaccount/ajax_check_exists_pass/',
                       type : "post"
                    }
                },
                txtPass: {
                  password: true
                },
                txtConfirmPass: {
                    equalTo: "#txtPass"
                }
            },
            submitHandler : function(form){
                loader.show();
                form.submit();
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


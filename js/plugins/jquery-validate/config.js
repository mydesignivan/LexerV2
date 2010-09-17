// VALORES POR DEFECTO
var jQueryValidatorOptDef = {
    success: function(label) {
        label.text('Ok!').addClass('valid-success');
    },
    errorPlacement: function(error, element) {
        error.css({
            position : 'absolute',
            left : element.offset().left + element.innerWidth()+3,
            top  : element.offset().top-3
        })
        element.parent().append(error);
    },
    highlight : function(element){
        $(element).removeClass('valid-unhighlight').addClass('valid-highlight');
    },
    unhighlight : function(element){
        $(element).removeClass('valid-highlight').addClass('valid-unhighlight');
    },
    errorClass : 'valid-error',
    onfocusout: false
};

// NUEVOS METODOS
jQuery.validator.addMethod("password", function(value, element, param) {
    if( value.length>0 && param ){
        eval('var RegExPattern = new RegExp(/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{'+ 8 +','+ 10 +'})$/);');
        return value.match(RegExPattern);
    }
}, "El password debe tener entre 8 y 10 caracteres, por lo menos un dígito y un alfanumérico, y no puede contener caracteres espaciales.");
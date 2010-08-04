jQuery.validator.addMethod("password", function(value, element, param) {
    if( value.length>0 && param ){
        eval('var RegExPattern = new RegExp(/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{'+ 8 +','+ 10 +'})$/);');
        return value.match(RegExPattern);
    }
}, "El password debe tener entre 8 y 10 caracteres, por lo menos un dígito y un alfanumérico, y no puede contener caracteres espaciales.");
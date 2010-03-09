function show_error(el, msg){
    $.validator.show(el,{
        message : msg
    });
    el.focus();
}

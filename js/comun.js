
function checkRow(td){
    var checkbox = $(td).parent().find('input:checkbox')[0];
    checkbox.checked = !checkbox.checked;
}

function show_error(el, msg, container){
    if( typeof container=="undefined" ) container=null;
    $.validator.show(el,{
        message : msg,
        container : container
    });
    try{el.focus();}
    catch(e){}
}

function get_data(arr){
    var names = [], id = [];

    arr.each(function(i){
        id.push(this.value);
        names.push($(this).parent().parent().find('.link-title').text());
    });

    return {
        id    : id,
        names : names
    }
}

function MessageShowHide(parent, status, t){
    if( status && status!='' ){
        if( !t ) t=5000;
        if( status!='' ){
            var div = $(parent).find(status=="success" ? "div.success" : "div.error");
            if( div.is(':visible') ){
                setTimeout(function(){
                    div.slideUp('slow');
                }, t);
            }else{
                div.slideDown('slow', function(){
                    setTimeout(function(){
                        div.slideUp('slow');
                    }, t);
                });
            }
        }
    }
}

var JTable = new (function(){
    this.msg_confirm = "¿Está seguro de cofirmar la eliminación?";

    /* PUBLIC METHODS
     **************************************************************************/
    this.init = function(sel, callback){
        $(sel).each(function(){
            var table = $(this);
            var tr = table.find('>tbody >tr:first');
            if( tr.length>0 ) _set_table(table, tr, callback);
        });
    };
//arg 4: fila a copiar, por defecto 0
    this.add = function(sel, arg2, arg3, arg4){
        
        if( typeof arg4=="undefined" ) arg4 = ".fixed";
        
        var param={
            limit    : false,
            callback : arg3,
            fixed_class : arg4
        };

        
        var type = typeof(arg2).toString().toLowerCase();
        if( type=="number" ) param.limit = arg2;
        if( type=="function" ) param.callback = arg2;
        if( type=="object" ) param = arg2;

        var table = $(sel);
        var tr = table.find('>tbody >tr:not('+param.fixed_class+') ');
        if( tr.length>0 ){
            if( param.limit && tr.length >= param.limit ) return false;

            var ntr = !table.data('jtable-data') ? _set_table(table, tr.eq(0)) : table.data('jtable-data');
            table.find('>tbody >tr:not('+param.fixed_class+'):last').after(ntr);
            _clear_tags(table);
            if( typeof param.callback=="function" ) param.callback(table.find('>tbody >tr:not('+param.fixed_class+'):last'));
        }

        return false;
    };

    this.remove = function(el, param){
        if( typeof(param)=="function" ){
            var f=param;
            param = {};
            param.callback = f;
            param.confirm = true;
        }else{
            param = $.extend(true, {
                confirm  : true,
                callback : Function()
            }, param);
        }
        
        if( $(el).parent().parent().parent().find('>tr').length>1 ){

            if( !param.confirm || confirm(This.msg_confirm) ){


                $(el).parent().parent().remove();
                param.callback();
            }
        }
    };

    this.resetJtable = function(el){
        var index = el.find(".fixed").length;
        el.find("tbody").find("tr").first().find('input:text, input:file, textarea').val('');
        el.find("tbody").find("tr").first().find('select').each(function(){this.selectedIndex=0});

        el.find("tbody").find("tr:not(.fixed):gt(0)").remove();
    }


    /* PRIVATE PROPERTIES
     **************************************************************************/
     var This=this;

    /* PRIVATE METHODS
     **************************************************************************/
    var _set_table = function(table, tr, callback){
        var ntr = tr.clone();

        if( typeof(callback)=="function" ) callback(ntr);

        var html = $('<div></div>').html(ntr).html();
        table.data('jtable-data', html);

        return html;
    };

    var _clear_tags = function(table){
        var tr = table.find('>tbody >tr:last');
        tr.find('input:text, input:file, textarea').val('');
        tr.find('select').each(function(){this.selectedIndex=0});
    };



})();
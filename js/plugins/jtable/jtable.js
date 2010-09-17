var JTable = new (function(){
    this.msg_confirm = "¿Está seguro de cofirmar la eliminación?";

    /* PUBLIC METHODS
     **************************************************************************/
    this.init = function(sel){
        $(sel).each(function(){
            var table = $(this);
            var tr = table.find('>tbody >tr:first');
            if( tr.length>0 ) _set_table(table, tr)
        });
    };

    this.add = function(sel, arg2, arg3){
        var param={
            limit    : false,
            callback : arg3
        };

        if( typeof arg2=="number" ) param.limit = arg2;
        if( typeof arg2=="function" ) param.callback = arg2;
        if( typeof arg2=="object" ) param = arg2;

        var table = $(sel);
        var tr = table.find('>tbody >tr');
        if( tr.length>0 ){
            if( param.limit && tr.length >= param.limit ) return false;

            var ntr = !table.data('jtable-data') ? _set_table(table, tr.eq(0)) : table.data('jtable-data');
            table.find('>tbody >tr:last').after(ntr);
            _clear_tags(table);
            if( typeof param.callback=="function" ) param.callback(table.find('>tbody >tr:last'));
        }

        return false;
    };

    this.remove = function(el, cnf){
        if( !cnf ) cnf=true;
        if( $(el).parent().parent().parent().find('>tr').length>1 ){
            if( cnf && confirm(This.msg_confirm) ){
                $(el).parent().parent().remove();
            }
        }
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/
     var This=this;

    /* PRIVATE METHODS
     **************************************************************************/
    var _set_table = function(table, tr){
        var ntr = tr.clone();
        var html = $('<div></div>').html(ntr).html();
        table.data('jtable-data', html);

        return html;
    };

    var _clear_tags = function(table){
        var tr = table.find('>tbody >tr:last');
        tr.find('input:text').val('');
        tr.find('select').each(function(){this.selectedIndex=0});
    };



})();
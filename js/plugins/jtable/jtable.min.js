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

    this.add = function(sel, limit, callback){
        var table = $(sel);
        var tr = table.find('>tbody >tr:first');
        if( tr.length>0 ){
            if( limit && tr.length<limit ) return false;

            var ntr = !table.data('jtable-data') ? _set_table(table, tr) : table.data('jtable-data');
            table.find('>tbody >tr:last').after(ntr);

            if( typeof callback=="function" ) callback(ntr);
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
        ntr.find('input').val('');
        ntr.find('select').each(function(){this.selectedIndex=0;});

        var html = $('<div></div>').html(ntr).html();
        table.data('jtable-data', html);

        return html;
    };



})();
var LibForms = {

    get_attributes_select : function(s){
        var str = s.replace(/^<select /gi, '').replace(/name=\"\w*\"\s*/gi, '');
        return str.substr(0, str.indexOf('>'));
    },

    estimated_age : function(a){
        $.post(baseURI+'ajax/get_age', 'date='+a, function(data){
            $('#txtAge').val(data);
            $('#txtAge').parent().show();
        });
    },

    tbldinamic_set : function(sel){
        $(sel).each(function(){
            var tr = $(this);
            if( tr.attr('id')!='' ){
                tr.find('.jq-data').each(function(){
                    $(this).bind('change', function(){$(this).data('datachange', true);});
                });
            }
        });
    },

    tbldinamic_get : function(sel){
        var table = $(sel);
        var dataNew={};
        var dataEdit=[];

        table.find('tbody tr:first').find('.jq-data').each(function(){
            eval('dataNew.'+$(this).attr('name')+'=[]');
        });

        table.find("tbody tr").each(function(){
            var tr = $(this);
            var id = tr.attr('id');
            if( id=='' ){
                tr.find('.jq-data').each(function(){
                    var t=$(this);
                    eval('dataNew.'+t.attr('name')+'.push(t.val())');
                });
            }else{
                var arr=[];
                tr.find('.jq-data').each(function(){
                    var t=$(this);
                    if( t.data('datachange') ){
                        arr.push([id.replace(/^[aA-zZ]*/gi, ''), t.attr('name'), t.val()]);
                    }
                });
                if( arr.length>0 ) dataEdit.push(arr);
            }
        });

        return {
            dataNew  : dataNew,
            dataEdit : dataEdit
        };
     }

}


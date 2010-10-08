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
     },

// hace visible el siguiente elemento dom de su contenedor(si elem no esta definido)  si en el actual select
//  el valor es -1 u "otro"

    isOther : function (select, elem){
        
        if(typeof(elem)=='undefined'){
            elem=$(select).parent().next();
        }
        if($(select).val() < 0 || $(select).val().toLowerCase()=='otro'){
            $(elem).fadeIn("slow");
        }else $(elem).fadeOut("slow");
    },

// hace visible el siguiente elemento dom de su contenedor (si elem no esta definido)  si el actual chek esta
//  checked
    isChecked : function (chk, elem, inv){

        if(typeof(inv)=='undefined') inv=0;
        if(typeof(elem)=='undefined') elem=$(chk).parent().next();
        

        if($("#"+chk.id+":checked").length>0 && inv==0){
            $(elem).fadeIn("slow");
        }else {$(elem).fadeOut("slow");}
    },

// addItem  agrega elementos a list select 2 (id2) desde list select 1(id1)

    addItem : function (id, id2){
        var sel=( $("#"+id+" :selected"));
        if($("#"+id2+" option[value="+sel.val()+"]").length==0)
            $("#"+id2).append("<option value='"+sel.val()+"'>"+sel.html()+"</option>");
    },
// removeItem quita elementos de seleccionados en list select 2(id2)
    removeItem : function (id2){
        $("#"+id2+" option:selected").remove();
    }

}


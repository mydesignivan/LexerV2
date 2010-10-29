var Historial = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {
                cboDeporte: 'required',
                txtObjetivo: 'required'

            },
            submitHandler : function(form){
                loader.show();
              //  form.submit();
            },
            invalidHandler : function(){
                loader.hide();
            }
        });


        $('#form1').validate(o);
        this.newRow();
        


    };

    this.newRow = function(sel){
        var last=0;
        if (typeof(sel) =='undefined'){
            last=$(".cfecha");
        }
        else{
            last=sel.find(".cfecha:last");
        }

        // Configura el calendario
        $(last).datepicker({
            showOn          : 'both',
            buttonImage     : 'images/icon_calendar.png',
            buttonImageOnly : true,
            dateFormat      : 'dd-mm-yy',
            changeMonth     : true,
            changeYear      : true,
            yearRange       : '1950:'+(new Date().getFullYear()),
            monthNamesShort : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']

        });
    }

    this.hockeyActividades = function(select){
        var dom = $(select);
         elem=dom.parent().parent().next();
        if(dom.val() == 100 ){
            $(elem).fadeIn("slow");

        }else{
            $(elem).fadeOut("slow");
        }
        LibForms.isOther(dom);

    }

    this.addHistorial = function (el, div_table){
        var hist=$("."+div_table).first().html();
       
        $("."+div_table).last().after(' <div class="'+div_table+'">');
        
        $("."+div_table).last().html(hist);

        var div_last_historial = $("."+div_table).last();
        
        div_last_historial.find('select').each(function(){this.selectedIndex=0});
        $("."+div_table).last().find(".tbl").each(function(i){
            JTable.resetJtable($(this));
       });
        if (div_last_historial.find('.cfecha').length >0){
            div_last_historial.find('.cfecha').each(function(i){
                $(this).parent().html('<input type="text" name="'+name+'" value="" class="jq-data cfecha" />');
            });
            this.newRow($("."+div_table).find("table"));
        }
         div_last_historial.find('input:text, input:file, textarea').val('');
    }

    this.get_combo_states = function(el){
        
        var sel=$(el).parent().next();

        var div = $(sel);
        if( el.value=='' || el.value==0 ) {div.fadeOut('slow');return false;}
        var select = div.find('.jq-select');
        var img = $(el).parent().find('.jq-loader');
        var params={
            id        : el.value,
            dataname  : 'states',
            name      : select.attr('name'),
            'default' : 'Seleccione una Provincia',
            extra     : 'class="jq-select"'
        };

        el.disabled=true;
        img.show();
        $.post(baseURI+'ajax/get_combo', params, function(data){
            select.replaceWith(data);
            if( div.is(':hidden') ) div.fadeIn('slow');
            el.disabled=false;
            img.hide();
        });

        return false;
    }

    this.seleccionDeporte = function(btnEnviar){
         $(".dep > *").attr('disabled', 'disabled');
         $.post(baseURI+"paneluser/historial/ajax_get_sport", {
             deporte: $("#cboDeporte option:selected").val(),
             historial_id: $("#historial_id").val(),
             historial_deporte_id: $("#historial_deporte_id").val()},
             function(data){
                $(".dep > *").attr('disabled', '');
                $("#tabs_div_ajax").show();
                $("#tabs_div_ajax").html(data);
                $("#tabs").tabs();
                Historial.newRow();
        });

    }


    this.selCat = function(select, elem){
        if(typeof(elem)=='undefined'){
            elem=$(select).parent().next();
        }
        var list=$(select).parent().parent().find("input[name=list]").eq(0).val();
        if($(select).val() > 0 ){
             $.post(baseURI+"paneluser/historial/ajax_get_subcat", {
                 cat: $(select).val(),
                 list: list},
                 function(data){
                    $(elem).html(data);
                    $(elem).fadeIn();
            });

        }else $(elem).fadeOut("slow");
    }



    this.removeRow = function(el, t){
//        var id = $(el).parent().parent().attr('id').replace(/^[aA-zZ]*/gi, '');
        JTable.remove(el,{confirm: true});
//        if( !isNaN(id) ) eval('_arrDel.'+t+'.push(id)');
    };

    this.addRowFecha = function(sel, limit, sel_celda, fix_class){
        if (typeof(sel_celda) =='undefined' || sel_celda == null){
            sel_celda = '.cell1';
        }

        sel=$(sel).parent().find('table');


        JTable.add(sel, {
            limit : limit,
            callback : function(tr){
                tr.removeAttr('id');
                var name = sel.find(".cfecha:first").attr("name");
                tr.find(sel_celda).html('<input type="text" name="'+name+'" value="" class="jq-data cfecha" />');
            },
            fixed_class : fix_class
        });

        this.newRow(sel);
    };



    this.addRow = function(sel, limit, fix_class){
        if (typeof(row_select) == 'undefined'){
            row_select = 0;
        }
       sel=$(sel).parent().find('table');
        JTable.add(sel, limit, function(tr){
            tr.removeAttr('id');

        }, fix_class);
    }


    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PRIVATE METHODS
     **************************************************************************/

})();

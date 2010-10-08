var PerfilDeportivo = new (function(){

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

        $("#txtLesion, #txtRecuperacion").datepicker({
            showOn          : 'both',
            buttonImage     : 'images/icon_calendar.png',
            buttonImageOnly : true,
            dateFormat      : 'dd-mm-yy',
            changeMonth     : true,
            changeYear      : true,
            yearRange       : '1950:'+(new Date().getFullYear()-5),
            monthNamesShort : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            defaultDate     : '01-01-1950'
        });
    };

    this.seleccionDeporte = function(btnEnviar){
         $(".dep > *").attr('disabled', 'disabled');
         $.post(baseURI+"paneluser/perfildeportivo/ajax_get_sport", {
             deporte: $("#cboDeporte option:selected").val(),
             perfil_id: $("#perfil_id").val(),
             perfil_deporte_id: $("#perfil_deporte_id").val()},
             function(data){
                $(".dep > *").attr('disabled', '');
                $("#div_sports").html(data);
        });

    }


    this.check = function(id,id2){
        if (id) $("#"+id).show();
        if (id2) $("#"+id2).hide();
    }

    this.seleccionLesion = function(){
        var selec=$("#cboPatologia :selected").val();
        if (selec=='l' || selec=='o') {
            $("#contLes").show();
            $("#div_enf").hide();           
        }
        else {
            $("#contLes").hide();
            $("#div_enf").show();
        }
    }


    this.selCat = function(select){
        if(typeof(elem)=='undefined'){
            elem=$(select).parent().next();
        }
        var list=$("#list").val();
        if($(select).val() > 0 ){
             $.post(baseURI+"paneluser/perfildeportivo/ajax_get_subcat", {
                 cat: $(select).val(),
                 list: list},
                 function(data){
                    $(elem).html(data);
                    $(elem).fadeIn();
            });

        }else $(elem).fadeOut("slow");
    }

    this.chkCatPatin = function(select){
        if(typeof(elem)=='undefined'){
            elem=$(select).parent().parent().next();
        }
        $("#div_otra_categoria").fadeOut("slow");
        var list=$("#list").val();
          
        if($(select+":checked").val() > 0 ){

             $.post(baseURI+"paneluser/perfildeportivo/ajax_get_subcat", {
                 cat: $(select).val(),
                 list: list},
                 function(data){
                    $(elem).html(data);
                    $(elem).fadeIn();
            });

        }else $(elem).fadeOut("slow");
    }
    this.selSoftBolHabilidad = function(sel)
    {
        if ($(sel).val()==4) $(sel).parent().siblings().last().fadeIn("slow");
        else $(sel).parent().siblings().last().fadeOut("slow");
       LibForms.isOther(sel);
    }



    this.removeRow = function(el, t){
//        var id = $(el).parent().parent().attr('id').replace(/^[aA-zZ]*/gi, '');
        JTable.remove(el);
//        if( !isNaN(id) ) eval('_arrDel.'+t+'.push(id)');
    };

    this.addRow = function(sel, limit){
        JTable.add(sel, limit, function(tr){
            tr.removeAttr('id');
        });
    };

    this.cboPaseSelection = function(selec){
        var selected=$("#"+selec.id+" option:selected");
       
        if(selected.val()==2||selected.val()==3){
            $("#div_pasetxt").fadeIn();
            $("#lblPase").text(selected.text()+": ");
        }
        else  $("#div_pasetxt").fadeOut();

    }

    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PRIVATE METHODS
     **************************************************************************/

})();


var PersonalMa = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        

        // Configura el Validador
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {

            },
            submitHandler : function(form){
                loader.show();
                 $("#json").val(JSON.encode(_ajaxupload_output));
                 form.submit();
            },
            invalidHandler : function(){
                loader.hide();
            }
        });

        if( $('img.jq-imgpreview').length==0 ) o.rules.txtImage = 'required';

        $('#form1').bind('submit', _on_submit).validate(o);

        // Define a estos inputs algunas funciones
        $('#txtLastName, #txtFirstName, #txtNacionalidad, #txtProfesion, #txtEstudios, #txtCurrentCity, #txtOriginCity').blur(function(){$(this).ucTitle()});
        $('#txtWebSite').blur(function(){$(this).formatURL()});

        
        // Define los eventos change para las tablas dinamicas
        LibForms.tbldinamic_set('#tblLang tbody tr, #tblDisc tbody tr');

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


        // Define los campos numericos
        formatNumber.init('.cvalores',{decimalDigit: 2, integerNumber: false});

        //Define los eventos para los combos de medidas
        $(".cmedida").change(function (){
            var medida_actual = $(this).val();
            var medida_anterior =  $(this).next().val();
            var valor = $(this).prev().val();
            valor = valor*medida_actual/medida_anterior;
            $(this).prev().val(valor);
            $(this).next().val($(this).val());

        })



    }

    this.removeRow = function(el, t){
        var id = $(el).parent().parent().attr('id').replace(/^[aA-zZ]*/gi, '');
        JTable.remove(el);
        if( !isNaN(id) ) eval('_arrDel.'+t+'.push(id)');
    };

    this.addRow = function(sel, limit){
       
      
       sel=$(sel).parent().find('table');
       
        JTable.add(sel, limit, function(tr){
            tr.removeAttr('id');
            var name = sel.find(".cfecha:first").attr("name");
            tr.find(".cell1").html('<input type="text" name="'+name+'" value="" class="jq-data cfecha" tabindex="22" />');
        });
  
        this.newRow(sel);
    };

    this.upload = function(){
        var input = $('#txtImage');
        if( !input.val() ) return false;
        var parent = input.parent();
        var ext = input.val().replace(/^([\W\w]*)\./gi, '').toLowerCase();

        if( !(ext && /^(jpg|png|jpeg|gif)$/.test(ext)) ){
            alert('Error: Solo se permiten imagenes');
            return false;
        }

        var inputclone = input.clone(true);

        var form = $('#ajaxupload-form');

        $('#btnUpload2')[0].disabled=true;
        $('#ajaxupload-load').show();

        form.find('input:file').remove();
        input.prependTo(form);
        parent.prepend(inputclone);

        $('#ajaxupload-form iframe').attr('src', '');
        form.submit();

        return false;
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/
     var _attr=[];
     var _ajaxupload_output=[];
     var _arrDel={lang:[], disc:[]}

    /* PRIVATE METHODS
     **************************************************************************/
     var _on_submit = function(){
        loader.show();

        if( $('#form1').valid() ) {

            var d1 = LibForms.tbldinamic_get('#tblLang');
            var d2 = LibForms.tbldinamic_get('#tblDisc');

            var json = {
                langNew  : d1.dataNew,
                langEdit : d1.dataEdit,
                langDel  : _arrDel.lang,
                discNew  : d2.dataNew,
                discEdit : d2.dataEdit,
                discDel  : _arrDel.disc
            };

            $('#extra_post').val(JSON.encode(json));
            return true;
        }

        return false;
     };

})();


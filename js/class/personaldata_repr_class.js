var PersonalRepData = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){

        // Configura el Validador
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {
                txtLastName  : 'required',
                txtFirstName : 'required',
                optSex       : 'required',
                txtFnac      : 'required',
                cboCurrentCountry   : 'required',
                cboCurrentStates    : 'required',
                txtCurrentCity      : 'required',
                txtNacionalidad     : 'required',
                cboPassport         : 'required',
                txtPhoneNum         : 'required'
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

        // Configura el calendario
        $("#txtFnac").datepicker({
            showOn          : 'both',
            buttonImage     : 'images/icon_calendar.png',
            buttonImageOnly : true,
            dateFormat      : 'dd-mm-yy',
            changeMonth     : true,
            changeYear      : true,
            yearRange       : '1950:'+(new Date().getFullYear()-5),
            monthNamesShort : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            defaultDate     : '01-01-1950',
            onSelect        : LibForms.estimated_age
        });

        //Extrae los atributos de los select
        _attr['cboCurrentStates'] = LibForms.get_attributes_select($('#cboCurrentStates').outerHTML());
        _attr['cboOriginStates'] = LibForms.get_attributes_select($('#cboOriginStates').outerHTML());
        
        // Define los campos numericos
        formatNumber.init('#txtNumDoc, #txtCurrentZipCode, #txtOriginZipCode, #txtPhoneArea, #txtPhoneCity, #txtPhoneNum, #txtCeluArea, #txtCeluCity, #txtCeluNum');

        // Configura los campos con opcion otro
    //    $('#cboTipoDoc').setOptionOther();

        // Define los eventos change para las tablas dinamicas
        LibForms.tbldinamic_set('#tblLang tbody tr, #tblDisc tbody tr');


      // ESTO ES PARA EL UPLOAD SIMPLE
        $('#ajaxupload-form iframe').load(function(){
            if( this.src=="about:blank" ) return false;

            var content = this.contentDocument || this.contentWindow.document;
                content = content.body.innerHTML;

            $('#btnUpload2')[0].disabled=false;

            $('#ajaxupload-load').hide();

            var result;
            try{
                eval('result = '+content);
            }catch(e){
                alert('ERROR:\n\n'+content);
                return false;
            }

            if( result['status']=="success" ) {
                $('#ajaxupload-error').hide();
                var output = result['output'][0];

                $('#ajaxupload-thumb').attr('src', output['href_image_full'])
                                      .attr('alt', output['filename_image'])
                                      .attr('width', output['thumb_width'])
                                      .attr('height', output['thumb_height'])
                                      .show();

                _ajaxupload_output = output;
            }
            else $('#ajaxupload-error').html(result['error'][0]['message']).show();

            return false;
        });
        //-----

    };

    this.get_combo_states = function(el, sel){
        if( el.value=='' || el.value==0 ) return false;

        var div = $(sel);
        var select = div.find('.jq-select');
        var img = $(el).parent().find('.jq-loader');
        var params={
            id        : el.value,
            dataname  : 'states',
            name      : select.attr('name'),
            'default' : 'Seleccione una Provincia',
            extra     : _attr[select.attr('name')]
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
    };

    this.removeRow = function(el, t){
        var id = $(el).parent().parent().attr('id').replace(/^[aA-zZ]*/gi, '');
        JTable.remove(el);
        if( !isNaN(id) ) eval('_arrDel.'+t+'.push(id)');
    };

    this.addRow = function(sel, limit){
        JTable.add(sel, limit, function(tr){
            tr.removeAttr('id');
        });
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


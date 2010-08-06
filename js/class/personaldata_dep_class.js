var PersonalData = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){

        // Configura el Validador
        var o = $.extend(true, {
            rules : {
                txtLastName  : 'required',
                txtFirstName : 'required',
                txtImage     : 'required',
                txtFnac      : 'required',
                cboCurrentCountry   : 'required',
                cboCurrentStates    : 'required',
                txtCurrentCity      : 'required',
                txtNacionalidad     : 'required',
                cboPassport         : 'required',
                txtPhoneNum         : 'required'
            },

            invalidHandler : function(){
                loader.hide();
            }
        }, jQueryValidatorOptDef);
        $('#form1').submit(function(){loader.show();}).validate(o);


        // Configura el calendario
        $("#txtFnac").datepicker({
            showOn          : 'both',
            buttonImage     : 'images/icon_calendar.png',
            buttonImageOnly : true,
            dateFormat      : 'dd-mm-yy',
            changeMonth     : true,
            changeYear      : true,
            yearRange       : '1960:'+(new Date().getFullYear()-10),
            monthNamesShort : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            defaultDate     : '01-01-1960',
            onSelect        : LibForms.estimated_age
        });

        //Extrae los atributos de los select
        attr['cboCurrentStates'] = LibForms.get_attributes_select($('#cboCurrentStates').outerHTML());
        attr['cboOriginStates'] = LibForms.get_attributes_select($('#cboOriginStates').outerHTML());

        // Define los campos numericos
        formatNumber.init('#txtNumDoc, #txtCurrentZipCode, #txtOriginZipCode, #txtPhoneArea, #txtPhoneCity, #txtPhoneNum, #txtCeluArea, #txtCeluCity, #txtCeluNum');
    };

    this.get_combo_states = function(el, sel){
        var select=$(sel).find('.jq-select');

        var params={
            id        : el.value,
            dataname  : 'states',
            name      : select.attr('name'),
            'default' : 'Seleccione una Provincia',
            extra     : attr[select.attr('name')]
        };

        $.post(baseURI+'ajax/get_combo', params, function(data){
            select.replaceWith(data);
            $(sel).fadeIn('slow');
        });
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/
     var attr=[];

    /* PRIVATE METHODS
     **************************************************************************/


})();


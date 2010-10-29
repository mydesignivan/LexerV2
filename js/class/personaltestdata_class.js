var PersonalTestData = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        

        // Configura el Validador
        var o = $.extend({}, jQueryValidatorOptDef, {
            rules : {

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


        // Configura el calendario
        $(".fecha").datepicker({
            showOn          : 'both',
            buttonImage     : 'images/icon_calendar.png',
            buttonImageOnly : true,
            dateFormat      : 'dd-mm-yy',
            changeMonth     : true,
            changeYear      : true,
            yearRange       : '1950:'+(new Date().getFullYear()),
            monthNamesShort : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            defaultDate     : '01-01-2010'
        });


        // Define los eventos change para las tablas dinamicas
        LibForms.tbldinamic_set('#tblLang tbody tr, #tblDisc tbody tr');


      // ESTO ES PARA EL UPLOAD SIMPLE

        //-----

    };
    this.selectCombo = function (sel,level){

        var val = $(sel).find(":selected").val();
        var text = $(sel).find(":selected").text();
        
        $.post(baseURI+"paneluser/personaltestdata/ajax_getCombo", {
             selected: val , txt: text, lvl:level},
             function(data){
                 $(sel).parent().next().next().html("");
                 $(sel).parent().next().html(data);
              });
        var other=$(sel).parent().parent().parent().find(".other");
        LibForms.isOther(sel,other)
    }



    this.removeRow = function(el, t){
        var id = $(el).parent().parent().attr('id').replace(/^[aA-zZ]*/gi, '');
        JTable.remove(el);
        if( !isNaN(id) ) eval('_arrDel.'+t+'.push(id)');
    };

    this.addRow = function(sel, limit){
        JTable.add(sel, limit, function(tr){
            tr.removeAttr('id');
            tr.find("select[name=cboLevel1], select[name=cboLevel2], .other").remove();
        });
    };




    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PRIVATE METHODS
     **************************************************************************/
     var _on_submit = function(){
        loader.show();

        if( $('#form1').valid() ) {


        }

        return false;
     };

})();


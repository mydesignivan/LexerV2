var Advsearch = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        _set_peso();
        _set_altura();
        _set_edad();

        $('#cboCategory')[0].options[0].selected=true;
        $('#form1').bind('blur', _on_blur);
    };

    this.showform = function(el){
        _working=true;
        el.disabled=true;
        $('#cont').empty();
        $.post(baseURI+'ajax/showform_advsearch', 'filename='+el.value, function(data){
            $('#cont').hide().html(data).slideDown('slow', function(){
                switch(el.value){
                    case 'dep':
                        _set_peso();
                        _set_altura();
                        _set_edad();
                    break;
                    case 'entrenador':
                        _set_edad();
                    break;
                    case 'prepfisico':
                        _set_edad();
                    break;
                }
                _working=false;
                el.disabled=false;
            });
        });
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/
     var _working=false;

    /* PRIVATE METHODS
     **************************************************************************/
    var _set_peso = function(){
        $("#slider-range-peso").slider({
            range  : true,
            min    : 1,
            max    : 200,
            values : [30, 90],
            slide  : function(event, ui) {
                $(this).next('span').text('entre '+ui.values[0]+' y '+ui.values[1]+' kilos');
            }
        });
        $("#slider-range-peso").next('span').text('entre 30 y 90 kilos');
    };

    var _set_altura = function(){
        $("#slider-range-altura").slider({
            range  : true,
            min    : 1,
            max    : 2,
            values : [0.8, 1.8],
            step   : 0.1,
            slide  : function(event, ui) {
                $(this).next('span').text('entre '+ui.values[0]+' y '+ui.values[1]+' metros');
            }
        });
        $("#slider-range-altura").next('span').text('entre 0.8 y 1.8 metros');
    };

    var _set_edad = function(){
        $("#slider-range-edad").slider({
            range  : true,
            min    : 15,
            max    : 60,
            values : [15, 60],
            slide  : function(event, ui) {
                $(this).next('span').text('entre '+ui.values[0]+' y '+ui.values[1]+' años');
            }
        });
        $("#slider-range-edad").next('span').text('entre 15 y 60 años');
    };

    var _on_blur = function(){
        return !_working;
    };


})();
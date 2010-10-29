var Videos = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(a){
        _object_code_video = a;
    };

    this.addLink=function(){
        var str_video=$("#txtVideo").val();

        var link = $(str_video).attr('value');
        var ob = $(_object_code_video);
        ob.attr('value', link);
        ob.find('embed').attr('value', link);

        var li = $('<li></li>');
        li.append(ob, "<a href='javascript:void(Videos.removeLink();)'>Quitar</a>");
        $("#output ul").append(li);
         
    }

    var removeLink=function (){
        alert("quitar");
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
     var _object_code_video;

    /* PRIVATE METHODS
     **************************************************************************/


})();

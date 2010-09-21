var Videos = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){


    };

    this.guardarEnlace=function(){
        var str_video=$("#txtVideo").val();

        var ob = $(str_video);
        ob.attr('width', 150).attr('height',150);
        ob.find('embed').attr('width', 150).attr('height',150);

         var cant=($(".video_code").length);
         $("#output").append("<div class='video_code' id='vid_"+cant+"'></div>");
         ob.appendTo("#vid_"+cant);
         
         
         
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/


    /* PRIVATE METHODS
     **************************************************************************/


})();

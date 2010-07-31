var Account = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){
        $('#txtEmail').validate({
            rules : {
                email: {
                   required: true,
                   email: true
                }
            }
        })

    };

    this.save = function(){

        return false;
    };


    /* PRIVATE PROPERTIES
     **************************************************************************/


    /* PRIVATE METHODS
     **************************************************************************/

})();

var LibForms = {

    get_attributes_select : function(s){
        return s.replace(/^<select /gi, '').replace(/name=\"\w*\"\s*/gi, '').replace(/>.*<\/select>/gi, '');
    },

    estimated_age : function(a){
        $.post(baseURI+'ajax/get_age', 'date='+a, function(data){
            $('#age span').html(data);
            $('#age').show();
        });
    }

}


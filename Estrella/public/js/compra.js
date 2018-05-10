$(document).ready(function(){
    //victima
    
    $('#compras').find('form').on('submit', function() { 
        var form = $(this);
        var data = form.serialize();
        var url_form = form.attr('action');
        
        $.post(url_form, data, 
        function(r_data) {
            console.log(r_data);
        });
        
        alert("COMPRA REGISTRADA"); 
        return false; 
    });
    
    
});
 
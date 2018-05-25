$(document).ready(function() {
    $("#reporte_comi").change(function(){
        var fecha = $('#reporte_comi').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/reporte_comida",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                    $("#comi_rep").empty();
                
                    var rep_fecha = `<label>${data}</label>`;
                    $("#comi_rep").append('Ingreso total en la fecha: '+rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

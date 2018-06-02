$(document).ready(function() {
    $("#reporte_cos").change(function(){
        var fecha = $('#reporte_cos').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/reporte_costo",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                    $("#cost_rep").empty();
                
                    var rep_fecha = `<label>${data}</label>`;
                    $("#cost_rep").append('Costo total en la fecha: '+rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

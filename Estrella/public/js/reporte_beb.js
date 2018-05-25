$(document).ready(function() {
    $("#reporte_beb").change(function(){
        var fecha = $('#reporte_beb').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/reporte_bebida",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                    $("#beb_rep").empty();
                
                    var rep_fecha = `<label>${data}</label>`;
                    $("#beb_rep").append('Ingreso total en la fecha: '+rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

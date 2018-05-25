$(document).ready(function() {
    $("#reporte_poz").change(function(){
        var fecha = $('#reporte_poz').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/reporte_Pozo",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                    $("#pozo_rep").empty();
                
                    var rep_fecha = `<label>${data}</label>`;
                    $("#pozo_rep").append('Ingreso total en la fecha: '+rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

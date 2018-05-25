$(document).ready(function(){
    $('#reporte_tot').change(function(){
        var fecha = $('#reporte_tot').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/reporte/reporte_total",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                    $("#total_rep").empty();
                
                    var rep_fecha = `<label>${data}</label>`;
                    $("#total_rep").append(rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }

        });

    }); 

});
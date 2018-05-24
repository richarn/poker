$(document).ready(function() {
    $("#reporte_bill").change(function(){
        var fecha = $('#reporte_bill').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/reporte_billar",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                    $("#billar_rep").empty();
                
                    var rep_fecha = `<label>${data}</label>`;
                    $("#billar_rep").append(rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

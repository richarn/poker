$(document).ready(function() {
    $("#reporte_costo .busc-ip").change(function(){
        var fecha_r = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/lista_costo",
            method: "POST",
            dataType: "json",
            data: {fecha_re: fecha_r},
            success: function(data) {
                console.log(data);;
                $("tbody").empty();

                $(data).each(function(key, val) {

                    var option = `<tr>
                                    <td>${val.descripcion}</td>
                                    <td>${val.cantidad}</td>
                                    <td>${val.precio}</td>
                                  </tr>`;
                    $("#list").append(option);
                });
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});
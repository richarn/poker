$(document).ready(function() {
    $("#venta_come").change(function(){
        var v_com = $('#venta_come option:selected').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/bebida/getPrecioC",
            method: "POST",
            dataType: "json",
            data: {precio_comida: v_com},
            success: function(data) {
                console.log(data);
                //$("#precio_b").empty();
                data.forEach(function(val, key) {
                    var option = `<option selected value=${val.precio}>${val.precio}</option>`;
                    $("#precio_vc").append(option);
                });
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});
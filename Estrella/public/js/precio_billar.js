$(document).ready(function() {
    $("#bill").change(function(){
        var p_bill = $('#bill option:selected').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/bebida/getPrecioFi",
            method: "POST",
            dataType: "json",
            data: {precio_billar: p_bill},
            success: function(data) {
                console.log(data);
                $("#precio_bi").empty();
                data.forEach(function(val, key) {
                    var option = `<option selected value=${val.precio}>${val.precio}</option>`;
                    $("#precio_bi").append(option);
                });
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});
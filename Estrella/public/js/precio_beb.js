$(document).ready(function() {
    $("#venta_bebid").change(function(){
        var v_beb_id = $('#venta_bebid option:selected').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/bebida/getPrecioB",
            method: "POST",
            dataType: "json",
            data: {id_bebida: v_beb_id},
            success: function(data) {
                console.log(data);
                //$("#precio_b").empty();
                data.forEach(function(val, key) {
                    var option = `<option selected value=${val.precio}>${val.precio}</option>`;
                    $("#precio_b").append(option);
                });
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

// $(document).ready(function() {
//     $("#venta_bebi").change(function(){
//         var v_beb_id = $('#venta_bebi option:selected').val();
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
        
//         $.ajax({
//             url: "/bebida/getPrecioB",
//             method: "POST",
//             dataType: "json",
//             data: {id_bebida: v_beb_id},
//             success: function(data) {
//                 console.log(data);
//                 //$("#select-provincia").empty();
//                 data.forEach(function(val, key) {
//                     var option = `<option value=${val.IdBebidasYOtros}>${val.precio}</option>`;
//                     $("#precio_b").append(option);
//                 });
//             },
//             error: function(err) {
//                 console.log(err);
//             }
//         });
//     });
// });


$(document).ready(function() {
    $("#resporte_sema").change(function(){
        var fecha = $('#resporte_sema').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "/reporte/reporte_semana",
            method: "POST",
            dataType: "json",
            data: {fecha_rep: fecha},
            success: function(data) {
                console.log(data);
                     $("#sem_rep").empty();

                     $(data).each(function(key, val) {

                     var date = `<tr>
                                     <td>${val.fecha}</td>
                                     <td>${val.total_dia}</td>
                                 </tr>`;          
                     $("#sem_rep").append(date);
                 });
                
//                    var rep_fecha = `<label>${data.fecha}</label>`;
  //                  $("#sem_rep").append('Ingreso semanal: '+rep_fecha);
            
                
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

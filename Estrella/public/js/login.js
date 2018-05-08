$(document).ready(function(){
	
	$.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}    
	});

   $(document).on('submit', "#login", function(e){
	   e.preventDefault();
	   console.log("prevent");
	   var form_log = $(this);
	   var data_log= form_log.serialize();
	   var url_form_log = form_log.attr('action');

	   
	//   $.post(url_form_log, data_log,
	   
	//   function(r_data_log){
	//       console.log(r_data_log);
	//   });
	
		$.ajax({
			url: "verifylogin",
			method: "POST",
			data: data_log,
			dataType: "json",
			success: function(data) {
				console.log(data);
				localStorage.setItem("user_id", data.user_id);
				// window.location.href = "contenido";
			},
			error: function(e) {
				console.log(e);
				alert("Datos incorrectos");
			}
		});
	   
   });
});
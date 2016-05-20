var id_pdf;

$(".btn-warning").click(function(){
	var modal = $("#mails");
	id_pdf = $(this).attr("id");
	modal.modal("show");
});

$("#btnEnviarModal").click(function(){

	var data = {"id_pdf":id_pdf,
				"destino":$("#destinatario").val(),
				};
	$.ajax({
		type:"post",
		url:"/enviar",
		headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		},
		data:data,
		complete:function(data){
			alert("Mail enviado");
		}
	});

	$("#mails").modal("hide");
	
});
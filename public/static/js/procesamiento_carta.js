$("#btnDescargar").click(function(){
	var contenido = {"contenido":$("#carta").html()};
	$.ajax({
		type:"post",
		url:"guardar",
		headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		},
		data:contenido,
		dataType:"json",
		success:function(data){
			console.log(data);
		}
	});
});


$("#btnEnviar").click(function(){
	var contenido = { "contenido":$("#carta").html(),
					  "destino":"lealuque.tw@gmail.com",
					};
	$.ajax({
		type:"post",
		url:"/enviar",
		headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		},
		data:contenido,
		dataType:"json",
		success:function(data){
			alert(data);
		},
		complete:function(data){
			console.log(data);
		}
	});
});



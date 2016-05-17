/*$("#btnCrear").click(function(){
	
	
})*/

$("#btnCrear").click(function(){

	$("#modalEnvio").modal("show");

});

$("#btnOk").click(function(){

	var nombre = $("#nombre").val();
	var descripcion = $("#descripcion").val();
	var contenido = {"contenido":tinyMCE.activeEditor.getContent(),
					 "nombre":nombre,
					 "descripcion":descripcion
					};
	$.ajax({
		type:"post",
		url:"crear",
		headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		},
		data:contenido,
		dataType:"json",
		complete:function(data){
			console.log(data.responseText);
		}
	});


});
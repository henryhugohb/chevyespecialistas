$(document).ready(function(){

	$("#agProducto").click(function()
	{
		$("#tabla-trabajos").html('');
		$("#txt-trabajo").val('');
		$("#btn-envProducto").attr('disabled','disabled');
		$("#cantidad").attr('disabled','disabled');
		$("#agregaProducto").modal({backdrop: "static"});
	});

	$("#txt-producto").keypress(function(event)
	{
		if(event.which==13)
		 {
		 	event.preventDefault();
		 	$("#btn-busProducto").click();
		 }
	});

	$("#btn-busProducto").on("click",function(event){
		
		event.preventDefault();

		$("#txt-producto").val($("#txt-producto").val().trim());

		if (window.XMLHttpRequest)
		{
			// code for modern browsers
			var xmlhttp = new XMLHttpRequest();
		} 
		else
		{
			// code for old IE browsers
		   	var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}			

		xmlhttp.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
		    	$("#tabla-productos").html('');
		    	var c = JSON.parse(this.responseText);
				var count =0;
				$.each(c,function(i,item)
				{
		 			$("#tabla-productos").append('<tr class="itemLista" value="'+item.id+'">'
		 				+'<td>'+item.descripcion+'</td>'
		 				+'<td>'+item.precio_publico+'</td>'
		 			+'</tr>');
		 			count++;
				});
				if(count==0)
				{
					$("#tabla-productos").html('<tr>'
						+'<td colspan="2"><center>No se encontraron resultados para su busqueda</center></td>'
					+'</tr>');
					$("#txt-producto").focus();
				}
				$("#btn-envProducto").attr('disabled','disabled');
				$("#cantidad").attr('disabled','disabled');
				$("#id_producto").val('');
		  	}
		};

		xmlhttp.open("POST","../producto",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("producto="+ $("#txt-producto").val());
	});

	$("#tabla-productos").on('click','.itemLista',function(event){
		$(".itemLista").attr('style','');
		$(this).attr('style','background-color:DodgerBlue;');
		$("#id_producto").val($(this).attr('value'));
		$("#cantidad").removeAttr('disabled');
		$("#cantidad").val('');
		$("#cantidad").focus();
	});

	$("#cantidad").keypress(function(event)
	{
		if((event.which==13)&&($("#cantidad").val()>0))
		 {
		 	event.preventDefault();
		 	$("#btn-envProducto").removeAttr('disabled');
		 	$("#btn-envProducto").focus();
		 }
	});

	$("#cantidad").focus(function(){
		$("#btn-envProducto").removeAttr('disabled');
	});

	$("#cantidad").blur(function(){
		if(!($("#cantidad").val()>0))
		{
			$("#btn-envProducto").attr('disabled','disabled');
		}
		else
		{
			if($("#id_producto").val()>0)
			{
				$("#btn-envProducto").removeAttr('disabled');
			}
			else
			{
				$("#btn-envProducto").attr('disabled','disabled');
			}
		}
	});

	$(".lista_registros").click(function()
	{
		$(".lista_registros").attr('style','');
		$(this).attr('style','background-color:DodgerBlue;');
		$("#id_orden_detalle").val($(this).attr('id'));
		//$("#btn-envProducto").removeAttr('disabled');
		$("#elProducto").removeAttr('disabled');
	});

	$("#elProducto").click(function(event){
		event.preventDefault();

		$("#msgbox1-title").text('Registros');
		$("#msgbox1-content").text('Esta seguro de eliminar el registro seleccionado?');
		$("#msgbox1-tipo").val('eliminar_item');
		$("#msgbox1").modal({backdrop: "static"});
	});

	$("#actualizarOrden").click(function(event){
		event.preventDefault();

		$("#msgbox1-title").text('Orden');
		$("#msgbox1-content").text('Esta seguro de guardar los datos en el registro seleccionado?');
		$("#msgbox1-tipo").val('actualizar_orden');
		$("#msgbox1").modal({backdrop: "static"});
	});

	$("#ejecutarOrden").click(function(event){
		event.preventDefault();

		$("#msgbox1-title").text('Orden');
		$("#msgbox1-content").text('Esta seguro de ejecutar los trabajos de la orden seleccionada?');
		$("#msgbox1-tipo").val('ejecutar_orden');
		$("#msgbox1").modal({backdrop: "static"});
	});

	$("#eliminarOrden").click(function(event){
		event.preventDefault();

		$("#msgbox1-title").text('Orden');
		$("#msgbox1-content").text('Esta seguro de eliminar la orden de trabajo?. Se perderan todos los items agregados a la orden de trabajo.');
		$("#msgbox1-tipo").val('eliminar_orden');
		$("#msgbox1").modal({backdrop: "static"});
	});

	$("#finalizarOrden").click(function(event){
		event.preventDefault();

		$("#msgbox1-title").text('Orden');
		$("#msgbox1-content").html('Luego de finalizada la orden no se podra modificar, agregar o eliminar ningun dato de la misma.<br>Esta seguro de Finalizar la orden de trabajo?');
		$("#msgbox1-tipo").val('finalizar_orden');
		$("#msgbox1").modal({backdrop: "static"});
	});

	$("#salirOrden").click(function(event){
		event.preventDefault();

		location.href="orden";
	});

	$("#btn-aceptar-msgbox1").click(function(){
		if($("#msgbox1-tipo").val()=='eliminar_item')
		{
			$("#frm-eliminar-item").submit();
		}
		else
		{
			if($("#msgbox1-tipo").val()=='actualizar_orden')
			{
				var formularioPOST = '<form id="form_operacion" method="POST" action="../actualizarOrden">'
					+'<input name="txt_1" value="'+$("#kilometraje").val()+'" />'
					+'<input name="txt_2" value="'+$("#clave").val()+'" />'
					+'<input name="txt_3" value="'+$("#tecnico_responsable").val()+'" />'
					+'<input name="txt_4" value="'+$("#fecha_creacion").val()+'" />'
					+'<input name="txt_5" value="'+$("#observacion").val()+'" />'
					+'<input name="txt_6" value="'+$("#total_orden_").text()+'" />'
					+'<input name="txt_7" value="'+$("#id_orden_").val()+'" />'
				+'</form>';
				$("body").append(formularioPOST);
				$("#form_operacion").submit();
			}
			else
			{
				if($("#msgbox1-tipo").val()=='eliminar_orden')
				{
					location.href="../eliminarOrden/"+$("#id_orden_").val()+"";
				}
				else
				{
					if($("#msgbox1-tipo").val()=='ejecutar_orden')
					{
						location.href="../ejecutarOrden/"+$("#id_orden_").val()+"";
					}
					else
					{
						if($("#msgbox1-tipo").val()=='finalizar_orden')
						{
							location.href="../finalizarOrden/"+$("#id_orden_").val()+"";
						}
					}
				}
			}
		}
	});
});
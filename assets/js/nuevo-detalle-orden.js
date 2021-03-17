$(document).ready(function(){
	var flag1 = false;
	var flag2 = false;	
	
	$("#panel-busqueda-cliente").hide();
	$("#panel-busqueda-vehiculo").hide();

	$("#cedula").keypress(function(event)
	{
		if(event.which==13)
		 {
		 	event.preventDefault();
		 	$("#btnagCliente").click();
		 }
	});

	$("#cerrarModal").click(function()
	{
		$("#agCliente").modal("hide");
		flag1 = false;
		$("#cedula").focus();
	});

	$("#btnagCliente").click(function()
	{
		$("#cedula").val($("#cedula").val().trim());

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
		    	var c = JSON.parse(this.responseText);
				var count =0;
				$.each(c,function(i,item)
				{
		 			$("#Cedula_o_RUC").val(item.Cedula_o_RUC);
		 			$("#Apellidos_y_Nombres").val(item.Apellidos_y_Nombres);
		 			$("#direccion").val(item.direccion);
		 			$("#celular").val(item.Celular);
		 			$("#email").val(item.correo);
		 			$("#panel-clientes").attr({"class": "panel panel-success"});
		 			$("#contenido-modal").html('');
		 			$("#panel-busqueda-vehiculo").slideDown();
		 			$("#placab").focus();
		 			count++;
				});
				if(count==0)
				{
					flag1 = true;
					$("#agCliente").modal({backdrop: "static"});
					$("#contenido-modal").html('<span>No se encontraron coincidencias.</span>');
					$("#Cedula_o_RUC").val("");
		 			$("#Apellidos_y_Nombres").val("");
		 			$("#direccion").val("");
		 			$("#celular").val("");
		 			$("#email").val("");
		 			$("#panel-clientes").attr({"class": "panel panel-danger"});
		 			$("#cerrarModal").focus();
				}
		  	}
		};

		xmlhttp.open("POST","cliente",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("Cedula_o_RUC="+ $("#cedula").val());
	});

	$("#placab").keypress(function(event)
	{
		if(event.which==13)
		 {
		 	event.preventDefault();
		 	$("#btnagVehiculo").click();
		 }
	});

	$("#cerrarModal2").click(function()
	{
		$("#agVehiculo").modal("hide");
		flag2 = false;
		$("#placab").focus();
	});

	$("#btnagVehiculo").click(function()
	{
		$("#placab").val($("#placab").val().trim());

		if (window.XMLHttpRequest)
		{
			// code for modern browsers
			var xmlhttp2 = new XMLHttpRequest();
		} 
		else
		{
			// code for old IE browsers
		   	var xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
		}			

		xmlhttp2.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
		    	var c = JSON.parse(this.responseText);
				var count =0;
				$.each(c,function(i,item)
				{
		 			$("#placa").val(item.placa);
		 			$("#marca").val(item.Marca);
		 			$("#modelo").val(item.Modelo);
		 			$("#año").val(item.Año);
		 			$("#color").val(item.color);
		 			$("#chasis").val(item.chasis);
		 			$("#panel-vehiculos").attr({"class": "panel panel-success"});
		 			$("#contenido-modal2").html('');
		 			$("#agTrabajo").removeAttr('disabled');
		 			$("#agTrabajo").focus();
		 			count++;
				});
				if(count==0)
				{
					flag2 = true;
					$("#agVehiculo").modal({backdrop: "static"});
					$("#contenido-modal2").html('<span>No se encontraron coincidencias.</span>');
					$("#placa").val("");
		 			$("#marca").val("");
		 			$("#modelo").val("");
		 			$("#año").val("");
		 			$("#color").val("");
		 			$("#chasis").val("");
		 			$("#panel-vehiculos").attr({"class": "panel panel-danger"});
		 			$("#agTrabajo").attr('disabled','disabled');
		 			$("#cerrarModal2").focus();
				}
		  	}
		};

		xmlhttp2.open("POST","vehiculo",true);
		xmlhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp2.send("placa="+ $("#placab").val());
	});

	$("#buscarClientes").click(function(event)
	{
		event.preventDefault();
		$("#panel-busqueda-cliente").slideDown();
		$("#cedula").focus();
	});

	$("#buscarVehiculos").click(function(event)
	{
		event.preventDefault();
		$("#panel-busqueda-vehiculo").slideDown();
		$("#placab").focus();
	});

	$("#cedula").blur(function(){
		if(!(flag1))
		{
			$("#panel-busqueda-cliente").slideUp();
			$("#cedula").val("");
		}
	});

	$("#placab").blur(function(){
		if(!(flag2))
		{
			$("#panel-busqueda-vehiculo").slideUp();
			$("#placab").val("");
		}
	});

	$("#agTrabajo").click(function()
	{
		$("#tabla-trabajos").html('');
		$("#txt-trabajo").val('');
		$("#btn-envTrabajo").attr('disabled','disabled');
		$("#agregaTrabajo").modal({backdrop: "static"});
	});

	$("#txt-trabajo").keypress(function(event)
	{
		if(event.which==13)
		 {
		 	event.preventDefault();
		 	$("#btn-busTrabajo").click();
		 }
	});

	$("#btn-busTrabajo").on("click",function(event){
		
		event.preventDefault();

		$("#txt-trabajo").val($("#txt-trabajo").val().trim());

		if (window.XMLHttpRequest)
		{
			// code for modern browsers
			var xmlhttp3 = new XMLHttpRequest();
		} 
		else
		{
			// code for old IE browsers
		   	var xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
		}			

		xmlhttp3.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
		    	$("#tabla-trabajos").html('');
		    	var c = JSON.parse(this.responseText);
				var count =0;
				$.each(c,function(i,item)
				{
		 			$("#tabla-trabajos").append('<tr class="itemLista" value="'+item.id+'">'
		 				+'<td>'+item.descripcion+'</td>'
		 				+'<td>'+item.precio_publico+'</td>'
		 			+'</tr>');
		 			count++;
				});
				if(count==0)
				{
					$("#tabla-trabajos").html('<tr>'
						+'<td colspan="2"><center>No se encontraron resultados para su busqueda</center></td>'
					+'</tr>');
					$("#btn-envTrabajo").attr('disabled','disabled');
					$("#txt-trabajo").focus();
				}
		  	}
		};

		xmlhttp3.open("POST","trabajo",true);
		xmlhttp3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp3.send("trabajo="+ $("#txt-trabajo").val());
	});

	$("#tabla-trabajos").on('click','.itemLista',function(event){
		$(".itemLista").attr('style','');
		$(this).attr('style','background-color:DodgerBlue;');
		$("#id-servicio").val($(this).attr('value'));
		$("#btn-envTrabajo").removeAttr('disabled');
	});

	$("#btn-envTrabajo").click(function(event){
		event.preventDefault();
		alert($("#id-servicio").val());

		if (window.XMLHttpRequest)
		{
			// code for modern browsers
			var xmlhttp4 = new XMLHttpRequest();
		} 
		else
		{
			// code for old IE browsers
		   	var xmlhttp4 = new ActiveXObject("Microsoft.XMLHTTP");
		}			

		xmlhttp4.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
		    	var c = JSON.parse(this.responseText);
				var count =0;
				$.each(c,function(i,item)
				{
		 			$("#tabla-registros").append('<tr class="itemLista2" value="'+(count+1)+'">'
		 				+'<td>'+(count+1)+'</td>'
		 				+'<td>'+item.descripcion+'</td>'
		 				+'<td>'+item.precio_publico+'</td>'
		 				+'<td>1</td>'
		 				+'<td>'+(item.precio_publico*1)+'</td>'
		 			+'</tr>');
		 			count++;
				});
				if(count==0)
				{
					$("#tabla-registros").html('<tr>'
						+'<td colspan="2"><center>No se encontraron resultados para su busqueda</center></td>'
					+'</tr>');
					$("#btn-envTrabajo").attr('disabled','disabled');
					$("#txt-trabajo").focus();
				}
				else
				{
					$("#agregaTrabajo").modal("hide");
				}
		  	}
		};

		xmlhttp3.open("POST","trabajo",true);
		xmlhttp3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp3.send("trabajo="+ $("#txt-trabajo").val());
	});

});
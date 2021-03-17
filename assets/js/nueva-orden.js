$(document).ready(function(){
	var flag1 = false;
	var flag2 = false;

	var last = $("#select-register-question-1 option:last").val();	
	
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
		 			$("#id_cliente").val(item.id);
		 			$("#panel-clientes").attr({"class": "panel panel-success"});
		 			$("#contenido-modal").html('');
		 			if($("#placa").val()=='')
		 			{
		 				$("#panel-busqueda-vehiculo").slideDown();
		 				$("#placab").focus();
		 			}
		 			else
		 			{
		 				$("#agTrabajo").removeAttr('disabled');
		 				$("#agTrabajo").focus();
		 			}
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
		 			$("#id_cliente").val('');
		 			$("#panel-clientes").attr({"class": "panel panel-danger"});
		 			$("#agTrabajo").attr('disabled','disabled');
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
		 			$("#id_vehiculo").val(item.id);
		 			$("#panel-vehiculos").attr({"class": "panel panel-success"});
		 			$("#contenido-modal2").html('');
		 			if($("#Cedula_o_RUC").val()=='')
		 			{
		 				$("#buscarClientes").click();
		 			}
		 			else
		 			{
			 			$("#kilometraje").focus();
			 		}
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
		 			$("#id_vehiculo").val('');
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

	$("#kilometraje").keypress(function(event)
	{
		if((event.which==13)&&(($("#kilometraje").val()!='')&&($("#kilometraje").val()!=0) ) )
		 {
		 	event.preventDefault();
		 	$("#clave").focus();
		 }
	});

	$("#clave").keypress(function(event)
	{
		if((event.which==13)&&(($("#clave").val()!='')&&($("#clave").val()!=0) ) )
		 {
		 	event.preventDefault();
		 	
		 	if($("#Cedula_o_RUC").val()=='')
 			{
 				$("#buscarClientes").click();
 			}
 			else
 			{
	 			if($("#placa").val()=='')
	 			{
	 				$("#buscarVehiculos").click();
	 			}
	 			else
	 			{
		 			if($("#kilometraje").val()>0)
		 			{
		 				$("#agTrabajo").removeAttr('disabled');
						$("#agTrabajo").focus();
		 			}
		 			else
		 			{
			 			$("#kilometraje").focus();
			 		}
		 		}
	 		}

		 	
		 }
	});

	$("#kilometraje").blur(function(){
		if(!($("#kilometraje").val()>0))
		{
			$("#agTrabajo").attr('disabled','disabled');
		}
		else
		{
			if(!($("#clave").val()>0))
			{
				$("#agTrabajo").attr('disabled','disabled');		
			}
			else
			{
				if($("#Cedula_o_RUC").val()=='')
	 			{
	 				$("#agTrabajo").attr('disabled','disabled');
	 			}
	 			else
	 			{
		 			if($("#placa").val()=='')
		 			{
		 				$("#agTrabajo").attr('disabled','disabled');
		 			}
		 			else
		 			{
			 			$("#agTrabajo").removeAttr('disabled');
			 		}
		 		}
			}
		}	
	});

	$("#clave").blur(function(){
		if(!($("#clave").val()>0))
		{
			$("#agTrabajo").attr('disabled','disabled');
		}
		else
		{
			if(!($("#kilometraje").val()>0))
			{
				$("#agTrabajo").attr('disabled','disabled');		
			}
			else
			{
				if($("#Cedula_o_RUC").val()=='')
	 			{
	 				$("#agTrabajo").attr('disabled','disabled');
	 			}
	 			else
	 			{
		 			if($("#placa").val()=='')
		 			{
		 				$("#agTrabajo").attr('disabled','disabled');
		 			}
		 			else
		 			{
			 			$("#agTrabajo").removeAttr('disabled');
			 		}
		 		}
			}
		}	
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
		$("#titulo-ventana").text('Orden de Trabajo');
		$("#e-kilometraje").val($("#kilometraje").val());
		$("#e-clave").val($("#clave").val());
		$("#contenido-ventana").text('Esta seguro de crear la nueva orden con los datos actuales?');
		$("#ventana-mensaje").modal({backdrop: "static"});
	});
	/*
	$("#select-register-question-1").change(function(){
		filtrarCombo("#select-register-question-2", "#select-register-question-1", "#select-register-question-3", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-3", "#select-register-question-1", "#select-register-question-2", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-4", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-5");
		filtrarCombo("#select-register-question-5", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-4");
	});

	$("#select-register-question-2").change(function(){
		filtrarCombo("#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-3", "#select-register-question-1", "#select-register-question-2", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-4", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-5");
		filtrarCombo("#select-register-question-5", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-4");
	});

	$("#select-register-question-3").change(function(){
		filtrarCombo("#select-register-question-2", "#select-register-question-1", "#select-register-question-3", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-1", "#select-register-question-3", "#select-register-question-2", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-4", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-5");
		filtrarCombo("#select-register-question-5", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-4");
	});

	$("#select-register-question-4").change(function(){
		filtrarCombo("#select-register-question-2", "#select-register-question-1", "#select-register-question-3", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-3", "#select-register-question-1", "#select-register-question-2", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-1", "#select-register-question-4", "#select-register-question-2", "#select-register-question-3", "#select-register-question-5");
		filtrarCombo("#select-register-question-5", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-4");
	});

	$("#select-register-question-5").change(function(){
		filtrarCombo("#select-register-question-2", "#select-register-question-1", "#select-register-question-3", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-3", "#select-register-question-1", "#select-register-question-2", "#select-register-question-4", "#select-register-question-5");
		filtrarCombo("#select-register-question-4", "#select-register-question-1", "#select-register-question-2", "#select-register-question-3", "#select-register-question-5");
		filtrarCombo("#select-register-question-1", "#select-register-question-5", "#select-register-question-2", "#select-register-question-3", "#select-register-question-4");
	});

	function filtrarCombo( objetivo, referencia1, referencia2, referencia3, referencia4 ){
		
		for (var i = 1; i <= last; i++) {
			if ( $(referencia1).val()==i ){
				$(""+objetivo+" option[value="+i+"]").hide();		
			}else{
				if ( $(referencia2).val()==i ){
					$(""+objetivo+" option[value="+i+"]").hide();		
				}else{
					if ( $(referencia3).val()==i ){
						$(""+objetivo+" option[value="+i+"]").hide();		
					}else{
						if ( $(referencia4).val()==i ){
							$(""+objetivo+" option[value="+i+"]").hide();		
						}else{
							$(""+objetivo+" option[value="+i+"]").show();
						}
					}
				}
			}
		}
	}*/

});
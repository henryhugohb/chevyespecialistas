<!-- Modal 1 -->
	<div id="agCliente" class="modal fade static" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Clientes</h4>
					</div>
			    <div class="modal-body"  id="contenido-modal">
			    </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="cerrarModal">Cerrar</button><!--data-dismiss="modal" -->
				</div>
			</div>
	 	</div>
	</div>
<!--End Modal-->
<!-- Modal 2 -->
	<div id="agVehiculo" class="modal fade static" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Vehiculos</h4>
					</div>
			    <div class="modal-body"  id="contenido-modal2">
			    </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="cerrarModal2">Cerrar</button><!--data-dismiss="modal" -->
				</div>
			</div>
	 	</div>
	</div>
<!--End Modal-->
<!-- Modal 2 -->
	<div id="ventana-mensaje" class="modal fade static" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="titulo-ventana">Vehiculos</h4>
					</div>
			    <div class="modal-body"  id="contenido-ventana">
			    </div>
				<div class="modal-footer">
					<form method="POST" action="guardarOrden">
						<input type="number" id="id_cliente" name="id_cliente" style="visibility: hidden;" />
						<input type="number" id="id_vehiculo" name="id_vehiculo" style="visibility: hidden;" />
						<input type="number" id="e-kilometraje" name="e-kilometraje" style="visibility: hidden;" />
						<input type="number" id="e-clave" name="e-clave" style="visibility: hidden;" />
						<button type="submit" class="btn btn-success" id="guardar-orden">Aceptar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
					</form>
				</div>
			</div>
	 	</div>
	</div>
<!--End Modal-->
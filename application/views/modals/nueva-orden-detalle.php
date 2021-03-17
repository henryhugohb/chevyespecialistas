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
	<div id="agregaTrabajo" class="modal fade static" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Trabajos</h4>
					</div>
			    <div class="modal-body"  id="contenido-modal3">
			    	<div class="panel panel-info">
			    		<div class="panel-heading">
			    			<form class="form-inline" action="">
							    <div class="form-group">
							    	<input class="form-control" type="text" id="txt-trabajo" placeholder="Ingrese el trabajo a realizar">
							    </div>
							    <button type="button" class="btn btn-primary" id="btn-busTrabajo">
									Buscar
								</button>
							</form>
			    		</div>
			    		<div class="panel-body">
			    			<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Descripcion</th>
							        <th>Precio</th>
							      </tr>
							    </thead>
							    <tbody id="tabla-trabajos">
							      
							    </tbody>
							</table>
			    		</div>
			    	</div>
			    </div>
				<div class="modal-footer">
					<form class="form-inline" action="">
						<div class="form-group">
							<input class="form-control" type="text" id="id-servicio" style="visibility: hidden;" />
							<button class="btn btn-success" type="button"  id="btn-envTrabajo" disabled="disabled">Agregar</button>
						</div>
					</form>
				</div>
			</div>
	 	</div>
	</div>
<!--End Modal-->
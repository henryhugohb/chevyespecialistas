<!-- Modal 1 -->
	<div id="msgbox1" class="modal fade static" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="msgbox1-title"></h4>
					</div>
			    <div class="modal-body"  id="msgbox1-content">
			    </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn-aceptar-msgbox1">Aceptar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
			<input class="form-control" type="text" id="msgbox1-tipo" style="visibility: hidden;" />
	 	</div>
	</div>
<!--End Modal-->
<!-- Modal 2 -->
	<div id="agregaProducto" class="modal fade static" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Productos</h4>
					</div>
			    <div class="modal-body"  id="contenido-modal3">
			    	<div class="panel panel-info">
			    		<div class="panel-heading">
			    			<form class="form-inline" action="">
							    <div class="form-group">
							    	<input class="form-control" type="text" id="txt-producto" placeholder="Ingrese la descripcion del producto">
							    </div>
							    <button type="button" class="btn btn-primary" id="btn-busProducto">
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
							    <tbody id="tabla-productos">
							      
							    </tbody>
							</table>
			    		</div>
			    	</div>
			    </div>
				<div class="modal-footer">
					<form class="form-inline" action="../guardarItem" method="POST">
						<div class="form-group">
							<input class="form-control" type="text" id="id_orden"  name="id_orden" style="visibility: hidden;" value="<?php echo $n_orden; ?>" />
							<input class="form-control" type="text" id="id_producto" name="id_producto" style="visibility: hidden;" />
							<input class="form-control" type="number" id="cantidad" name="cantidad" placeholder="Cantidad"  disabled="disabled"/>
							<button class="btn btn-success" type="submit"  id="btn-envProducto" disabled="disabled">Agregar</button>
						</div>
					</form>
				</div>
			</div>
	 	</div>
	</div>
<!--End Modal-->
<!-- Beginning container -->
<h2 style="text-align: center; ">NUEVA ORDEN DE TRABAJO</h2>
<div class="panel-group">
	<div class="panel panel-danger" id="panel-clientes">
		<div class="panel-heading">
			<!-- Trigger the modal with a button -->
			<a href="" id="buscarClientes">Buscar Cliente</a>
		</div>
		<div class="panel-body" id="panel-busqueda-cliente">
			<form class="form-inline" action="">
			    <div class="form-group">
			      <label for="cedula">Celuda o RUC:</label>
			      <input class="form-control" type="text" id="cedula">
			    </div>
			    <button type="button" class="btn btn-primary" id="btnagCliente">
					Buscar
				</button>
			</form>
		</div>
		<div class="panel-footer">
			<div class="row">
				<form action="">
					<div class="form-group col-sm-2">
						<label for="cedula">Cedula o RUC</label>
						<input class="form-control" type="text" id="Cedula_o_RUC"  disabled="disabled" />
					</div>
					<div class="form-group col-sm-3">
						<label for="apellidos">Apellidos y Nombres:</label>
						<input class="form-control" type="text" id="Apellidos_y_Nombres" disabled="disabled" />
					</div>
					<div class="form-group col-sm-3">
						<label for="direccion">Direccion:</label>
						<input class="form-control" type="text" id="direccion" disabled="disabled" />
					</div>
					<div class="form-group col-sm-2">
						<label for="celular">Celular:</label>
						<input class="form-control" type="text" id="celular" disabled="disabled" />
					</div>
					<div class="form-group col-sm-2">
						<label for="email">Email:</label>
						<input class="form-control" type="email" id="email" disabled="disabled" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="panel panel-danger" id="panel-vehiculos">
		<div class="panel-heading">
			<a href="" id="buscarVehiculos">Buscar Vehiculo</a>
		</div>
		<div class="panel-body"  id="panel-busqueda-vehiculo">
			<form class="form-inline" action="">
				<div class="form-group">
					<label for="placa">Placa:</label>
					<input class="form-control" type="text" id="placab" />
					<button class="btn btn-primary" type="button"  id="btnagVehiculo">Buscar</button>
				</div>
			</form>
		</div>
		<div class="panel-footer">
			<div class="row">
				<form action="">
					<div class="form-group col-sm-2">
						<label for="marca">Placa:</label>
						<input class="form-control" type="text" id="placa"  disabled="disabled" />
					</div>
					<div class="form-group col-sm-2">
						<label for="marca">Marca:</label>
						<input class="form-control" type="text" id="marca" disabled="disabled" />
					</div>
					<div class="form-group col-sm-3">
						<label for="modelo">Modelo:</label>
						<input class="form-control" type="text" id="modelo" disabled="disabled" />
					</div>
					<div class="form-group col-sm-2">
						<label for="color">Color:</label>
						<input class="form-control" type="text" id="color" disabled="disabled" />
					</div>
					<div class="form-group col-sm-1">
						<label for="año">Año:</label>
						<input class="form-control" type="year" id="año" disabled="disabled" />
					</div>
					<div class="form-group col-sm-2">
						<label for="chasis">Chasis:</label>
						<input class="form-control" type="text" id="chasis" disabled="disabled" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<form action="">
				<button class="btn btn-primary" type="button" id="agTrabajo" disabled="disabled">+</button>
				<button class="btn btn-danger" type="button" id="elTrabajo" disabled="disabled">-</button>
			</form>	
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>Descripcion</th>
			        <th>Valor</th>
			        <th>Cantidad</th>
			        <th>SubTotal</th>
			      </tr>
			    </thead>
			    <tbody id="tabla-registros">
			    	<tr>
			    		<td colspan="5"><center>No existen registros que mostrar.</center></td>
			    	</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>
<!-- End container -->
        
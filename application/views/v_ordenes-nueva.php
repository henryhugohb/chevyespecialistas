<!-- Beginning container -->
<h2 style="text-align: center; ">NUEVA ORDEN DE TRABAJO</h2>
<div class="panel-group">
	<div class="panel panel-danger" id="panel-clientes">
		<div class="panel-heading">
			<Trigger the modal with a button>
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
						<input class="form-control" type="text" id="placa" disabled="disabled" />
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
			<div class="row">
				<form>
					<div class="form-group col-sm-2">
						<label for="kilometraje">Kilometraje:</label>
						<input class="form-control" type="number" id="kilometraje"/>
					</div>
					<div class="form-group col-sm-2">
						<label for="clave">Clave:</label>
						<input class="form-control" type="number" id="clave" />
					</div>
					<div class="form-group col-sm-2">
						<label for="clave">texto de prueba</label>
						<input class="form-control" type="text" id="txt-prueba" data-val="true" data-val-length="Datos inválidos." data-val-length-max="6" data-val-length-min="6" data-val-regex="Datos inválidos." data-val-regex-pattern="^.[A-Za-z0-9_]" required/>
					</div>
					<div class="form-group col-sm-2">
						<label for="clave">texto de prueba 2</label>
						<input class="form-control" type="text" id="txt-prueba2" data-val="true" data-val-length="Datos inválidos." data-val-length-max="6" data-val-length-min="6" data-val-regex="Datos inválidos." data-val-regex-pattern="^.[A-Za-z0-9_]" required pattern="[A-Za-z]" title="Solo Letras Mayusculas" />
					</div>
					<div class="form-group col-sm-2">
						<label for="clave"></label>
						<button class="form-control" typ="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<form action="">
				<button class="btn btn-primary" type="button" id="agTrabajo" disabled="disabled">Crear Orden</button>
			</form>	
		</div>
<!-- 		<div class="panel-body">
			<form class="form">
				<div class="form-group">
					<label class="">Pregunta 1</label>
					<select id="select-register-question-1" class="">
						<option value="0">Seleccione...</option>
						<option value="1">Que</option>
						<option value="2">Cual</option>
						<option value="3">Como</option>
						<option value="4">Donde</option>
						<option value="5">Cuando</option>
					</select>
				</div>
				<div class="form-group">
					<label class="">Pregunta 2</label>
					<select id="select-register-question-2" class="">
						<option value="0">Seleccione...</option>
						<option value="1">Que</option>
						<option value="2">Cual</option>
						<option value="3">Como</option>
						<option value="4">Donde</option>
						<option value="5">Cuando</option>
					</select>
				</div>
				<div class="form-group">
					<label class="">Pregunta 3</label>
					<select id="select-register-question-3" class="">
						<option value="0">Seleccione...</option>
						<option value="1">Que</option>
						<option value="2">Cual</option>
						<option value="3">Como</option>
						<option value="4">Donde</option>
						<option value="5">Cuando</option>
					</select>
				</div>
				<div class="form-group">
					<label class="">Pregunta 4</label>
					<select id="select-register-question-4" class="">
						<option value="0">Seleccione...</option>
						<option value="1">Que</option>
						<option value="2">Cual</option>
						<option value="3">Como</option>
						<option value="4">Donde</option>
						<option value="5">Cuando</option>
					</select>
				</div>
				<div class="form-group">
					<label class="">Pregunta 5</label>
					<select id="select-register-question-5" class="">
						<option value="0">Seleccione...</option>
						<option value="1">Que</option>
						<option value="2">Cual</option>
						<option value="3">Como</option>
						<option value="4">Donde</option>
						<option value="5">Cuando</option>
					</select>
				</div>
			</form>
		</div> -->
	</div>
</div>
<!-- End container -->
        
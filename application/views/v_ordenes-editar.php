<!-- Beginning container -->
<div class="panel-group">
	<div class="panel panel-default" id="panel-vehiculos">
		<div class="panel-heading">
			<h3><b>Orden # <?php echo $n_orden; ?></b></h3>
		</div>
		<?php
			$orden = $orden['0'];
			$cliente = $cliente['0'];
			$vehiculo = $vehiculo['0'];
		?>
		<div class="panel-body">
			<div class="row">
				<form action="">
					<div class="form-group col-sm-2">
						<label for="cedula">Cedula o RUC</label>
						<p class="form-control-static" id="Cedula_o_RUC"><?php echo $cliente->Cedula_o_RUC; ?></p>
					</div>
					<div class="form-group col-sm-3">
						<label for="apellidos">Apellidos y Nombres:</label>
						<p class="form-control-static" id="Apellidos_y_Nombres"><?php echo $cliente->Apellidos_y_Nombres; ?></p>
					</div>
					<div class="form-group col-sm-3">
						<label for="direccion">Direccion:</label>
						<p class="form-control-static"  id="direccion" ><?php echo $cliente->direccion; ?></p>
					</div>
					<div class="form-group col-sm-2">
						<label for="celular">Celular:</label>
						<p class="form-control-static"  id="celular" ><?php echo $cliente->Celular; ?></p>
					</div>
					<div class="form-group col-sm-2">
						<label for="email">Email:</label>
						<p class="form-control-static"  id="email" ><?php echo $cliente->correo; ?></p>
					</div>
				</form>
			</div>
			<div class="row">
				<form action="">
					<div class="form-group col-sm-2">
						<label for="marca">Placa:</label>
						<p class="form-control-static"  id="placa" ><?php echo $vehiculo->placa; ?></p>
					</div>
					<div class="form-group col-sm-2">
						<label for="marca">Marca:</label>
						<p class="form-control-static" id="marca" ><?php echo $vehiculo->Marca; ?></p>
					</div>
					<div class="form-group col-sm-3">
						<label for="modelo">Modelo:</label>
						<p class="form-control-static" id="modelo" ><?php echo $vehiculo->Modelo; ?></p>
					</div>
					<div class="form-group col-sm-2">
						<label for="color">Color:</label>
						<p class="form-control-static"  id="color"  ><?php echo $vehiculo->color; ?></p>
					</div>
					<div class="form-group col-sm-1">
						<label for="año">Año:</label>
						<p class="form-control-static" id="año" ><?php echo $vehiculo->Año; ?></p>
					</div>
					<div class="form-group col-sm-2">
						<label for="chasis">Chasis:</label>
						<p class="form-control-static"  id="chasis"  ><?php echo $vehiculo->chasis; ?></p>
					</div>
				</form>
			</div>
			<div class="row">
				<form>
					<div class="form-group col-sm-2">
						<label for="kilometraje">Kilometraje:</label>
						<input class="form-control" type="number" id="kilometraje" value="<?php echo $orden->kilometraje; ?>"/>
					</div>
					<div class="form-group col-sm-2">
						<label for="clave">Clave:</label>
						<input class="form-control" type="number" id="clave" value="<?php echo $orden->clave; ?>"/>
					</div>
					<div class="form-group col-sm-2">
						<label for="clave">Tecnico:</label>
						<select class="form-control" id="tecnico_responsable">
							<?php
								foreach ($tecnicos as $tecnico) {
									if(($tecnico->id)==($orden->tecnico_responsable))
									{
										echo '<option selected value="'.$tecnico->id.'">';	
									}
									else
									{
										echo '<option value="'.$tecnico->id.'">';
									}
									echo $tecnico->Apellidos_y_Nombres;
									echo '</option>';
								}
							?>
						</select>
					</div>
					<div class="form-group col-sm-2">
						<label for="clave">Fecha de Cita:</label>
						<input class="form-control" type="date" id="fecha_creacion" value="<?php echo $orden->fecha_creacion; ?>"/>
					</div>
					<div class="form-group col-sm-4">
						<label for="clave">Observacion:</label>
						<textarea class="form-control" rows="1" id="observacion"><?php echo $orden->observacion; ?></textarea>
					</div>
				</form>
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-xs-12" style="text-align: right;">
					<form action="">
						<?php
							
							if($orden->estado!='F')
							{
								echo '<button class="btn btn-primary" type="button" id="actualizarOrden">Guardar</button>';
							}

							if($orden->estado=='P')
							{
								echo '<button class="btn btn-warning" type="button" id="ejecutarOrden">Ejecutar</button>';
							}
							else
							{
								if($orden->estado=='T')
								{
									echo '<button class="btn btn-success" type="button" id="finalizarOrden">Finalizar</button>';
								}
							}

							if(($orden->estado=='P')||($orden->estado=='T'))
							{
								echo '<button class="btn btn-danger" type="button" id="eliminarOrden">Anular</button>';
							}

							echo '<button class="btn btn-default" type="button" id="salirOrden">Cancelar</button>';
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php 
				if(($orden->estado)!='F')
				{
					echo '<form id="frm-eliminar-item" action="../eliminarItem" method="POST">';
						echo '<div class="row">';
							echo '<div class="col-xs-10">';
								echo '<button class="btn btn-primary" type="button" id="agProducto">Agregar</button>';
								echo '<button class="btn btn-danger" type="button" id="elProducto" disabled="disabled">Eliminar</button>';
							echo '</div>';
							echo '<div class="col-xs-1">';
								echo '<input class="form-control" type="number" id="id_orden_detalle"  name="id_orden_detalle" style="visibility: hidden;" value="" />';
							echo '</div>';
							echo '<div class="col-xs-1">';
								echo '<input class="form-control" type="number" id="id_orden_"  name="id_orden_" style="visibility: hidden;" value="'.$n_orden.'" />';
							echo '</div>';
						echo '</div>';
					echo '</form>';
				}
				else
				{
					echo 'Detalle';
				}
			?>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>Descripcion</th>
			        <th style="text-align: right;">Valor</th>
			        <th style="text-align: right;">Cantidad</th>
			        <th style="text-align: right;">SubTotal</th>
			      </tr>
			    </thead>
			    <tbody id="tabla-registros">
			    	<?php
			    		setlocale(LC_MONETARY, 'en_US');
		    			if($numero_de_items<=0)
		    			{
		    				echo '<tr><td colspan="5"><center>No existen registros que mostrar.</center></td></tr>';
		    			}
		    			else
		    			{
		    				
		    				$count = 1;
		    				$total = 0;

		    				foreach ($orden_item as $item) {
		    					echo '<tr id="'.$item->id.'" class="lista_registros">';
		    					echo '<td>'.$count.'</td>';
		    					foreach ($productos as $producto) {
		    						if(($producto->id)==($item->id_producto))
		    						{
		    							echo '<td>'.$producto->descripcion.'</td>';
		    							echo '<td style="text-align: right;">'.$producto->precio_publico.'</td>';
		    						}
		    					}
		    					echo '<td style="text-align: right;">'.$item->cantidad.'</td>';
		    					echo '<td style="text-align: right;">'.$item->sub_total.'</td>';
		    					echo '</tr>';
		    					$total = $total + ($item->sub_total);
		    					$count++;
		    				}
		    				echo '<tr>';
		    				echo '<td colspan="4" style="text-align: right;"><b>Total</b></td>';
		    				echo '<td style="text-align: right;" id="total_orden_"><b>'.$total.'</b></td>';
		    				echo '</tr>';
		    			}
		    		?>
			    </tbody>
			</table>
		</div>
	</div>
</div>
<!-- End container -->
        
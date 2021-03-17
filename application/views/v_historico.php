<!-- Beginning container -->
<h2>Historico de Vehiculo por PLACA</h2>
<form method="GET" action="historico_vehiculo">
	<div class="input-group">
    	<input type="text" class="form-control" placeholder="Busqueda por placa..." name="placa" id="placa" value="<?php echo $placa; ?>">
    	<div class="input-group-btn">
      		<button class="btn btn-default" type="submit">
        		Buscar
      		</button>
    	</div>
  	</div>
</form>
<br>
<div class="table-responsive">
	<table class="table table-bordered table-striped">
	    <thead>
	    	<tr>
	        	<th>Orden</th>
	        	<th>Fecha</th>
	        	<th>Placa</th>
	        	<th>Kilometraje</th>
	        	<th>Producto</th>
	        	<th>Cantidad</th>
	        	<th>Sub Total</th>
	        	<th>Tecnico</th>
	        	<th>Observacion</th>
	      	</tr>
	    </thead>
	    <tbody id="myTable">
	     	<?php
	     		$count = 0;
	     		foreach ($ordenes as $orden)
	     		{
	     			foreach ($detalles as $detalle)
	     			{
	     				if(($detalle->id_orden)==($orden->id))
	     				{
		     				echo '<tr>';
				     			echo '<td>'.$orden->id.'</td>';
				     			echo '<td>'.$orden->fecha_creacion.'</td>';
				     			echo '<td>'.$orden->placa;
				     			echo '<td>'.$orden->kilometraje;
				     			echo '<td>'.$detalle->descripcion.'</td>';
				     			echo '<td>'.$detalle->cantidad.'</td>';
				     			echo '<td>'.$detalle->sub_total.'</td>';
				     			echo '<td>'.$orden->Apellidos_y_Nombres;
				     			echo '<td>'.$orden->observacion.'</td>';
			     			echo '</tr>';
			     		}
	     			}
	     			$count++;
	     		}
	     		if($count==0)
	     		{
	     			echo '<tr><td colspan="9">No existen registros que mostrar.</td></tr>';
	     		}
	    	?>
	    </tbody>
	</table>
</div>
<!-- End container -->
        
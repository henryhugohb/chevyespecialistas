<!-- Beginning container -->
<h2>Listado de Ordenes de Trabajo</h2>
<input class="form-control" id="myInput" type="text" placeholder="Buscar..">
<br>
<div class="table-responsive">
	<table class="table table-bordered table-striped">
	    <thead>
	    	<tr>
	        	<th>#</th>
	        	<th>Fecha</th>
	        	<th>Cliente</th>
	        	<th>Vehiculo</th>
	        	<th>Tecnico</th>
	        	<th>Total</th>
	        	<th>Observacion</th>
	        	<th>Estado</th>
	        	<th>Opciones</th>
	      	</tr>
	    </thead>
	    <tbody id="myTable">
	     	<?php
	     		$count = 0;
	     		foreach ($ordenes as $orden) {
	     			echo '<tr>';
		     			echo '<td>'.$orden->id.'</td>';
		     			echo '<td>'.$orden->fecha_creacion.'</td>';
		     			echo '<td>';
		     				foreach ($clientes as $cliente) {
		     					if(($cliente->id)==($orden->id_cliente))
		     					{
		     						echo $cliente->Apellidos_y_Nombres;
		     					}
		     				}
		     			echo '</td>';
		     			echo '<td>';
		     				foreach ($vehiculos as $vehiculo) {
		     					if(($vehiculo->id)==($orden->id_vehiculo))
		     					{
		     						echo $vehiculo->placa;
		     					}
		     				}
		     			echo '</td>';
		     			echo '<td>';
		     				foreach ($tecnicos as $tecnico) {
		     					if(($tecnico->id)==($orden->tecnico_responsable))
		     					{
		     						echo $tecnico->Apellidos_y_Nombres;
		     					}
		     				}
		     			echo '</td>';
		     			echo '<td>'.$orden->total.'</td>';
		     			echo '<td>'.$orden->observacion.'</td>';
		     			if(($orden->estado)=='P')
		     			{
		     				echo '<td class="danger"><i><b>PENDIENTE</b></i></td>';
		     			}
		     			else
		     			{
		     				if(($orden->estado)=='T')
			     			{
			     				echo '<td class="warning"><i><b>EN PROCESO</b></i></td>';
			     			}
			     			else
			     			{
			     				if(($orden->estado)=='F')
				     			{
				     				echo '<td class="success"><i><b>FINALIZADA</b></i></td>';
				     			}
				     			else
				     			{
				     				echo '<td>'.$orden->estado.'</td>';	
				     			}
			     			}	
		     			}
		     			echo '<td><a href="orden/editar/'.$orden->id.'">Editar</a></td>';
	     			echo '</tr>';
	     			$count++;
	     		}
	     		if($count==0)
	     		{
	     			echo '<tr><td colspan="8">No existen registros que mostrar.</td></tr>';
	     		}
	    	?>
	    </tbody>
	</table>
</div>
<!-- End container -->
        
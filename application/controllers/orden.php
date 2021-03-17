<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Orden extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */ 
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$data['title'] = 'Ordenes';
		$data['scriptDePagina'] = 'ordenes';

		$select = $this->db->where('estado !=','E');
		$select = $this->db->order_by('fecha_creacion');
		$select = $this->db->get('tb_orden');
		$data['ordenes'] = $select->result();

		$select = $this->db->where('estado','A');
		$select = $this->db->get('tb_clientes');
		$data['clientes'] = $select->result();

		$select = $this->db->where('estado','A');
		$select = $this->db->get('tb_vehiculos');
		$data['vehiculos'] = $select->result();

		$select = $this->db->where('estado','A');
		$select = $this->db->get('tb_tecnicos');
		$data['tecnicos'] = $select->result();

		$this->load->view('blades/header1',$data);
		$this->load->view('v_ordenes');
		$this->load->view('blades/footer');
		$this->load->view('modals/editar-orden');
		$this->load->view('blades/scripts');
	}

	public function nueva()
	{
		$this->load->view('blades/header-orden');
		$this->load->view('v_ordenes-nueva');
		$this->load->view('blades/footer');
		$this->load->view('modals/nueva-orden');
		$data['scriptDePagina'] = 'nueva-orden';
		$this->load->view('blades/scripts',$data);
	}

	public function cliente()
	{
		$ced = $this->input->post('Cedula_o_RUC');

		$query = $this->db->where('Cedula_o_RUC',$ced);

		$query = $this->db->get('tb_clientes');
		//$data['clientes'] = $query->result();
		//$this->load->view('blades/header-orden');
		//$this->load->view('blades/footer-orden',$data);
		echo json_encode($query->result());
	}

	public function vehiculo()
	{
		$plac = $this->input->post('placa');
		$query = $this->db->where('placa',$plac);
		$query = $this->db->get('tb_vehiculos');
		echo json_encode($query->result());
	}

	public function producto()
	{
		$prod = $this->input->post('producto');
		$query = $this->db->like('descripcion',$prod);
		$query = $this->db->get('tb_productos');
		echo json_encode($query->result());
	}

	public function guardarOrden()
	{
		$datos['id_cliente'] = $this->input->post('id_cliente');
		$datos['id_vehiculo'] = $this->input->post('id_vehiculo');
		$datos['kilometraje'] = $this->input->post('e-kilometraje');
		$datos['clave'] = $this->input->post('e-clave');
		$datos['fecha_creacion'] = date("Y-m-d");
		$datos['estado'] = 'P';
		$this->db->insert('tb_orden',$datos);
		redirect('orden/editar/'.$this->db->insert_id().'');
	}

	public function editar($id_orden)
	{
		$data['title'] = 'Orden | Editar';
		$data['scriptDePagina'] = 'editar-orden';
		$data['n_orden'] = $id_orden;
		
		$query = $this->db->where('id',$id_orden);
		$query = $this->db->where('estado !=','E');
		$query = $this->db->get('tb_orden');
		$preorden = $query->result();
		
		if(empty($preorden))
		{
			redirect('orden');
		}
		else
		{
			$data['orden'] = $preorden;

			$id_cliente = $preorden['0']->id_cliente;
			$query = $this->db->where('id',$id_cliente);
			$query = $this->db->get('tb_clientes');
			$data['cliente'] = $query->result();

			$id_vehiculo = $preorden['0']->id_vehiculo;
			$query = $this->db->where('id',$id_vehiculo);
			$query = $this->db->get('tb_vehiculos');
			$data['vehiculo'] = $query->result();

			$query = $this->db->where('id_orden',$id_orden);
			$query = $this->db->where('estado','A');
			$query = $this->db->get('tb_orden_detalle');
			$data['numero_de_items'] = $query->num_rows();
			$data['orden_item'] = $query->result();

			$query = $this->db->get('tb_productos');
			$data['productos'] = $query->result();

			$query = $this->db->where('estado','A');
			$query = $this->db->order_by('Apellidos_y_Nombres');
			$query = $this->db->get('tb_tecnicos');

			$data['tecnicos'] = $query->result();

			$this->load->view('blades/header1', $data);
			$this->load->view('v_ordenes-editar', $data);
			$this->load->view('blades/footer');
			$this->load->view('modals/editar-orden');
			$this->load->view('blades/scripts', $data);
		}
	}

	public function guardarItem()
	{
		$datos['id_orden'] = $this->input->post('id_orden');
		$datos['id_producto'] = $this->input->post('id_producto');
		$datos['cantidad'] = $this->input->post('cantidad');
		
		$query = $this->db->where('id',$this->input->post('id_producto'));
		$query = $this->db->get('tb_productos');
		$row = $query->row();

		$datos['sub_total'] = ($row->precio_publico)*($this->input->post('cantidad'));
		$datos['estado'] = 'A';

		$this->db->insert('tb_orden_detalle',$datos);
		redirect('orden/editar/'.$this->input->post('id_orden').'');
	}

	public function eliminarItem()
	{
		$this->db->where('id',$this->input->post('id_orden_detalle'));		
		$this->db->delete('tb_orden_detalle');
		
		redirect('orden/editar/'.$this->input->post('id_orden_').'');
	}

	public function actualizarOrden()
	{
		$datos['kilometraje'] = $this->input->post('txt_1');
		$datos['clave'] = $this->input->post('txt_2');
		$datos['fecha_creacion'] = $this->input->post('txt_4');
		$datos['tecnico_responsable'] = $this->input->post('txt_3');
		$datos['observacion'] = $this->input->post('txt_5');
		$datos['total'] = $this->input->post('txt_6');
		
		$this->db->set($datos);
		$this->db->where('id',$this->input->post('txt_7'));		
		$this->db->update('tb_orden');
		
		redirect('orden');
	}

	public function eliminarOrden($orden_id)
	{
		$this->db->set('estado','E');
		$this->db->where('id',$orden_id);		
		$this->db->update('tb_orden');

		$this->db->set('estado','E');
		$this->db->where('id_orden',$orden_id);		
		$this->db->update('tb_orden_detalle');

		redirect('orden');
	}

	public function ejecutarOrden($orden_id)
	{
		$select = $this->db->query('SELECT * FROM tb_orden WHERE id='.$orden_id.'');
		$orden = $select->row();
		$fecha_creacion = $orden->fecha_creacion;
		
		$this->db->set('estado','T');
		$date = date('Y-m-d H:i:s');
		$this->db->set('fecha_ingreso',$date);

		if(strtotime($date)<strtotime($fecha_creacion))
		{
			$this->db->set('fecha_creacion',date('Y-m-d'));
		}

		$this->db->where('id',$orden_id);		
		$this->db->update('tb_orden');

		redirect('orden');
	}

	public function finalizarOrden($orden_id)
	{
		$this->db->set('estado','F');
		$date = date('Y-m-d H:i:s');
		$this->db->set('fecha_salida',$date);
		$this->db->where('id',$orden_id);		
		$this->db->update('tb_orden');

		redirect('orden');
	}

	public function historico_vehiculo()
	{
		$data['title'] = 'Historico | Vehiculos';
		$data['scriptDePagina'] = 'historico';
		
		$placa = $this->input->get('placa');

		if(empty($placa))
		{
			$placa = '';
		}
		$data['placa'] = $placa;
		
		$this->db->select('tb_orden.id, tb_orden.fecha_creacion ,tb_vehiculos.placa, tb_orden.kilometraje, tb_tecnicos.Apellidos_y_Nombres, tb_orden.observacion');
		$this->db->from('tb_orden');
		$this->db->where('tb_orden.estado','F');
		$this->db->like('tb_vehiculos.placa',$placa);		
		$this->db->join('tb_tecnicos', 'tb_orden.tecnico_responsable = tb_tecnicos.id','inner');
		$this->db->join('tb_vehiculos', 'tb_orden.id_vehiculo = tb_vehiculos.id','inner');
		$query = $this->db->get();
		$data['ordenes'] = $query->result();

		$this->db->select('*');
		$this->db->from('tb_orden_detalle');
		$this->db->join('tb_productos', 'tb_orden_detalle.id_producto = tb_productos.id','inner');
		$query = $this->db->get();
		$data['detalles'] = $query->result();


		$this->load->view('blades/header1',$data);
		$this->load->view('v_historico');
		$this->load->view('blades/footer');
		$this->load->view('modals/editar-orden');
		$this->load->view('blades/scripts');
	}

	public function home()
	{
		$data['title'] = 'Chevyespecialistas';
		$data['scriptDePagina'] = 'home';

		$this->load->view('blades/header1',$data);
		$this->load->view('v_home');
		$this->load->view('blades/footer');
		$this->load->view('modals/editar-orden');
		$this->load->view('blades/scripts');
	}
}

/* End of file main.php */

/* Location: ./application/controllers/main.php */
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Main extends CI_Controller {



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
		$crud = new grocery_CRUD();
		$crud->set_table('employees');
		$output = $crud->render();
		$output2['data'] = $output;
		$output2['titulo'] = "Chevyespecialistas";
		$this->load->view('blades/header',$output2);
		$this->load->view('blades/menu');
		$this->load->view('v_main');
		$this->load->view('blades/footer');
	}

	public function productos()

	{
		$crud = new grocery_CRUD();
		$crud->set_table('tb_productos');
		$output = $crud->render();
		$output2['data'] = $output;
		$output2['titulo'] = "Chevy | Productos";
		$this->load->view('blades/header',$output2);
		$this->load->view('blades/menu');
		$this->load->view('v_productos',$output);
		$this->load->view('blades/footer');
	}

	public function servicios()

	{
		$crud = new grocery_CRUD();
		$crud->set_table('tb_servicios');
		$output = $crud->render();
		$output2['data'] = $output;
		$output2['titulo'] = "Chevy | Servicios";
		$this->load->view('blades/header',$output2);
		$this->load->view('blades/menu');
		$this->load->view('v_servicios',$output);
		$this->load->view('blades/footer');
	}

	public function clientes()

	{
		$crud = new grocery_CRUD();
		$crud->set_table('tb_clientes');
		$output = $crud->render();
		$output2['data'] = $output;
		$output2['titulo'] = "Chevy | Clientes";
		$this->load->view('blades/header',$output2);
		$this->load->view('blades/menu');
		$this->load->view('v_clientes',$output);
		$this->load->view('blades/footer');
	}

	public function vehiculos()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('tb_vehiculos');
		$output = $crud->render();
		$output2['data'] = $output;
		$output2['titulo'] = "Chevy | Vehiculos";
		$this->load->view('blades/header',$output2);
		$this->load->view('blades/menu');
		$this->load->view('v_vehiculos',$output);
		$this->load->view('blades/footer');
	}
}

/* End of file main.php */

/* Location: ./application/controllers/main.php */
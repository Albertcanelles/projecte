<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('actualitat_model');
		$this->load->database();
	}
 
		function index(){
			$this->load->view('admin/index'); //cambiar a actualitat
	}
	function actualitat(){					  //cambiar a inserir actualitat
	       		$data = $this->actualitat_model->getActualitat();
	            $this->load->view('admin/gestioactualitat', $data);
	        
	    }	
	    	function insertar_actualitat(){					  //cambiar a inserir actualitat
	        $this->load->library('form_validation');
	        $this->form_validation->set_rules('titol','titul','required');
	        $this->form_validation->set_rules('comentari', 'Comentari', 'required');

	        if ($this->form_validation->run() == FALSE)
	        {
	            $this->load->view('gestioactualitat');
	        }
	        else
	        {
	           $titol = $this->input->post('titol');
			   $comentari = $this->input->post('comentari');
			   $foto = $this->input->post('foto');				  
			   $this->load->model('actualitat_model');
			   $this->actualitat_model->crearActualitat($titol, $comentari, $foto);
			   echo 'registro insertado';
	        }
	    }
}

?>
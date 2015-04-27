<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class actualitat_model extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

  public function getActualitat() {
    $this->db->select('id_blog, titol, data_publicacio, comentari, foto');
    $query = $this->db->get('ACTUALITAT');
    return $query->result_array();
  }

	public function crearActualitat($titol, $comentari, $foto) {
    $data = array(
      'titol' => $titol,
      'comentari' => $comentari,
      'foto' => $foto
    );
 
    $this->db->insert('ACTUALITAT', $data);
  }


  }

  

?>
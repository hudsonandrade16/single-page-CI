<?php
	if (!defined ('BASEPATH')) exit('No script acess allow');

	class singlePage extends CI_Controller {
		public function _construct (){
			parent :: _construct();
		}
		public function index(){
	    	$index['caminhos'] = $this->db->get('imagens')->result();
	    	$index['frases'] = $this->db->get('banner')->result();
	    	$index['texto'] = $this->db->get('texto')->result();
		    $this->load->view('index', $index);

		}

	}	


?>
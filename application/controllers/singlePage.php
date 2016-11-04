<?php
	if (!defined ('BASEPATH')) exit('No script acess allow');

	class singlePage extends CI_Controller {
		public function _construct (){
			parent :: _construct();
		}
		public function index(){
			$this->load->helper('form');
			$this->load->helper('url');
			
			$index['msg'] = $this->input->get('msg');

	    	$index['caminhos'] = $this->db->get('imagens')->result();
	    	$index['frases'] = $this->db->get('banner')->result();
	    	$index['texto'] = $this->db->get('texto')->result();
		    $this->load->view('index', $index);

		}

		public function add_db (){
			$submit = $this->input->post('submit');

			if ($submit ==  false) {
				return;
			}

			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$message = $this->input->post("message");


			$data = array(
			   'name' => $name ,
			   'email' => $email ,
			   'message' => $message
			);
			$this->db->insert('contacts',$data);

			redirect(base_url()."Single_Page?msg=ok#section-three");

		}

	}	


?>
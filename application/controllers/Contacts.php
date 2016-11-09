<?php

	if (!defined ('BASEPATH')) exit('No script acess allow');

	class Contacts extends CI_Controller {
		public function _construct (){
			parent :: _construct();
		}
		
		public function add_db ( ){
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
					$this->load->model('addcontacts');
					$this->addcontacts->add_db($data);
					$this->load->model('sendemail');
					$this->sendemail->send($data);

					redirect(base_url()."Single_Page?msg=ok#section-three");

				}

		}



?>
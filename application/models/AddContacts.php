<?php 
	
	class AddContacts extends CI_Model {

		public function _construct (){
			parent :: _construct();
		}
		
		public function add_db ( $data){

				$this->db->insert('contacts',$data);					

				}

		}
	


?>
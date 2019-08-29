<?php
class Post_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}

	public function get_posts($Drink = FALSE){
		if ($Drink === FALSE) {
			$query = $this->db->get('drinkqueue');
			return $query->result_array();
		}

		$query = $this->db->get_where('drinkqueue', array('Drink'=>$Drink));
		return $query->row_array();
	}

	public function create_post(){
		$data = array(
			'Drink' =>$this->input->post('Drink'),
			'Quantity' =>$this->input->post('drinkQuan')
		);

		return $this->db->insert('drinkqueue',$data);
	}
}

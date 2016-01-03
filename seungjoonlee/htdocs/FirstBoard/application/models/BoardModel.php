<?php 
	class BoardModel extends CI_Model{
		function __construct() {
			parent::__construct();
		}

		public function getAll() {
			//echo 'test';
			return $this->db->query('SELECT * FROM Board')->result();
		}

		public function getOnId($topic_id) {
			return $this->db->get_where('Board',array('id'=>$topic_id))->row();
			//return $this->db->query('SELECT * FROM Board WHERE id='.$topic_id);
		}

		public function getLen() {
			return $this->db->query('SELECT * FROM Board')->num_rows();
		}
	}
 ?>
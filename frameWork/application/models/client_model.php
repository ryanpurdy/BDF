<?php
class Client_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_Clients()
	{
		if ('clientID' === FALSE)
		{
			$query = $this->db->get('Clients');
			return $query->result_array();
		}
	
		//$query = $this->db->get_where('Clients', array('clientID' => $id));
		//return $query->row_array();
		
		$sql = "select * from Clients where clientID = ?";
		$query = $this->db->query($sql, array('id'));	 // I really don't think 'id is right but it cleared error'
		return $query->row_array();
	}
	
	public function get_Client($id = 0)
	{
		
		//$query = $this->db->get_where('Clients', array('clientID' => $id));
		//return $query->row_array();
	
	$sql = "select * from Clients where clientID = ?";
	$query = $this->db->query($sql, array($id));	
	return $query->row_array();
	
	}

}


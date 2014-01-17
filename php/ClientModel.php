<?php

	class ClientModel {
		private $db;
		
		public function __construct($dsn, $user, $pass){
			try{
				$this->db = new \PDO($dsn, $user, $pass);
			}
			catch (\PDOException $e){
				var_dump($e);
			}
		}
		
		public function getClientList(){
			$statement = $this->db->prepare("
				select clientID, name, organization, email, phone, userName, password,
				from Clients
				order by name
				limit 50
			");
			try {
				if($statement->execute()){
					$rows = $statement->fetchALL(\PDO::FETCH_ASSOC);
					return $rows;
				}
			}
			catch (\PDOException $e) {
				var_dump($e);
			}
			return array();
		}
		
		public function getClientDetails($id){
			$statement = $this->db->prepare("
				select clientID, name, organization, email, phone, userName, password,
				from Clients
				where clientID = :client_id
			");
			try{
				if($statement->execute(array(":client_id"=>$id))){
					$rows = statement->fetchALL(\PDO::FETCH_ASSOC);
					
					return $rows;
				}
			}
			catch(\PDOException $e){
				var_dump($e);
			}
		}
	}
?>
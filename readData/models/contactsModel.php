<?
include 'DB.php';

class contactsModel extends DB{
		
		public function __constract(){
			
		}
		
		public function getAll(){
			
			$sql = "select * from Clients";
			$st = $this->db->prepare($sql);
			$st->execute();
			
			return $st->fetchAll(); 
		}
		
		public function getOne($id=0){
			$sql = "select * from Details where artID = :id";
			$st = $this->db->prepare($sql);
			$st->execute(array(":id"=>$id));
			
			return $st->fetchAll();
		}
	}
?>
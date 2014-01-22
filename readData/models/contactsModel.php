<?
include 'DB.php';

class contactsModel extends DB{
		
		
		
		public function getAll(){
			// you mean contacts?
			$sql = "select name, clientID, phone
			from
			Clients";
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
		public function checkLogin($uname = '', $password=''){
		
			$sql= 'select * from Clients where userName = :uname and password=:password';
			// Clients not users // your column names are wrong too
			$st = $this->db->prepare($sql);
			$st->execute(array(':uname'=>$uname, ':password'=>$password));
			
			$num = $st->rowCount();
			
			if($num>0){
				$_SESSION['loggedin'] = 1;
			}else{
				$_SESSION["loggedin"] = 0;
			}
			
			return $st->fetchAll(PDO::FETCH_COLUMN,0);
		}
		
	public function logout(){

		$_SESSION['loggedin'] =0;
	}
}
?>
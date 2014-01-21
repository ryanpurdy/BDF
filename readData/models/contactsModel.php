<?
include 'DB.php';

class contactsModel extends DB{
		
		public function __constract(){
			
		}
		
		public function getAll(){
			
			$sql = "select u.name, u.clientID, ud.phone
			from
			users u join user_details ud on u.id = ud.id";
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
		public function cheskLogin($uname = '', $password=''){
			$sql= 'select * from users where un = :uname and pass=:password';
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
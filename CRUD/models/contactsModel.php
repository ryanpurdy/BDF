<?
include 'DB.php';

class contactsModel extends DB{
		
		public function __constract(){
			
		}
		
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
			$sql = "select * from Clients where artID = :id";
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
	
	public function update($id=0, $email="", $phone="", $userName=""){
	
	$sql = "update Clients set email = :email, phone=:phone where id =:id";
	$st = $this->db->prepare($sql);
	$st->execute(array("id"=>$id, ":email"=>$email, ":phone"=> $phone, ":userName"=>$userName));	
	} 
	
	public function delete($id=0){
		$sql= "delete from Clients where client =:id";
		$st = $this->db->prepare($sql);
		$st->execute(array("id"=>$id));
		
		$sql = "delete from users where clientID= :id";
		$st = $this->db->prepare($sql);
		$st->execute(array(":id"=>$id));
	}
	
	public function add($name = '', $userName='', $password='', $email =''){
		
		$sql = "insert into users (userName, password, email)
							values (:userName,:password, :email)";
		$st = $this->db->prepare(sql);
		$st-> execute(array(":userName"=> $userName, ":password" => $password, ":email" => $email));
		$clietnId = $this->db->lastInsertId();
		
		$sql="insert into Clients (clientId, email, phone)
						values (:clientId, ::email, :phone)";
		$st = $this->db->prepare($sql);
	    $st->execute(array(":clientId"=>$clientID, ":email"=> $email, ":phone"=>$phone));
	}
	
}
?>
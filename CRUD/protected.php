<?
session_start();
include'models/protector.php';

include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'protected';

$views = new viewModel();
$contacts = new contactsModel();

$views->getView("views/header.inc");

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="home"){
		$result = $contacts->getAll();
		$views->getView("views/body.php", $result);
	}
	
	if($_GET["action"]=="details"){
		$result=$contacts->getOne($_GET["id"]);
		$views->getView("views/details.php",$result);
	//$data = $contacts->getAll();
	//$views->getView("views/body.php",$data);
	}
}else{
	
	$data = $contacts->getAll();
	
	$views->getView("views/body.php",$data);
}

$views->getView("views/footer.inc");
?>
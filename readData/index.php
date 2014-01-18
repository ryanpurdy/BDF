<?

include 'models/viewModel.php';
include 'models/ContactsModel.php';

$pagename = 'index';$views = new viewModel();
$views->getView("views/header.inc");
$contacts = new contactsModel();

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="home"){	
		$result = $contacts->getAll();
		$views->getView("views/body.php", $result);
	}
	if($_GET["action"]=="details"){
		$result = $contacts->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);	
	}
}else{
	$result = $contacts->getAll();
	$views->getView("views/body.php", $result);
}

$views->getView("views/footer.inc");
?>
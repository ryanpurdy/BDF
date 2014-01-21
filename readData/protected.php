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
	
}else{
	
}

$views->getView("views/footer.inc");
?>
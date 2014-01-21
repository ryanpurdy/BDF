<?

session_start();

include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'index';
$views = new viewModel();
//$views->getView("views/header.inc");
$contacts = new contactsModel();

if(@$_GET["action"]!="checklogin" && @$_GET["action"]!="logout"){
	$views->getView("views/header.inc");
}

if(!empty($_GET["action"])){
	
	if($_GET["action"]=="home"){	
		$result = $contacts->getAll();
		$views->getView("views/body.php", $result);
	}
	if($_GET["action"]=="details"){
		$result = $contacts->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);	
	}
	if($_GET["action"]=="login"){
		$views->getView("views/loginform.html");
	}
	if($_GET["action"]=="checklogin"){
		$result = $contacts->checkLogin($_POST["un"], $_POST["pass"]);
		if(count($result)>0){
			header("location: protected.php");
		}else{
			$views->getView("views/header.inc");
			echo "<center>Login Error</center>";
			$views->getView("views/loginform.html");
		}
		if($_GET["action"]=="logout"){
			$contacts->logout();
			header("location: index.php");
		}
	}
	
}else{
	$result = $contacts->getAll();
	$views->getView("views/body.php", $result);
}

$views->getView("views/footer.inc");
?>
<?php
	require_once "db.php";
	require_once "ClientModel.php";
	require_once "ClientView.php";
	$blog = new ClientModel(MY_DSN, MY_USER, MY_PASS);
	$view = new ClientView();
	$view->showHeader('Client List');
	$view->showLatest($blog->getClientList());
	$view->showFooter();
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8"/>
 <title><?php echo $pageTitle; ?></title>
 <style>
 	body{background-color:#c5f1ff;
	 	width: 960px;
	 	margin-left:auto;
	 	margin-right:auto;
 	}
 	center{background-color:white;}
 	p{font-size: 24px;}
 	
 </style>
</head>

<center>
<p><b> Client List </b></p>
<p><a href="?action=">HOME</a> | <a href="?action=login">Login</a></p>

<?
if($_SESSION['loggedin']== 1){
	echo "<a href='index.php?action=logout'>LOGOUT</a></p>";
	echo "<a href='protected.php?actions='>Protected</a><a href'/protected.php?action=add'>Add a Contact</a></p>";
}else{
	echo "<a href ='index.php?action=login'>LOGIN</a></p>";
}
?>
</center>


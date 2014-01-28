<?
	echo "<center>";
	foreach($data as $d){
		echo " <b>Email:</b>";
		echo $d["email"];
		echo " <br><b>Phone:</b>";
		echo $d["phone"];
		echo "<br>";
	}
	echo "</center>";
?>
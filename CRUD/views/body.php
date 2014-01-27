<?
	echo "<center>";
	foreach($data as $d){
	
		echo $d["name"];
		echo " ";
		//echo $d["organization"];
		echo " <a href=?action=Clients&clientID=".$d["clientID"].">Clients</a>";
		echo "<br>";
	}

	echo "</center>";
?>
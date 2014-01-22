<?
	echo "<center>";
	foreach($data as $d){
	
		echo $d["name"];
		echo " ";
		//echo $d["organization"];
		echo " <a href=?action=details&id=".$d["clientID"].">details</a>";
		echo "<br>";
	}

	echo "</center>";
?>
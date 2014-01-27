<?
	echo "<center>";
	foreach($data as $d){
		echo " <b>Item Name:</b>";
		echo $d["itemName"];
		echo " <b>Date:</b>";
		echo $d["date"];
		echo " <b>Item Description:</b>";
		echo $d["Description"];
		echo "<br>";
		echo "working";
	}
	echo "</center>";
?>
<?
	echo "<center>";
	foreach($data as $d){
		echo " <b>Item Name:</b>";
		echo $d("itemName");
		echo " <b>Date:</b>";
		echo $d("date");
		echo " <b>Item Descripton:</b>";
		echo $d("Description");
	}
	echo "</center>";
?>
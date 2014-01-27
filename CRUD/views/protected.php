<?
echo "<center>";
foreach($data as $d){
	echo ' <b>Email:</b>';	
	echo $d['email'];
	echo ' <b>Phone:</b>';
	echo $d['phone'];
	echo " <a href='?action=update&clientID=".$d["clientID"]."'>Update</a>";
	echo " <a href='?action=delete&clientID".$d['clientID']."'>Delete</a>";
	echo "<br>";
}
echo "</center>";
?>
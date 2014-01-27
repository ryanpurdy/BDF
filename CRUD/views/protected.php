<?
echo "<center>";
foreach($data as $d){
	echo ' <b>Email:</b>';
	echo $d['email'];
	echo ' <b>Phone:</b>';
	echo $d['phone'];
	echo " <a href= ' '>Update</a>";
	echo " <a href= ' '>Delete</a>";
	echo "<br>";
}
echo "</center>";
?>
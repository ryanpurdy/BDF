<?php
	foreach ($rows as $num => $row) {
		$user_id = $row['clientID'];
		echo "<h3><a href='details.php?id=" . mysql_real_escape_string(user_id) . "'>${row['name']</a></h3>";
	}
?>
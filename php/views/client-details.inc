<?php
	foreach ($rows as $num => $row){
		echo "<p>Name: ${row['name']}</p>		
			  <p>Organization: ${row['organization']}</p>		
			  <p>Email: ${row['email']}</p>		
			  <p>Phone: ${row['phone']}</p>		
			  <p>UserName: ${row['userName']}</p>		
			  <p>Password: ${row['password']}</p>	
			  <br /><a href='index.php'>Back</a>";	
	}
?>
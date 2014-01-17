<!DOCTYPE html>
<html>
<head><title>iTunes Example</title></head>
<body>
<h1>iTunes PHP Example</h1>
<p>Welcome to PHP</p>
$dsn = "mysql:host = 127.0.0.1; port=8889";
$db_user = "root";
$db_pas = "root";
$db = new \pdo($dsn, &db_user, $db_pass);
var_dump($db);
?>  
</body>
</html>
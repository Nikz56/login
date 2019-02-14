<html>
<body>
<?php
	session_start();
    if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;
    $_SESSION['counter']++;
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'login';
	$conn = mysqli_connect($host,$user,$password,$db);
	if(isset($conn)){
		//echo "connected..!!";
	}
		$name = "";
		$pass = "";
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			//echo "executed";
			$name = $_POST["fname"];
			$pass = md5($_POST["password"]);
	}
	$sql = "INSERT INTO users (name,password) 
             VALUES('{$conn->real_escape_string($name)}', '{$conn->real_escape_string($pass)}')";
        $insert = $conn->query($sql);
	
?>
</body>
</html>

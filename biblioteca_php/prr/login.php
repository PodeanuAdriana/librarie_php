<?php
session_start();
require 'config.php';
error_reporting( error_reporting() & ~E_NOTICE );
if (!isset($_GET["username"]) or (empty($_GET["parola"])))
{

	echo '<html>
	<head>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<div class="logare">
	<form action="login.php" method="get">
	<center>Username: <input type="text" id="username" name="username"></center><br>
	<center>Parola: <input type="password" id="parola" name="parola"></center><br>
	<input type="submit" value="LOGIN">
	</form>
	</div>
	</body>
	</html>
	';

} 
else 
{
	$username=$_GET["username"];
	$parola=$_GET["parola"];	
	
	$sql = 'SELECT * FROM users WHERE user="'.$username.'"';
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
		    while($row = mysqli_fetch_array($result)){
		        $username_db = $row['user'];
				$parola_db = $row['parola'];
				 
		    }
		    mysqli_free_result($result);
		}
	while($parola != $parola_db){

		echo '
			<html>
			<head>
			<link rel="stylesheet" href="css/style.css">
			</head>
			<body>
		<p>Username sau Parola incorecte. Incearca din nou!</p>
        <div class="logare">
		<form action="login.php" method="get">
		<center>Username: <input type="text" id="username" name="username"></center><br>
		<center>Parola: <input type="password" id="parola" name="parola"></center><br>
		<input type="submit" value="LOGIN">
		</form>
		</div>
		<a href="index.php">Inapoi la site</a>
		</body>
		</html>';
		die();
	}
		 
	if (isset($_GET["username"]) and isset($_GET["parola"]))	
		if ($parola === $parola_db and $username === $username_db) {
			$_SESSION["user"] = $username_db;
			echo 'Logarea s-a facut cu succes<br>';
            echo"<script>window.location.href='formular.php';</script>"	;		
		}
		if ($username === "admin@admin.com"){
			echo "<a href='admin.php';>Userul logat are drepturi de admin. Click aici pentru pagina de admin</a><br>";
			echo "<a href='index.php'>Click pentru a merge inapoi la site</a>";
		}
		else echo "<a href='index.php'>Inapoi la site</a>";
	}
}
?>

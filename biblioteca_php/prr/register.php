<?php
echo'
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="inregistrare">
    <form action="register.php" method="get">
       Username: <input type="text" id="username" requiered><br>
       Email: <input type="email" id="email"requiered><br>
       Phone:<input type="text" id="phone" requiered><br>
       Password:<input type="password" id="password" requiered><br>
       <input type="submit" value="Inregistreaza-te!">
    </form>
</div>
</body>
';
require 'config.php';
if(isset($_GET['username'])and isset($_GET['email'])and isset($_GET['phone']) and isset($_GET['password']))
{
    $username=isset($_GET['username'])? $_GET['username']:'';
    $email=isset($_GET['email']) ? $_GET['email']:'';
    $phone=isset($_GET['phone'])?$_GET['phone']:'';
    $password=isset($_GET['password'])?$_GET['password']:'';

    $link=mysqli_connect("localhost","root","","daw");
    $sql="INSERT INTO users(user,email,phone,parola)VALUES('$username','$email','$phone','$password')";
    if (mysqli_query($link, $sql))
    {
        echo "<script>alert('Solicitare transmisa administratorului'); window.location.href='index.php';</script>";
    }
    $vizualizezaza="SELECT * FROM users WHERE email=$email and parola=$password";
    if (mysqli_query($link, $sql))
    {
       echo"Arata datele utilizatorului";
    }
      $link->close();






}




?>
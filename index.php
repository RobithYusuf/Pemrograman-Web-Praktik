<?php
session_start();
if (isset($_SESSION["username"])) {
    # code...
}else {
    echo header ("location:Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login berhasil</title>
    <link rel="stylesheet" href="gradien.css"> 
</head>
<body>
    <h2>SELAMAT ANDA BERHASIL LOGIN !</h2>
   
    <h3><button><a href="logout.php">logout</a></h3></button>
</body>
</html>
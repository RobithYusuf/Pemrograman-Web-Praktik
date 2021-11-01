<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
     <link rel="stylesheet" href="model.css"> 
</head>
<body>

<div class="Edit">
    <!-- membuat form -->
    <form action="proses_login.php" method="post">
        <?php if(isset($_GET["login_error"])){ ?>
            <h5>Maaf password atau username salah !<?php }?></h>
            <br><br>
            <!-- input username -->
            <label>Username</label><br> 
            <input type="text" name="username" placeholder="Masukan Username">
            <br>
            <!-- input password -->
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Masukan Password">
            <br>
            <!-- membuat button submit -->
            <br>
            <button type="submit" value="Login" name="commit">Log in</button>
            
    </form>
    
</body>
        
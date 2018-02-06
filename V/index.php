<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 5.02.2018
 * Time: 14:25
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>GİRİŞ</title>
    <link rel="stylesheet" href="gerek/css/ana.css">
</head>
<body>
<div class="container">

    <img style="margin: 20px;" src="gerek/resimler/profil.jpg" width="200px" height="200px" />
    <form action="C/ana.php" method="post">
        <div class="form-input">
            <input type="text" name="username" placeholder="Kullanıcı Adı">
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Şifreniz">
        </div>
        <input type="submit" name="submit" value="Giriş" class="btn-giriş"><br/>
        <a href="#">Şifrenizi Unuttunuz mu?</a>
    </form>

</div>
</body>
</html>

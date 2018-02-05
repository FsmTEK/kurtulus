<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 5.02.2018
 * Time: 14:03
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
    <table align="center">
        <tr>
            <td>Kullanici Adi</td>
            <td>:</td>
            <td><input type="text" name="kadi"></td>
        </tr>
        <tr>
            <td>Sifre</td>
            <td>:</td>
            <td><input type="password" name="sifre"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Giris"></td>
        </tr>
    </table>
</form>

</body>
</html>

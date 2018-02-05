<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 5.02.2018
 * Time: 14:19
 */
<?php

include("ayar.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center>Admin sayfasina hosgeldiniz..! ";
    echo "<a href=logout.php>Guvenli cikis</a></center>";
}
?
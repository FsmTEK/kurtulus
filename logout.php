<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 5.02.2018
 * Time: 14:20
 */
<?php
session_start();
ob_start();
session_destroy();
echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>
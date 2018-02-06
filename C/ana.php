<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 5.02.2018
 * Time: 14:42
 */

$kullaniciadi=$_POST['kadi'];
$sifre = $_POST['sifre'];

if ($kullaniciadi=='admin' and $sifre=='336699'){
    include '../V/admin.php';
}else{
    echo 'Aha Yanış Oldu Lan';
}
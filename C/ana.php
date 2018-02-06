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
    header("Refresh:0; url=../V/admin.php");
}else{
    echo ' Kullanıcı Adı veya Şifreniz Yanlış. Lütfen Düzeltip Tekrar Deneyiniz..';
    header("Refresh:5; url=../index.php");
}
<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 5.02.2018
 * Time: 14:42
 */
$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];
echo  $kadi.'-'.$sifre;



if ($kadi=='admin' && $sifre=='123456') {



} else{

    echo "Yalnış Bilgi Girdiniz";
    include ("index.php");
}
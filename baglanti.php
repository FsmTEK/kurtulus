<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 16.03.2018
 * Time: 18:28
 */

$baglanti = mysqli_connect("localhost", "root", "");
if (!$baglanti)
    exit("Bağlantı sağlanamadı.");

mysqli_select_db("like");

mysql_close();


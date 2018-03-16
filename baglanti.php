<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 16.03.2018
 * Time: 18:28
 */

$baglanti = mysql_connect("localhost", "root", "root");
if (!$baglanti)
    exit("Bağlantı sağlanamadı.");

mysql_select_db("like");

mysql_close();


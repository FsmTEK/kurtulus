<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=like", "root", "");
} catch ( PDOException $e ){
    print $e->getMessage();
}

<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $host       = "localhost";
    $dbname     = "";
    $root       = "";
    $password   = "";

    try {

        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $root, $password);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $error) {
        die("Veritabanı Bağlantı Hatası: " . $error->getMessage());
    }

    if (isset($_SESSION)) {
        if (!isset($_SESSION["_token"])) {
            $_SESSION["_token"] = md5(time() . rand(0, 9999999));
        }
    }
?>

<?php
function koneksi()
{
    try {
        $pdo_conn = new PDO(
            'mysql:host=localhost;dbname=perpustakaan_prak501','root','',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $e) {
        print "Gagal Terhubung ke Database: " . $e->getMessage() . "<br/>";
        die();
    }
    return $pdo_conn;
}
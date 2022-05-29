<?php
session_start();
include 'Koneksi.php';
$nomor_member = $_POST['nomor_member'];
$password = $_POST['password'];

$sql = koneksi()->prepare("SELECT * FROM member WHERE nomor_member = :no_member");
$sql->bindParam('no_member', $nomor_member, PDO::PARAM_STR);
$sql->execute();
$hasil = $sql->fetch();
if ($hasil) {
    if ($password == $hasil["password"]) {
        $_SESSION["nomor_member"] = $hasil['nomor_member'];
        header("Location: index.php");
    }
} else {
    echo "<h1>Gagal Login</h1>";
}

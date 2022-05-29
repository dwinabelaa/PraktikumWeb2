<?php
session_start();
require 'Model.php';
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
} else if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
<a href="FormMember.php"><button>Tambah Data</button></a>
<table border="1">
    <tr>
        <th>Nama Member</th>
        <th>Nomor Member</th>
        <th>Password</th>
        <th>Alamat</th>
        <th>Tanggal Daftar</th>
        <th>Tanggal Bayar</th>
        <th>Aksi</th>
    </tr>
    <?= tampildataperpustakaan("member") ?>
</table>
<a href="Logout.php"><button>Logout</button></a>

</html>
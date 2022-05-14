<?php
require 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<a href="FormPeminjaman.php"><button>Tambah Data</button></a>
<table border="1">
    <tr>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>
    <?= tampildataperpustakaan("peminjaman") ?>
</table>

</html>
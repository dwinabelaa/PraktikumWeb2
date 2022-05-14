<?php
require 'Model.php';
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<a href="FormBuku.php"><button>Tambah Data</button></a>
<table border="1">
    <tr>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    <?= tampildataperpustakaan("buku") ?>
</table>

</html>
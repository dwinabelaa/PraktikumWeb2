<?php
require 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>

<!DOCTYPE html>
<html lang="en">
<form action="" method="post">
    <table>
        <tr>
            <td>
                Tanggal Peminjaman
            </td>
            <td>
                <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Kembali
            </td>
            <td>
                <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <?php
                if (isset($_GET['id_peminjaman'])) {
                    echo "<button type='submit' name='update'>Update</button>";
                } else {
                    echo "<button type='submit' name='submit'>Tambah</button>";
                }
                ?>
            </td>
        </tr>
    </table>
</form>

</html>
<?php
if (isset($_POST['submit'])) {
    tambahdatapeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
}
if (isset($_POST['update'])) {
    updatepeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
}
?>
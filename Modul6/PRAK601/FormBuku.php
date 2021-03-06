<?php
session_start();
require 'Model.php';
if (!isset($_SESSION['nomor_member'])) {
    header('location:ErrorPage.php');
} else if (isset($_GET['id_buku'])) {
    editbuku();
}
?>

<!DOCTYPE html>
<html lang="en">
<form action="" method="post">
    <table>
        <tr>
            <td>
                Judul Buku
            </td>
            <td>
                <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
            </td>
        </tr>
        <tr>
            <td>
                Nama Penulis
            </td>
            <td>
                <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
            </td>
        </tr>
        <tr>
            <td>
                Penerbit
            </td>
            <td>
                <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
            </td>
        </tr>
        <tr>
            <td>
                Tahun Terbit
            </td>
            <td>
                <input type="text" name="thn_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php
                if (isset($_GET['id_buku'])) {
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
    tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
}
if (isset($_POST['update'])) {
    updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
}
?>
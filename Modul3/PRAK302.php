<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>

<body>
    <form action="" method="POST">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="alamat_gambar"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <?php
    if (isset($_POST["cetak"])) {
        $tinggi = $_POST["tinggi"];
        $alamat_gambar = $_POST["alamat_gambar"];

        $i = 1;
        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
                $j++;
            }
            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$alamat_gambar' width='20' height='20'/>";
                $k--;
            }
            echo '<br>';
            $i++;
        }
    }
    ?>
</body>

</html>
<?php
require 'Koneksi.php';

// fungsi tampil data perpustakaan
function tampildataperpustakaan($tabel)
{
    $stmt = koneksi()->prepare("SELECT * FROM $tabel");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        if ($tabel == "member") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama_member'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='FormMember.php?id_member=" . $row['id_member'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='Member.php?id_member=" . $row['id_member'] . "' onclick=\"return confirm('Yakin Ingin Menghapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }elseif ($tabel == "buku") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $row['id_buku'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='Buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Yakin Ingin Menghapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }elseif ($tabel == "peminjaman") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='FormPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='Peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' onclick=\"return confirm('Yakin Ingin Menghapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }
}

// MEMBER
// fungsi tambah data member
function tambahdatamember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $sql = "INSERT INTO `member` ( `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama,:nomor,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':nama' => $nama, ':nomor' => $nomor, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($result)) {
        header('location:Member.php');
    }
}
// fungsi edit member
function editmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
// fungsi update member
function updatemember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar)
{
    $pdo_statement = koneksi()->prepare(
        "update member set nama_member='" . $nama . "', nomor_member='" . $nomor . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id);
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Member.php');
    }
}
// fungsi hapus member
function hapusmember($id_member)
{
    $stmt = koneksi()->prepare("DELETE FROM member where id_member=" . $id_member);
    $result = $stmt->execute();
    if ($result) {
        header('location:Member.php');
    }
}

// BUKU
// fungsi tambah data buku
function tambahdatabuku($judul,$penulis,$penerbit,$thn_terbit){
    $sql = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:thn_terbit)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':thn_terbit' => $thn_terbit));
    if (!empty($result)) {
        header('location:Buku.php');
    }
}
// fungsi edit buku
function editbuku()
{
    $stmt = koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
// fungsi update buku
function updatebuku($id, $judul, $penulis, $penerbit, $thn_terbit)
{
    $pdo_statement = koneksi()->prepare(
        "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $thn_terbit . "' where id_buku=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Buku.php');
    }
}
// fungsi hapus buku
function hapusbuku($id_buku)
{
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:Buku.php');
    }
}

// PEMINJAMAN
// fungsi tambah data peminjaman
function tambahdatapeminjaman($tgl_pinjam, $tgl_kembali)
{
    $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tgl_pinjam,:tgl_kembali)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':tgl_pinjam' => $tgl_pinjam, ':tgl_kembali'=> $tgl_kembali));

    if (!empty($result)) {
        header('location:Peminjaman.php');
    }
}
// fungsi edit peminjaman
function editpeminjaman(){
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}
// fungsi update peminjaman
function updatepeminjaman($id, $tgl_pinjam, $tgl_kembali) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE peminjaman SET tgl_pinjam='" . $tgl_pinjam ."', tgl_kembali='" . $tgl_kembali . "' WHERE id_peminjaman = ". $id
    );
    $res = $pdo_statement->execute();
    if (!empty($res)) {
        header('location:Peminjaman.php');
    }
}
// fungsi hapus peminjaman
function hapuspeminjaman($id_peminjaman)
{
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
    $result = $stmt->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}
?>
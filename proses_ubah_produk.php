<?php
if ($_POST) {
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
    $jumlah = $_POST['jumlah'];
    if (empty($nama_produk)) {
        echo "<script>alert('Nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
    }elseif (empty($keterangan)) {
        echo "<script>alert('keterangan tidak boleh kosong');location.href='tambah_produk.php';</script>";
    }elseif (empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";
    }elseif (empty($jumlah)) {
        echo "<script>alert('Jumlah produk tidak boleh kosong');location.href='tambah_produk.php'</script>";
    }else {
        include "koneksi.php";
            if (empty($harga)) {
                $update=mysqli_query($conn, "update produk set nama_produk='".$nama_produk."', keterangan='".$keterangan."', harga='".$harga."', jumlah='".$jumlah."' where id_produk='".$id_produk."'") or die (mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update produk');location.href='tambah_produk.php';</script>";
            }else {
                echo "<script>alert('gagal update produk');location.href='tambah_produk.php?id_produk=".$id_produk."';</script>";
            }
        }else {
            $update=mysqli_query($conn, "update produk set nama_produk='".$nama_produk."', keterangan='".$keterangan."', harga='".$harga."', jumlah='".$jumlah."' where id_produk='".$id_produk."'") or die (mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update produk');location.href='tambah_produk.php';</script>";
            }else {
                echo "<script>alert('gagal update produk');location.href='tambah_produk.php?id_produk=".$id_produk."';</script>";
            }
        }
    }   
}
?>
    
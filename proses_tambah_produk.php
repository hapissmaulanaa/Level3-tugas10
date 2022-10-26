<?php
if ($_POST) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    if (empty($nama_produk)) {
        echo "<script>alert('Nama produk tidak boleh kosong');location.href='tambah_produk.php'</script>";
    }elseif (empty($keterangan)) {
        echo "<script>alert('Keterangan produk tidak boleh kosong');location.href='tambah_produk.php'</script>";
    }elseif (empty($harga)) {
        echo "<script>alert('Harga produk tidak boleh kosong');location.href='tambah_produk.php'</script>";
    }elseif (empty($jumlah)) {
        echo "<script>alert('Jumlah produk tidak boleh kosong');location.href='tambah_produk.php'</script>";
    }else {
        include "koneksi.php";
        $insert= mysqli_query($conn, "insert into produk (nama_produk, keterangan, harga, jumlah) value ('".$nama_produk."', '".$keterangan."', '".$harga."', '".$jumlah."')") or die (mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php'</script>";
        }else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php'</script>";
        }
    }
}
?>


<?php
include 'koneksi.php';
$TABLE_NAME = 'produk';

$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlahBarang'];

// query SQL untuk update data
$query="UPDATE $TABLE_NAME SET keterangan='$keterangan',harga='$harga',jumlah='$jumlah'  WHERE nama_produk='$nama_produk'";

mysqli_query($conn, $query);

if (!$query) {
	die ('ERROR: Data gagal diedit pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}
echo '<script>alert("Data Berhasil Diperbarui");' ;
echo 'window.location.href = "showTable.php";</script>';
?>




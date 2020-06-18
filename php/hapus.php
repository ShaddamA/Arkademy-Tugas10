<?php 
include 'koneksi.php';
$table_name = 'produk';
$nama_produk = $_GET['nama_produk'];

// query SQL untuk hapus data
$query="DELETE FROM $table_name WHERE nama_produk='$nama_produk'";
mysqli_query($conn, $query);
if (!$query) {
	die ('ERROR: Data gagal dihapus dari tabel :' . $table_name . ', dikarenakan : ' . mysqli_error($conn));
}
echo '<script>alert("Data Berhasil Dihapus");' ;
echo 'window.location.href = "showTable.php";</script>';
?>


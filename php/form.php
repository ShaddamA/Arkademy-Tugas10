<?php
include 'koneksi.php';
$TABLE_NAME = 'produk';

//Menyimpan data ke database
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlahBarang'];

//query untuk insert data ke database
$query = "INSERT INTO $TABLE_NAME SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' ";
mysqli_query($conn, $query);

//kondisi apabila query gagal
if(!$query){
    die ('ERROR : Data gagal ditambahkan kedalam tabel '. $TABLE_NAME . ': ' .mysqli_error($conn));
}
echo '<script>alert("Data Berhasil Ditambahkan");' ;
echo 'window.location.href = "showTable.php";</script>';
?>

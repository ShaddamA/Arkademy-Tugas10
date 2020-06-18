<?php

include 'koneksi.php';
$TABLE_NAME = 'produk';

$sql = 'SELECT * FROM `'.$TABLE_NAME . '`';
$query = mysqli_query($conn, $sql);

if(!$query){
    die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table border="1">
    <thead>
        <tr>
            <th>&nbsp; NAMA PRODUK &nbsp;</th>
            <th>&nbsp; KETERANGAN &nbsp;</th>
            <th>&nbsp; HARGA &nbsp;</th>
            <th>&nbsp; JUMLAH &nbsp;</th>
            <th colspan = "2">Menu Tindakan</th>
        </tr>
    </thead>
    <tbody>';
    
while ($row = mysqli_fetch_array($query))
{
echo '<tr>
        <td>'.$row['nama_produk'].'</td>
        <td>'.$row['keterangan'].'</td>
        <td>'.$row['harga'].'</td>
        <td>'.$row['jumlah'].'</td>
        <td><a href="hapus.php?nama_produk='.$row['nama_produk'].'">Hapus</a></td>
		<td><a href="edit.php?nama_produk='.$row['nama_produk'].'">Edit</a></td>
    </tr>';
}
echo '
</tbody>
</table>';

echo ('<a href="../index.html">Kembali kehalaman utama</a>')
?>